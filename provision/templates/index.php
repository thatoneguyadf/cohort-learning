<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie List</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-9 col-md-offset-2">
            <div class="row">
                <div class="col-xs-9">

                    <h1>Movies</h1>

                </div>
                <div class="col-xs-3">

                    <form id="new-movie-button" action="index.php?action=newMovie"
                          method="post">

                        <input class="btn btn-m right" type="submit"
                               name="submit"
                               value="New Movie">

                    </form>

                </div>
            </div>

            <ul class="list-group" id="movieList">
                <?php foreach($movies as $movie): ?>
                    <li class="movie list-group-item">
                        <h2>

                                <?=$movie['title'] ?>

                        </h2>
                        <ul class="list-inline">

                            <li>running time: <?=$movie['runningTime'] ?></li>

                            <li>released: <?=$movie['year'] ?></li>

                            <li>
                                <a href="index.php?action=deleteMovie&id=<?=$movie['id'] ?>"
                                   class="btn btn-danger btn-xs">

                                delete

                                </a>
                            </li>

                            <li>
                                <a href="index.php?action=editMovie&id=<?=$movie['id'] ?>"
                                   class="btn btn-info btn-xs">

                                    edit

                                </a>
                            </li>

                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-compat-git.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.js"></script>
</body>
</html>