<?php
//Database connectie
require_once "includes/database.php";
//Haalt het ingevoerde formulier op als er op submit is gedrukt.
//Kijkt of er mysql-injecties inzitten.
if (isset($_REQUEST['submit'])) {
    $vnaam = mysqli_real_escape_string($db, $_REQUEST['vnaam']);
    $anaam = mysqli_real_escape_string($db, $_REQUEST['anaam']);
    $email = mysqli_real_escape_string($db, $_REQUEST['email']);
    $datum = mysqli_real_escape_string($db, $_REQUEST['datum']);
    $btijd = mysqli_real_escape_string($db, $_REQUEST['btijd']);
    $etijd = mysqli_real_escape_string($db, $_REQUEST['etijd']);
    $optie = mysqli_real_escape_string($db, $_REQUEST['optie']);
    $paantal = mysqli_real_escape_string($db, $_REQUEST['paantal']);

    require_once "includes/form-validation.php";

    //Als er geen fouten in het formulier zitten dan wordt het in de database gezet.
    //Als er wel fouten in zitten dan haalt dit het formulier leeg.
if (empty($errors)) {
    $sql = "INSERT INTO reservering (resId, vnaam, anaam, datum, btijd, etijd, optie, paantal, email)
         VALUES (NULL, '$vnaam', '$anaam', '$datum','$btijd','$etijd','$optie','$paantal','$email')";
    $result = mysqli_query($db, $sql);

    if ($result) {
        $vnaam = '';
        $anaam = '';
        $email = '';
        $datum = '';
        $btijd = '';
        $etijd = '';
        $optie = '';
        $paantal = '';

    } else {
        $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
    }
}
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en" xmlns:Achternaam="http://www.w3.org/1999/xhtml">
<head>
    <!--    Zorgt voor een betere website layout voor de telefoon.  -->
    <meta name ="viewport" content="width-device-width, initial-scale-1">
    <meta charset="UTF-8">

    <title>Bowling & Party</title>
    <!--  CSS voor de datumpicker  -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!--    Jquery en bootstrap voor de plugins van de website  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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

                <a href="index.php" class="navbar-brand">BOWLING & PARTY</a>
            </div>
            <!-- Doorclick links naar de andere webpagina's-->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">BOWLEN</a></li>
                    <li><a href="opening.php">OPENINGSTIJDEN</a></li>
                    <li><a href="arrangement.php">ARRANGEMENT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li class="active"><a href="reserveer.php">RESERVEER</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Banner van de website-->
    <div id="banner">
        <div id = "textbanner">
            <h1 class="">Reserveer nu!</h1>
        </div>
    </div>

    <div class="container">
        <div id="homepage">
            <!--Validation laat zien waar het fout is gegegaan-->
            </br>
            <?php if (isset($errors) && !empty($errors)) { ?>
                <ul class="errors">
                    <?php for ($i = 0; $i < count($errors); $i++) { ?>
                        <li><?= $errors[$i]; ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <!--als er op submit is gedruk en er zijn geen fouten gevonden geef dan weer dat de reservering is geslaagd.-->
            <?php if(isset ($_REQUEST['submit']) && empty($errors)) {

                $naam       =   $_REQUEST['vnaam'];
                $achternaam =   $_REQUEST['anaam'];
                $email      =   $_REQUEST['email'];
                $date       =   $_REQUEST['datum'];
                $beginTijd  =   $_REQUEST['btijd'];
                $eindTijd   =   $_REQUEST['etijd'];
                $opties     =   $_REQUEST['optie'];
                $aantal     =   $_REQUEST['paantal'];

                $msg = "U reservering is geslaagd! U heeft gereserveerd op de naam $naam $achternaam. De reservering staat op $date om $beginTijd tot $eindTijd voor $aantal personen.";
                mail($email,"Reservering",$msg);

                ?>
                <div class="juist">
                De reservering is bevestigd!</br>
            <?= $naam. " " . $achternaam?> u heeft gereserveerd op <?=$date?> om <?=$beginTijd?> tot <?=$eindTijd?> voor <?=$aantal?> personen.</br>
                Er is een email gestuurd naar <?=$email?></br>
                </div>
                <?php
            }
            ?>
            <!-- Het formulier -->
            <form action="reserveer.php" method="get">
                </br>
                <label>Voornaam: </label></br> <input type="text" name="vnaam"></br>
                <label>Achternaam:</label> </br> <input type="text" name="anaam"></br>
                <label>Email: </label> </br> <input type="text" name="email"></br>
                <label for="datum">Datum:</label></br>
                <input type="text" placeholder="----/--/--"  id="example1" name="datum" readonly="readonly"></br>
                <label>Tijd</label></br>
                <select name="btijd">
                    <option value=""></option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                    <option value="23:00">23:00</option>
                </select>
             tot
                <select name="etijd">
                    <option value=""></option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                    <option value="23:00">23:00</option>
                    <option value="24:00">24:00</option>
                </select>
                </br>
                <label>Soort reservering</label></br>
                <select name="optie" class="form-control1">
                    <option value=""></option>
                    <option value="BOWLEN">bowlen</option>
                    <option value="BOWLEN EN ETEN">bowlen + eten</option>
                </select>
                </br>

                <label>Aantal personen(8max per baan):</label>
                </br>
                <select name="paantal">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                </br></br>
                <input type="submit" name="submit" onclick="return confirm('Weet u zeker dat u alles goed heeft ingevuld?')">
            </form>
        </div>
        <!-- Load jQuery en bootstrap datepicker scripts -->
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- code voor de datum select -->
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example1').datepicker({
                    format: "yyyy-mm-dd"
                });
            });
        </script>
    </div>
    <!--Footer met clickbare afbeeldingen-->
    <footer class="footer1">
        <div id="parent">
            <div class="image"><a href="#"><img id="gallery" src="images/galleryb.png"></a></div>
            <div class="image"><a href="https://goo.gl/jdITUo"><img id="route" src="images/routeb.png"></a></div>
            <div class="image"><a href="reserveer.php"><img id="calendar" src="images/calendar-128.png"></a></div>
        </div>
    </footer>

</body>
</html>
