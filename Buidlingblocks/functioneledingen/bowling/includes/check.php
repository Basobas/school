<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php

    require "database.php";
    if (isset($_REQUEST['submit'])){
        $username = $_REQUEST['uname'];
        $password = $_REQUEST['pass'];
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";


        $result = mysqli_query($db, $sql);
        $result2 = mysqli_fetch_assoc ($result);


        if ($result2['username'] == $username && $result2['password'] == $password){
            ?> Je bent ingelogd  <?php
        }

        else{

        ?> Het is fout ingevoerd<?php
        }

    }
    ?>
</div>
</body>
</html>


