<?php
//Kijkt of er fouten zijn gemaakt bij het invullen van het formulier op reserveer.php
$errors = [];
if ($vnaam == "" ) {
    $errors[] = 'Voornaam mag niet leeg zijn';
}
if (!preg_match("/^[a-zA-Z ]*$/",$vnaam)){
    $errors[] = 'Alleen letters zijn toegestaan.';
}
if ($anaam == "") {
    $errors[] = 'Achternaam mag niet leeg zijn';
}
if (!preg_match("/^[a-zA-Z ]*$/",$anaam)){
    $errors[] = 'Alleen letters zijn toegestaan.';
}
if ($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = 'Email is niet juist ingevoerd';
}
if ($datum == "") {
    $errors[] = 'Datum is niet gekozen';
}
if ($btijd == "" || $btijd >= $etijd) {
    $errors[] = 'Begintijd klopt niet';
}
if ($etijd == "") {
    $errors[] = 'Eindtijd klopt niet';
}
if ($optie == "") {
    $errors[] = 'Optie is niet ingevoerd';
}
if ($paantal == "") {
    $errors[] = 'Personen is niet ingevoerd';
}

