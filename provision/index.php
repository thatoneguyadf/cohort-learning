<?php

include 'db.php';
$db = new DB;


$action = isset($_GET['action']) ? $_GET['action'] : null;

switch ($action) {

    case 'newMovie':
        include "templates/movieForm.php";
        break;
    case 'newMovieSubmit':
        $title = $_POST['title'];
        $runningTime = $_POST['runningTime'];
        $year = $_POST['year'];

        $sql = 'INSERT INTO movies (title, runningTime, year) VALUES("%s", "%s", "%s")';
        $success = $db->insert(sprintf($sql, $title, $runningTime, $year));

        if (!$success) {
            die('Failed to add new movie');
        }

        $movies = $db->query('SELECT * FROM movies ORDER BY title ASC ');
        include "templates/index.php";
        break;
    case 'editMovie':
        $movieArray = $db->select(sprintf('SELECT * FROM movies WHERE id = %d', $_GET['id']));
        $movie = $movieArray[0];
        $edit = true;
        include "templates/movieForm.php";
        break;
    case 'editMovieSubmit':
        $title = $_POST['title'];
        $runningTime = $_POST['runningTime'];
        $year = $_POST['year'];
        $id = $_POST['id'];

        $sql = 'UPDATE movies SET title = "%s", runningTime = "%d", year = "%d" WHERE id = %d';
        $success = $db->update(sprintf($sql, $title, $runningTime, $year, $id));

        if (!$success) {
            die('Failed to update the movie');
        }

        $movies = $db->query('SELECT * FROM movies ORDER BY title ASC ');
        include "templates/index.php";
        break;
    case 'deleteMovie':
        $movId = $_GET['id'];

        if (!($db->delete(sprintf('DELETE FROM movies WHERE id = %d', $movId)))) {
            die('could not delete movie with id of' . $movId);
        }

        $movies = $db->query('SELECT * FROM movies ORDER BY title ASC ');
        include "templates/index.php";
        break;
    default:
        $movies = $db->query('SELECT * FROM movies ORDER BY title ASC ');
        include "templates/index.php";
        break;
}

