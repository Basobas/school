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
                    <li><a href="index.php">Bowlen</a></li>
                    <li><a href="opening.php">Openingstijden</a></li>
                    <li><a href="arrangement.php">Arrangement</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="reserveer.php">RESERVEER</a></li>
                    <li class="active"><a href="login.php">Log in</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Banner van de website-->
    <div id="banner">
        <div id = "textbanner">
            <h1>Contact</h1>
        </div>
    </div>

    <div class="container">
        <div id="homepage">
            <!-- Login formulier-->
            <div class="login">
                <h1>Log in om de reserveringen te zien</h1>
                <form method="get" action="admin.php">
                    <p><input type="text" name="login" placeholder="Username"></p>
                    <p><input type="password" name="password"  placeholder="Password"></p>
                    <p class="submit"><input type="submit" name="submit" value="Login"></p>
                </form>
            </div>
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
