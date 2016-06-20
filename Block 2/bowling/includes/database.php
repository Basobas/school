
<?php
//Maakt connectie met de database
//$host = "localhost";
//$database = "0912030";
//$user = "0912030";
//$password = "veitiequ";

//Localhost instellingen

$host = "localhost";
$database = "bowling";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, $database) or die("Error: " . mysqli_connect_error());;

