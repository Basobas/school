<?php
require_once "includes/database.php";
//Haalt het ingevoerde formulier op als er op submit is gedrukt.
//Kijkt of er mysql-injecties inzitten.
if (isset($_REQUEST['submit'])) {
    $vnaam = mysqli_real_escape_string($db, $_REQUEST['vnaam']);
    $anaam = mysqli_real_escape_string($db, $_REQUEST['anaam']);

    require_once "includes/form-validation.php";

//Als er geen fouten in het formulier zitten dan wordt het in de database gezet.
//Als er wel fouten in zitten dan haalt dit het formulier leeg.
    if (empty($errors)) {
        $sql = "INSERT INTO reservering (resId, vnaam, anaam, datum, btijd, etijd, optie, paantal, email)
         VALUES (NULL, '$vnaam', '$anaam', '$datum','$btijd','$etijd','$optie','$paantal','$email')";
        $result = mysqli_query($db, $sql);

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="login.php" method="get">
        <label>Username</label></br> <input type="text" name="vnaam"></br>
        <label>Password</label> </br> <input type="text" name="anaam"></br>
        <input type="submit" name="submit" onclick="return confirm('Weet u zeker dat u alles goed heeft ingevuld?')">
    </form>
</body>
</html>
