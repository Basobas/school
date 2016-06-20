<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Zorgt voor een betere website layout voor de telefoon.  -->
    <meta name ="viewport" content="width-device-width, initial-scale-1">
    <meta charset="UTF-8">

    <title>Bowling & Party</title>
    <!--    Jquery en bootstrap voor de plugins en opmaak van de website  -->
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
                    <li class="active"><a href="index.php">BOWLEN</a></li>
                    <li><a href="opening.php">OPENINGSTIJDEN</a></li>
                    <li><a href="arrangement.php">ARRANGEMENT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="reserveer.php">RESERVEER</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Banner van de website-->
    <div id="banner">
        <div id = "textbanner">
            <h1>Welkom bij Bowling&Party</h1>
        </div>
    </div>

    </br>

    </br>
    </br>




    <div class="container">
        <div id="homepage">
            <div class="bowlenimg"><img id="bowlen" src="images/bowlen.jpg"></div>
            <h1>Bowling Zaandam</h1>

            </br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam autem consectetur, consequatur dolorum eveniet ex exercitationem impedit labore libero magni modi mollitia nam quo ratione sint suscipit temporibus voluptate!</p>
            </br>

            <p>Bowlen... eten... feesten... in Zaandam. <br>
                Wilt u gezellig een avondje bezig zijn <br>
                in een leuke huiselijke sfeer dan bent u <br>
                bij ons aan het juiste adres.</br>
                Indien u meer informatie wenst, kunt u <br>
                telefonisch contact met ons opnemen via 075 6160000. <br>
                U kunt ook bij ons langskomen.<br>
            </p>
            <p>Bowling en Party Centrum Zaandam beschikt over 10 volautomatische bowlingbanen <br>
                voorzien van een modern computersysteem voor de puntentelling.
            </p>
            <h4>Het gaat om meer dan bowlen!</h4>
            <p>Ons centrum is geschikt voor diverse doeleinde.</p>
            <ul>
                <li>Zakelijke evenementen (vergaderingen, presentaties)</li>
                <li> Verjaardagspartijen (kinderen en volwassenen)</li>
                <li>Reunies</li>
                <li> Recepties</li>
                <li>Groepsuitjes</li>
            </ul>
        </div>
    </div>

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
