<?php

include 'db.php';


$db = new DB;

$title = $_POST['title'];
$runningTime = $_POST['runningTime'];
$year = $_POST['year'];
$id = $_POST['id'];

$sql = sprintf('UPDATE movies SET title = "%s", runningTime = "%d", year = "%d" WHERE id = %d',
    $title, $runningTime, $year, $id);

if (!($db->update($sql))) {
    die('Failed to update the movie');
}

header('location: index.php');