<html>

<body>
<head></head>
<form action ="oho.php" method="post">
    Name: <input type="text" name="name"></br>
    Gender:<input type="text" name="gender"></br>
    Color:<input type="text" name="color"></br>
    <input type = "submit" name="submit">
</form>


<?php

if (isset($_POST['submit'])) {

    $con = mysql_connect("localhost", "root", "");
    if (!$con) {
        die("can not connect: " . mysql_error());
    }
mysql_select_db("php",$con);


    $sql = "INSERT INTO users (name, gender, color)
VALUES ('$_POST[name]', '$_POST[gender]', '$_POST[color]')";

mysql_query($sql,$con);
myysql_close($con);

}
?>


</body>
</html>
