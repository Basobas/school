<form name="new user" method="post" action="isset.php">
    <input type="text" name="mail"/> <br />
    <input type="password" name="password"/><br />
    <input type="submit"  value="continue"/>
</form>
<?php if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
echo "Yes, mail is set";
}else{
echo "N0, mail is not set";
}
?>
