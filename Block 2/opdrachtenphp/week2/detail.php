<?php require 'muziek.php';

$albumding = $_GET['id'];

$appel = $musicCollection[$albumding];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
   <h1><?= $appel ?></h1>
</body>
</html>
