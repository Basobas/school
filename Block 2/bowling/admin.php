<?php
//Haalt de data van de gemaakte reserveringen op.
require_once "includes/reserveer-data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <!--    Zorgt voor een betere website layout voor de telefoon.  -->
        <meta name ="viewport" content="width-device-width, initial-scale-1">
        <meta charset="UTF-8">

        <title>Bowling & Party</title>
        <!--    Link naar de css voor de opmaak van de tabel    -->
        <link type="text/css" rel="stylesheet" href="css/table.css"/>
        <!--    Jquery en bootstrap voor de plugins van de website  -->
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!--    De zelf geschreven CSS van de website   -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <!--    De CSS die zorgt dat de website op verschillende browsers te openen is  -->
        <link type="text/css" rel="stylesheet" href="css/normalize.css"/>
</head>
<body>
    <!--Navigatiebar-->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- De knop voor de navigatie bar (dropdown als website kleiner van formaat wordt)  -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class ="icon-bar"></span>
                    <span class ="icon-bar"></span>
                    <span class ="icon-bar"></span>
                </button>
            <!-- Doorclick links naar de andere webpagina's-->
                <a href="index.php" class="navbar-brand">BOWLING & PARTY</a>
            </div>
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Bowlen</a></li>
                    <li><a href="opening.php">Openingstijden</a></li>
                    <li><a href="arrangement.php">Arrangement</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="reserveer.php">RESERVEER</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Banner van de website-->
    <div id="banner">
        <div id = "textbanner">
            <h1>Admin</h1>
        </div>
    </div>
    <!--    Kijkt of er op submit is gedrukt   -->
    <?php
    if (isset($_REQUEST['submit'])){
    $name = $_REQUEST['login'];
    $pass = $_REQUEST['password'];


        //    Kijkt of de juiste gebruikersnaam en wachtwoord zijn ingevoerd als dat zo is laat hij de pagina zien
        if(($name == "admin")&&($pass == "password")) { ?>
            <div class="container">
                <div id="homepage">
                    <h1>Reserveringen</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tijd</th>
                                <th>Naam</th>
                                <th>Soort</th>
                                <th>Personen</th>
                                <th>Datum</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td colspan="10">&copy; Reserveringen</td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <!-- Maakt een tabel aan met de reserveringen die gemaakt zijn-->
                            <?php foreach ($reserveringen as $reservering) {
                                $id = $reservering['resId'];
                                ?>
                                <tr>
                                    <td><?= $reservering['btijd'] . " tot " . $reservering['etijd']; ?></td>
                                    <td><?= $reservering['vnaam'] . " " . $reservering['anaam'] ; ?></td>
                                    <td><?= $reservering['optie'] . " "; ?></td>
                                    <td><?= $reservering['paantal'] ; ?></td>
                                    <td><?= $reservering['datum'] ; ?></td>
                                    <td><?= $reservering['email']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php } }
            // Als er niet op submit is gedrukt of het wachtwoord is fout laat dit zien
    else { ?>
        <div class="container">
            <div id="homepage">
                <h1> U heeft het wachtwoord fout ingevoerd!</h1>
            </div>
        </div>
    <?php } ?>

    <!-- Footer met clickbare afbeeldingen-->
    <footer class="footer1">
        <div id="parent">
            <div class="image"><a href="#"><img id="gallery" src="images/galleryb.png"></a></div>
            <div class="image"><a href="https://goo.gl/jdITUo"><img id="route" src="images/routeb.png"></a></div>
            <div class="image"><a href="reserveer.php"><img id="calendar" src="images/calendar-128.png"></a></div>
        </div>
    </footer>

</body>
</html>

