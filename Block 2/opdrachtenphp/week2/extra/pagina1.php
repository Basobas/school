
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<a href="pagina2.php?klas=1a&sfeer=Rustig&test=Test">Klas 1A</a>
<a href="pagina3.php">Klas 1B</a>


<h1>Test formulier</h1>

<form action="extra_get.php" method="post">
    Type hier uw naam:<br> <input type="text" name="name" placeholder="Naam" maxlength="30"><br><br>
    Type hier uw dag nr:<br> <input type="text" name="dag" placeholder="1 t/m 31"maxlength="2"><br><br>
    Type hier uw maand nr:<br> <input type="text" name="maand" placeholder="1 t/m 12" maxlength="2"><br><br>
    <input type="submit" name="formSubmit" value="Submit">
</form>

</body>
</html>
