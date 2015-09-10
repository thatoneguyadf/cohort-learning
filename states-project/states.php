<?php
class States {
	public function __construct() {
		//create the connection
		$this->con = new mysqli('localhost', 'root', '1234', 'states');

		if (mysqli_connect_errno()) {
			die('Could not connect to database');
		}
	}

	public function getStates() {
		//make a query
		$result = $this->con->query('SELECT * FROM us_states');

		//work with result
		 return $result->fetch_all(MYSQL_ASSOC);
	}

	public function newStates() {
		//make a query
		if ($stmt = $this->con->prepare('SELECT name, abbr FROM us_states WHERE name LIKE ?')) {
			//good statement
			$param = 'New%';
			$stmt->bind_param('s', $param);
			$stmt->execute();
			$stmt->bind_result($name, $abbr);

			$states = [];

			//working with result
			while ($stmt->fetch()) {
				$states[] = ['name' => $name, 'abbr' => $abbr];
			}

			return $states;
		}

		//bad statement
		return [];
	}

	public function output($stuff) {
		echo '<pre>';
		var_dump($stuff);
		echo '</pre>';
	}

	public function __destruct() {
		//closes the connection
		$this->con->close();
	}
}

$states = new States;
$newStates = $states->newStates();
?>

<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset='UTF-8'>
		<title>US States</title>
	</head>
	<body>

		<h1>
			US States
		</h1>

		<ul>
			<?php foreach ($newStates as $state): ?>
			<li class='foo'>
				<?=$state['name']?> - <?=$state['abbr']?>
			</li>
			<?php endforeach; ?>
		</ul>

	</body>
</html>
