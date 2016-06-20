<?php

$errors = [];
if ($vnaam == "" ) {
    $errors[] = 'Username mag niet leeg zijn';
}
if (!preg_match("/^[a-zA-Z ]*$/",$vnaam)){
    $errors[] = 'Alleen letters zijn toegestaan.';
}
