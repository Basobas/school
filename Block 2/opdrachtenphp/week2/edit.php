<?php
require "muziek.php";
$muziek = $_GET['album'];
$musicCollection = $musicCollection[$muziek];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="geedit.php" method="get">

    Artiest </br><input type="text" name="artiest" value=<?=$musicCollection['artiest']?>><br/>
    Album </br><input type="text" name="album" value=<?=$musicCollection['albumnaam']?>><br/>
    Jaar </br><input type="text" name="jaar" value=<?=$musicCollection['jaar']?>><br/>
    Aantal</br> <input type="text" name="aantal" value=<?=$musicCollection['aantal']?>><br/>
    Genre</br> <input type="text" name="genre" value=<?=$musicCollection['genre']?>><br/>

    <input type="submit" value="Submit">
</form>




</body>
</html>
