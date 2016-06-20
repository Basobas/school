<?php
require_once "includes/database.php";

//Retrieve the GET parameter from the 'Super global'
$albumId = $_GET['id'];

//Get the record from the database result
$query = "SELECT * FROM albums WHERE id = " . mysqli_escape_string($db, $albumId);
$result = mysqli_query($db, $query);
$album = mysqli_fetch_assoc($result);

//Close connection
mysqli_close($db);
//Check if Post isset, else do nothing
if (isset($_REQUEST['submit'])) {
    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $artist = ($_REQUEST['artist']);
    $album = $_REQUEST['album'];
    $genre = $_REQUEST['genre'];
    $year = $_REQUEST['year'];
    $tracks = $_REQUEST['tracks'];

    //Check if data is valid & generate error if not so
    //$errors = [];
    if ($artist == "") {
        $errors[] = 'Artist cannot be empty';
    }
    if ($album == "") {
        $errors[] = 'Album cannot be empty';
    }
    if ($genre == "") {
        $errors[] = 'Genre cannot be empty';
    }
    if ($year == "") {
        $errors[] = 'Year cannot be empty';
    }
    if (!is_numeric($year) || strlen($year) != 4) {
        $errors[] = 'Year needs to be a number with the length of 4';
    }
    if ($tracks == "") {
        $errors[] = 'Tracks cannot be empty';
    }
    if (!is_numeric($tracks)) {
        $errors[] = 'Tracks need to be a number';
    }

    if (!isset($errors))
    {
        $query = "INSERT INTO albums ()
                  VALUES ( $artist,)";
        header('Location: ajax.php');
        exit;
    }
}
?>
<!doctype html>
<html>
<head>
    <title>Music Collection Create</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Create album</h1>
<?php if (isset($errors)) { ?>
    <ul class="errors">
        <?php for ($i = 0; $i < count($errors); $i++) { ?>
            <li><?= $errors[$i]; ?></li>
        <?php } ?>
    </ul>
<?php } ?>

<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="get">
    <div class="data-field">
        <label for="artist">Artist</label>
        <input id="artist" type="text" name="artist" value="<?= (isset($artist) ? $artist : ''); ?>"/>
        <span><?= (isset($errors['artist']) ? $errors['artist'] : '') ?></span>
    </div>
    <div class="data-field">
        <label for="album">Album</label>
        <input id="album" type="text" name="album" value="<?= (isset($album) ? $album : ''); ?>"/>
    </div>
    <div class="data-field">
        <label for="genre">Genre</label>
        <input id="genre" type="text" name="genre" value="<?= (isset($genre) ? $genre : ''); ?>"/>
    </div>
    <div class="data-field">
        <label for="year">Year</label>
        <input id="year" type="text" name="year" value="<?= (isset($year) ? $year : ''); ?>"/>
    </div>
    <div class="data-field">
        <label for="tracks">Tracks</label>
        <input id="tracks" type="number" name="tracks" value="<?= (isset($tracks) ? $tracks : ''); ?>"/>
    </div>
    <div class="data-submit">
        <input type="submit" name="submit" value="Save"/>
    </div>
</form>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
