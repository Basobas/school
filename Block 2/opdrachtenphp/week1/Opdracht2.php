<?php
$now = date("H");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

<?php

if ($now >  0) $new = 'Goedenacht';
if ($now >  4) $new = 'Goedemorgen';
if ($now > 11) $new = 'Goedemiddag';
if ($now > 17) $new = 'Goedeavond';
if ($now > 23) $new = 'Goedenacht';

?>

<p><?= $new ?></p>

</body>
</html>
