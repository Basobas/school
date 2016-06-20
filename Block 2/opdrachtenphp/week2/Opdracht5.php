<?php
     $date1 = strtotime("05-02-2015"); // or your date as well
     $date2 = strtotime("12-08-2015");
     $verschil = $date2 - $date1;
     $verjaardag = strtotime("04-01-2016");
     $geboortedag = strtotime("04-01-1995");

     $now = time();
     $aantaldagen = $verjaardag - $now;
     $leeftijddagen = $now - $geboortedag;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Het is vandaag <?= date('d-m-Y G:i') ?></h1>
<h1>Het was vorige week <?= date('d-m-Y G:i', strtotime('-1 week'));?></h1>
<h1>Het was verschil tussen 5 februari en 12 augustus is <?= floor($verschil/(60*60*24)); ?> dagen</h1>
<h1>Je bent over <?= floor($aantaldagen/(60*60*24)); ?> dagen jarig!</h1>
<h2>Je bent <?= floor($leeftijddagen/(60*60*24*7*52));?> Jaar</h2>
<h2>Je bent <?= floor($leeftijddagen/(60*60*24));?> dagen oud</h2>
<h2>Je bent <?= floor($leeftijddagen/(60*60));?> uren oud</h2>
<h2>Je bent <?= floor($leeftijddagen/(60));?> minuten oud</h2>
<h2>Je bent <?= floor($leeftijddagen);?> seconden oud</h2>

</body>
</html>
