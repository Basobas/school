<?php
   $min = date('i');
   $minuten = strlen($min);

if($minuten == 2){
    $aantal = "minuten";
}
else{
    $aantal = "minuut";
}


if (date('i') == '01'){
    echo 'minuut';
}
else
    echo 'minuten';


?>
//if statement inline:
//<?=(date('i') == '01')? 'minuut': 'minuten' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<h1>Het is vandaag <?= date('d F Y') ?></h1>
<h1>Het is vandaag <?= date('d/m/Y') ?></h1>
<h1>Het is nu <?= date('g ') . "uur en " . date('i ') . $aantal ?></h1>
<h1>Het is vandaag <?= time() ?></h1>

</body>
</html>


