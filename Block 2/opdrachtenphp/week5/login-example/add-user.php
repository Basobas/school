<?php
require_once "includes/database.php";

//Demo credentials
$email = "moora@hr.nl";
$password = password_hash("test", PASSWORD_DEFAULT);
$name = "Antwan";

$query = "INSERT INTO users (email, password, name)
          VALUES ('$email', '$password', '$name')";
mysqli_query($db, $query);
