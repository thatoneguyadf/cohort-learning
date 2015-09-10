<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


class Dragons {
    public function __construct() {
        //create the connection
        $this->con = new mysqli('localhost', 'root', '1234', 'dragons');

        if (mysqli_connect_errno()) {
            die('Could not connect to database');
        }

        $this->picker = 'all';
    }

    public function allDragons() {
        //make a query
        $result = $this->con->query('SELECT * FROM dragon_types');

        //work with result
        return $result->fetch_all(MYSQL_ASSOC);
    }

    public function whichDragons($input) {
        //make a query
        if ($stmt = $this->con->prepare('SELECT color, breath, type FROM dragon_types WHERE color LIKE ? OR breathe LIKE ? OR type LIKE ?')) {
            $param = "%$input%";
            $stmt->bind_param('sss', $param, $param, $param);
            $stmt->execute();
            $stmt->bind_result($color, $breath, $type);

            $dragons = [];

            //working with result
            while ($stmt->fetch()) {
                $dragons[] = ['color' => $color, 'breath' => $breath, 'type' => $type];
            }

            return $dragons;
        }

        return [];
    }

    public function chooser($usrInput = 'all') {
        if ($usrInput == 'all') {
            return $this->allDragons();
        }

        return $this->whichDragons($usrInput);
    }

    public function __destruct() {
        //closes the connection
        $this->con->close();
    }
}

$dragons = new Dragons();
$visDragons = $dragons->chooser('red');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dragons</title>
</head>
<body>
    <h1>Dragons of D&D</h1>
    <ul>
        <?php foreach ($visDragons as $dragon): ?>
        <li class="dragon">
            The <?=$dragon['color']?> dragon is a <?=$dragon['type']?> dragon and has a <?=$dragon['breath']?> breath weapon.
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
