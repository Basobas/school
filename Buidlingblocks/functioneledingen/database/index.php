<?php
require_once "includes/database.php";
require_once "includes/album.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<h2>Artiesten</h2>
<table>
    <tr>
        <th>Naam</th>
        <th>Geboortedatum</th>
        <th>Aantal albums</th>
    </tr>
    <?php foreach($datas2 as $data2){
        $id2 = $data2['nameId'];
        ?>
        <tr>
            <td><?= $data2['name'] ; ?></td>
            <td><?= $data2['birthdate'] ; ?></td>
            <td><?= $data2['albums']  ; ?></td>
        </tr>
    <?php } ?>
</table>

<h2>Albums</h2>
    <table>
        <tr>
            <th>Albumnaam</th>
            <th>Albumnummers</th>
            <th>Nummer</th>
        </tr>
        <?php foreach($datas as $data1){
            $id = $data1['albumId'];
            ?>
            <tr>
                <td><?= $data1['albumName']  ; ?></td>
                <td><?= $data1['albumSongs'] ; ?></td>
                <td><?= $data1['nameId'] ; ?></td>

            </tr>
        <?php } ?>
    </table>

<h2>Naam met albums</h2>

<table>
    <tr>
        <th>Albumnaam</th>
        <th>Albumnummers</th>

    </tr>
    <?php foreach($datas3 as $data3){

        ?>
        <tr>
            <td><?= $data3['name']  ; ?></td>
            <td><?= $data3['albumName'] ; ?></td>
        </tr>
    <?php } ?>
</table>






</body>
</html>
