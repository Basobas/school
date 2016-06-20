<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php

if (isset($_REQUEST['submit'])) {
    $host = "localhost";
    $database = "php";
    $user = "root";
    $password = "";

      $name = $_REQUEST['name'];
      $gender = $_REQUEST['gender'];
      $color = $_REQUEST['color'];

    $db = mysqli_connect($host, $user, $password, $database) or die("Error: " . mysqli_connect_error());


        $sql = "INSERT INTO users (id, name, gender, color)
         VALUES (NULL, '$name', '$gender', '$color')";

        mysqli_query($db, $sql) or die(mysqli_error($db));
        mysqli_close($db);

  }
?>


<form action="insert.php" method="get">
    Name: <input type="text" name="name"></br>
    Gender:<input type="text" name="gender"></br>
    Color:<input type="text" name="color"></br>
    <input type = "submit" name="submit">
</form>
</body>
</html>
