<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<?php
$maand = $_POST["maand"];
$dag = $_POST["dag"];
$naam = $_POST["name"];
?>


<?php
if ($naam == "")
{
    $naam = "Henk";
}

if ($maand ==  1 && $dag >=21 || $maand ==  2 && $dag <=18) $beeld = 'Waterman';
if ($maand ==  2 && $dag >=19 || $maand ==  3 && $dag <=20) $beeld = 'Vissen';
if ($maand ==  3 && $dag >=21 || $maand ==  4 && $dag <=20) $beeld = 'Ram';
if ($maand ==  4 && $dag >=21 || $maand ==  5 && $dag <=21) $beeld = 'Stier';
if ($maand ==  5 && $dag >=22 || $maand ==  6 && $dag <=21) $beeld = 'Tweelingen';
if ($maand ==  6 && $dag >=22 || $maand ==  7 && $dag <=23) $beeld = 'Kreeft';
if ($maand ==  7 && $dag >=24 || $maand ==  8 && $dag <=23) $beeld = 'Leeuw';
if ($maand ==  8 && $dag >=24 || $maand ==  9 && $dag <=23) $beeld = 'Maagd';
if ($maand ==  9 && $dag >=24 || $maand == 10 && $dag <=23) $beeld = 'Weegschaal';
if ($maand == 10 && $dag >=24 || $maand == 11 && $dag <=22) $beeld = 'Schorpioen';
if ($maand == 11 && $dag >=23 || $maand == 12 && $dag <=22) $beeld = 'Boogschutter';
if ($maand == 12 && $dag >=23 || $maand ==  1 && $dag <=20) $beeld = 'Steenbok';

if ($maand > 12 || $maand == 0) $beeld = 'niet goed ingevoerd. Try again m8';

for ($i = 1; $i <= 12; $i++){
    if ($maand ==  $i && $dag > 31 || $dag == 0) $beeld = 'niet goed ingevoerd. Try again m8';
}

?>
<h1>Hallo <?= $naam ?>!</h1>
<h1><?= "Jouw sterrenbeeld is " ,$beeld ?></h1>

<form action="pagina1.php">
    <input type="submit"  value="Return">
</form>

</body>
</html>
