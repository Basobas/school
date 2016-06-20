<?php
require_once "includes/database.php";
session_start();

//If already logged in, no need to be here
if (isset($_SESSION['name'])) {
    header('Location: secure.php');
    exit;
}

//On post submit, check the credentials
if (isset($_POST['submit'])) {
    //Retrieve values (email safe for query)
    $email = mysqli_escape_string($db, $_POST['email']);
    $password = $_POST['password'];

    //Get password & name from DB
    $query = "SELECT password, name FROM users
              WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    //Go on if we got an user (which means email is correct)
    if ($user) {
        //Validate password
        if (password_verify($password, $user['password'])) {
            //Set session variable, redirect & exit script
            $_SESSION['name'] = $user['name'];
            header('Location: secure.php');
            exit;
        } else {
            $message = "Je wachtwoord bestaat niet!";
        }
    } else {
        $message = "Je email bestaat niet!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>

<?php if (isset($message)) { ?>
    <div><?= $message; ?></div>
<?php } ?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required/>
        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" required/>
        <input type="submit" name="submit" value="submit"/>
    </fieldset>
</form>
</body>
</html>
