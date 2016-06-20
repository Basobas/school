<?php

require_once "includes/database.php";


//Retrieve the GET parameter from the 'Super global'
$albumId = $_GET['id'];

//Remove from the database
$query = "DELETE FROM reservering WHERE resId = " . mysqli_escape_string($db, $albumId);

mysqli_query($db, $query) or die ('Error: '.mysqli_error($db));

//Close connection
mysqli_close($db);

//Redirect to homepage after deletion & exit script
header("Location: admin.php?login=admin&password=password&submit=Login");
exit;
