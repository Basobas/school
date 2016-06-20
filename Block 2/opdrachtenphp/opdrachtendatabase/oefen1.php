<?php

require_once "dbconfig.php";

//Create query for db & fetch result
$queryAll = "SELECT * FROM albums";
$result = mysqli_query($db, $queryAll);

//Create array & store results from db
$albums = [];
while ($row = mysqli_fetch_assoc($result)) {
    $albums[] = $row;
}

//Close connection
mysqli_close($db);
$aantal = count($albums);
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
        <th>Title</th>
        <th>Artist</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
        <th>Photo</th>

    </tr>
    </thead>

    <?php for ($row = 0; $row < $aantal; $row++)
    {
    ?>
    <tr>
        <?php foreach ($albums[$row] as $key => $value)
        {
            $regelnr = $albums[$row]["id"];

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
