<?php
$artiest = $_GET["artiest"];
$album = $_GET["album"];
$jaar = $_GET["jaar"];
$aantal = $_GET["aantal"];
$genre = $_GET["genre"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="geedit.php" method="post">

    <h2>Artiest: <?=$artiest?></h2>
    <h2>Album: <?=$album?></h2>
    <h2>Jaar: <?=$jaar?></h2>
    <h2>Aantal: <?=$aantal?></h2>
    <h2>Genre: <?=$genre?></h2>


</form>
</body>
</html>
