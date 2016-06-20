<?php
//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require database in this file & image helpers
    require_once "includes/database.php";

    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $vnaam = mysqli_real_escape_string($db, $_REQUEST['vnaam']);
    $anaam = mysqli_real_escape_string($db, $_REQUEST['anaam']);
    $email = mysqli_real_escape_string($db, $_REQUEST['email']);
    $datum = mysqli_real_escape_string($db, $_REQUEST['datum']);
    $btijd = mysqli_real_escape_string($db, $_REQUEST['btijd']);
    $etijd = mysqli_real_escape_string($db, $_REQUEST['etijd']);
    $optie = mysqli_real_escape_string($db, $_REQUEST['optie']);


    //Require the form validation handling
    require_once "includes/form-validation.php";


    if (empty($errors)) {

        //Save the record to the database
       $query = "INSERT INTO reservering (resId, vnaam, anaam, datum, btijd, etijd, optie, paantal, email)
         VALUES (NULL, '$vnaam', '$anaam', '$datum','$btijd','$etijd','$optie','$paantal','$email')";
        $result = mysqli_query($db, $query);
        if ($result) {
            $vnaam = '';
            $anaam = '';
            $email = '';
            $datum = '';
            $btijd = '';
            $etijd = '';
            $optie = '';
            $paantal = '';

        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }
    }
    mysqli_close($db);
}
?>
<!doctype html>
<html>
<head>
    <title>Music Collection Create</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../Buidlingblocks/functioneledingen/bowling/css/style.css"/>
</head>
<body>
<h1>Maak reservering</h1>
<?php if (isset($errors) && !empty($errors)) { ?>
    <ul class="errors">
        <?php for ($i = 0; $i < count($errors); $i++) { ?>
            <li><?= $errors[$i]; ?></li>
        <?php } ?>
    </ul>
<?php } ?>

<?php if (isset($success)) { ?>
    <p class="success">Je reservering is toegevoegd</p>
<?php } ?>

<!-- enctype="multipart/form-data" no characters will be converted -->
<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
    <div class="data-field">
        <label for="vnaam">Voornaam</label>
        <input id="vnaam" type="text" name="voornaam" value="<?= (isset($vnaam) ? $vnaam : ''); ?>"/>
        <!--        Alternative for errors behind input and not in summary -->
        <span class="errors"><?= isset($errors['vnaam']) ? $errors['vnaam'] : '' ?></span>
    </div>
    <div class="data-field">
        <label for="name">Achternaam</label>
        <input id="name" type="text" name="name" value="<?= (isset($name) ? $name : ''); ?>"/>
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
    <div class="data-field">
        <label for="image">Image</label>
        <input type="file" name="image" id="image"/>
    </div>
    <div class="data-submit">
        <input type="submit" name="submit" value="Save"/>
    </div>
</form>
<div>
    <a href="../Buidlingblocks/functioneledingen/bowling/index.php">Go back to the list</a>
</div>
</body>
</html>
