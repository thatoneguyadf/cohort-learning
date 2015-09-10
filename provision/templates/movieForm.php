<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie Form</title>

    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1><?=isset($edit) ? 'Edit' : 'Add New'?> Movie</h1>
            <form id="newMovieForm"
                  action="<?=isset($edit) ? 'index.php?action=editMovieSubmit' : 'index.php?action=newMovieSubmit'?>"
                  method="POST">
                <div class="form-group">

                    <label for="title">

                        Title

                    </label>

                    <input type="text"
                           name="title"
                           id="title"
                           placeholder="enter title here..."
                           value="<?=isset($movie) ? $movie['title'] : ''?>"
                           class="form-control">

                    <label for="runningTime">

                        Running Time

                    </label>

                    <input type="number"
                           name="runningTime"
                           id="runningTime"
                           placeholder="0"
                           value="<?=isset($movie) ? $movie['runningTime'] : ''?>"
                           class="form-control">

                    <label for="year">

                        Year Released

                    </label>

                    <input type="number"
                           name="year"
                           id="year"
                           placeholder="1900"
                           value="<?=isset($movie) ? $movie['year'] : ''?>"
                           class="form-control">

                    <input type="hidden"
                           name="id"
                           id="id"
                           value="<?=isset($movie) ? $movie['id'] : ''?>">
                </div>

                <input type="submit"
                       name="submit"
                       value="Submit"
                       class="btn btn-m btn-default">
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-compat-git.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.js"></script>
</body>
</html>