<?php
$musicCollection=[
    [
        'artiest'=> "Harry",
        'albumnaam'=> 'Dreams',
        'jaar'=> 2015,
        'aantal'=> 15,
        'genre' => 'Klassiek',
        'detail' => 'De dromen van die goede man, Harry'
    ],
    [

        'artiest'=> "Barry",
        'albumnaam'=> 'Epic',
        'jaar'=> 2012,
        'aantal'=> 12,
        'genre' => 'House',
        'detail' => 'Barry met zijn epische house'
    ],
    [
        'artiest'=> "Brennan Heart",
        'albumnaam'=> 'Revolution',
        'jaar'=> 1995,
        'aantal'=> 32,
        'genre' => 'Hardstyle',
        'detail' => 'De revolutionaire hardstyle muziek van brennan heart'
    ],
    [

        'artiest'=> "Piet Klaas",
        'albumnaam'=> 'EZ',
        'jaar'=> 2020,
        'aantal'=> 5,
        'genre' => 'Dance',
        'detail' => 'EZ skins EZ life met Piet Klaas'
    ],
    [

        'artiest'=> "Henry Ketel",
        'albumnaam'=> 'Kookpan',
        'jaar'=> 2005,
        'aantal'=> 16,
        'genre' => 'Country',
        'detail' => 'Alles over de kookpan met Henry Ketel'
    ],
    [

        'artiest'=> "Jan de man",
        'albumnaam'=> 'Colors',
        'jaar'=> 2010,
        'aantal'=> 12,
        'genre' => 'Hardstyle',
        'detail' => 'Jan de man met de kleuren van muziek'
    ],
    [

        'artiest'=> "Olofmeister",
        'albumnaam'=> 'Boost',
        'jaar'=> 2013,
        'aantal'=> 420,
        'genre' => 'Dubstep',
        'detail' => 'Olofmeist aka Boostmeister'
    ],
    [

        'artiest'=> "KennyS",
        'albumnaam'=> 'No-scope',
        'jaar'=> 2010,
        'aantal'=> 360,
        'genre' => 'Rock',
        'detail' => 'KennyS met zijn no-scope'
    ],
    [

        'artiest'=> "Henk de Ruiter",
        'albumnaam'=> 'Paard',
        'jaar'=> 1995,
        'aantal'=> 10,
        'genre' => 'Pop',
        'detail' => 'Henk de Ruiter'
    ],
    [

        'artiest'=> "John Appel",
        'albumnaam'=> 'Peer',
        'jaar'=> 2420,
        'aantal'=> 50,
        'genre' => 'Trance',
        'detail' =>'John Appel over peren'
    ]
];

$rowNumber = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="3style.css" type="text/css" />
    <title></title>
</head>
<body >

<table>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Year</th>
        <th>Tracks</th>
        <th>Genre</th>
        <th>Detail</th>
        <th>Edit</th>
    </tr>

    <?php
    foreach ($musicCollection as $album)
    { $rowNumber++
        ?>
        <tr class="<?= $rowNumber % 2 == 0 ? "even": "odd"?>">
            <td><?= $rowNumber ?></td>
            <td><?= $album['artiest'] ?></td>
            <td><?= $album['albumnaam'] ?></td>
            <td><?= $album['jaar'] ?></td>
            <td><?= $album['aantal'] ?></td>
            <td><?= $album['genre'] ?></td>
            <td><a href="detail.php?id=<?= $rowNumber -1?>">Detail</a></td>
            <td><a href="edit.php?album=<?= $rowNumber -1?>">Edit</a></td>
        </tr>

        <?php
    }
    ?>
</table>
</body>
</html>
