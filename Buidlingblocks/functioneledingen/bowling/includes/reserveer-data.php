<?php
//Database connectie
require_once "database.php";

//Haalt alles van de reservering database op.
$query = "SELECT * FROM reservering ORDER BY datum ASC, btijd ASC";


$result = mysqli_query($db, $query);

//Loop door de bestaande database data en maakt een array er van.
$reserveringen = [];
while ($row = mysqli_fetch_assoc($result)) {
    $reserveringen[] = $row;
}

//Close connection
mysqli_close($db);
