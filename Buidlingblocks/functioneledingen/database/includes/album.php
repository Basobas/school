<?php
//Database connectie
require_once "database.php";

//tabel (album)
$query = "SELECT * FROM album";

$result = mysqli_query($db, $query);

//Loop door de bestaande database data en maakt een array er van.
$datas = [];
while ($row = mysqli_fetch_assoc($result)) {
 $datas[] = $row;
}

//tabel(persoon)
$query2 = "SELECT * FROM persoon";

$result2 = mysqli_query($db, $query2);

//Loop door de bestaande database data en maakt een array er van.
$datas2 = [];
while ($row2 = mysqli_fetch_assoc($result2)) {
 $datas2[] = $row2;
}

//inner join
$query3 = "SELECT persoon.name, album.albumName FROM album INNER JOIN persoon ON album.nameId=persoon.nameId";
$result3 = mysqli_query($db, $query3);

//Loop door de bestaande database data en maakt een array er van.
$datas3 = [];
while ($row3 = mysqli_fetch_assoc($result3)) {
 $datas3[] = $row3;
}

//Close connection
mysqli_close($db);
