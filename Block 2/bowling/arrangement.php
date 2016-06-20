<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name ="viewport" content="width-device-width, initial-scale-1">
    <meta charset="UTF-8">
    <title>Bowling & Party</title>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/normalize.css"/>

</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class ="icon-bar"></span>
                    <span class ="icon-bar"></span>
                    <span class ="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">BOWLING & PARTY</a>
            </div>

            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Bowlen</a></li>
                    <li><a href="opening.php">Openingstijden</a></li>
                    <li class="active"><a href="arrangement.php">Arrangement</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="reserveer.php">RESERVEER</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="banner">
        <div id = "textbanner">
            <h1>Arrangement</h1>
        </div>
    </div>

    <div class="container">
        <div id="homepage">
            <h1>Arrangement</h1>

            <div class="nee">

                <div class="block1">
                    <img src="images/kerst.jpg" alt="Feest" width="350" height="200">
                    <div class="desc">
                        <h4>Kerst</h4>
                        Gourmetten incl. Kerst dessert € 39,75 </br>
                        Kindergourmet incl. IJs suprise € 18,75 </br>
                        Fondue incl. Kerst dessert € 37,75 </br>
                        Vanaf 12:00 uur kan er worden gebowld.</br>
                        De prijs bedraagt € 29,50 per uur per baan.</br>
                        Gratis parkeren voor de deur</br>
                    </div>
                </div>

                <div class="block1">
                    <img src="images/feest.jpg" alt="Feest" width="350" height="200">
                    <div class="desc">
                        <h4>Feestje</h4>
                        Een avondje uit met vrienden, gezellig bowlen en eten,</br>
                        u heeft iets te vieren. Bowling & Partycentrum </br>
                        Zaandam biedt de oplossing binnen elk budget.</br>
                        Behalve particulieren hebben veel ondernemingen</br>
                        bewezen prijs te stellen op een sfeervol verblijf</br>
                        in ons Partycentrum, getuige de talloze festiviteiten</br>
                        van het bedrijfsleven en verenigingen, die wij door de</br>
                        jaren heen mochten verzorgen.</br>
                        Bovendien is ons centrum uitermate </br>
                        geschikt voor kinderfeestjes.</br>
                        Wat is er nu leuker om met je vriendjes en vriendinnetjes
                        gezellig een uurtje te bowlen en daarna lekker samen een frietje en een snack te eten in ons gezellige restaurant.
                    </div>
                </div>

                <div class="block1">
                    <img src="images/competitie1.jpg" alt="Feest" width="350" height="200">
                    <div class="desc">
                        <h4>Competitie</h4>
                        De Zaanse Bowling Vereniging speelt op meerdere avonden in de week haar wedstrijden. Dit gaat natuurlijk om de gezelligheid van het bowlen zoals u dat kent, maar hierbij is ook het wedstrijdelement heel belangrijk. Lijkt het u leuk om sport en spel te kombineren en uw bowlingresultaten te verbeteren? Neem dan kontakt op met het bestuur van de Zaanse Bowling Vereniging, of informeer bij ons. U kunt bellen of vrijblijvend even langskomen.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer1">
        <div id="parent">
            <div class="image"><a href="#"><img id="gallery" src="images/galleryb.png"></a></div>
            <div class="image"><a href="https://goo.gl/jdITUo"><img id="route" src="images/routeb.png"></a></div>
            <div class="image"><a href="reserveer.php"><img id="calendar" src="images/calendar-128.png"></a></div>
        </div>
    </footer>

</body>
</html>
