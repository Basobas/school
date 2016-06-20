<?php



//$amusic = [['bob', 1],
  //        ['anouk', 1],
    //      ['U2', 1]
    //];
//$amusic[2][0];

$album=[

    [
        'regelnr'=> 1,
        'artiest'=> "Harry",
        'albumnaam'=> 'Dreams',
        'jaar'=> 2015,
        'aantal'=> 15,
        'genre' => 'Klassiek'
    ],
    [
        'regelnr'=> 2,
        'artiest'=> "Barry",
        'albumnaam'=> 'Epic',
        'jaar'=> 2012,
        'aantal'=> 12,
        'genre' => 'House'
    ],
    [
        'regelnr'=> 3,
        'artiest'=> "Brennan Heart",
        'albumnaam'=> 'Revolution',
        'jaar'=> 1995,
        'aantal'=> 32,
        'genre' => 'Hardstyle'
    ],
    [
        'regelnr'=> 4,
        'artiest'=> "Piet Klaas",
        'albumnaam'=> 'EZ',
        'jaar'=> 2020,
        'aantal'=> 5,
        'genre' => 'Dance'
    ],
    [
        'regelnr'=> 5,
        'artiest'=> "Henry Ketel",
        'albumnaam'=> 'Kookpan',
        'jaar'=> 2005,
        'aantal'=> 16,
        'genre' => 'Country'
    ],
    [
        'regelnr'=> 6,
        'artiest'=> "Jan de man",
        'albumnaam'=> 'Colors',
        'jaar'=> 2010,
        'aantal'=> 12,
        'genre' => 'Hardstyle'
    ],
    [
        'regelnr'=> 7,
        'artiest'=> "Olofmeister",
        'albumnaam'=> 'Boost',
        'jaar'=> 2013,
        'aantal'=> 420,
        'genre' => 'Dubstep'
    ],
    [
        'regelnr'=> 8,
        'artiest'=> "KennyS",
        'albumnaam'=> 'No-scope',
        'jaar'=> 2010,
        'aantal'=> 360,
        'genre' => 'Rock'
    ],
    [
        'regelnr'=> 9,
        'artiest'=> "Henk de Ruiter",
        'albumnaam'=> 'Paard',
        'jaar'=> 1995,
        'aantal'=> 10,
        'genre' => 'Pop'
    ],
    [
        'regelnr'=> 10,
        'artiest'=> "John Appel",
        'albumnaam'=> 'Peer',
        'jaar'=> 2420,
        'aantal'=> 50,
        'genre' => 'Trance'
    ]
];

$aantal = count($album);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="3style.css" type="text/css" />
    <title></title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Regelnr</th>
            <th>Artiest</th>
            <th>Albumnaam</th>
            <th>Jaar</th>
            <th>Aantal</th>
            <th>Genre</th>
        </tr>
    </thead>

    <?php for ($row = 0; $row < $aantal; $row++)
    {
    ?>
    <tr>
        <?php foreach ($album[$row] as $key => $value)
        {
            $regelnr = $album[$row]["regelnr"];





            if($regelnr % 2 == 0 )
            {
                echo "<td>".$value."</td>";
            }
            else
            {
                echo "<td class = 'oneven'>". $value ."</td>";
            }
           }
        }
        ?>
    </tr>
</table>
</body>
</html>

