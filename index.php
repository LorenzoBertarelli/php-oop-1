<?php

require __DIR__ . "/Models/Movie.php";
require __DIR__ . "/Models/Actors.php";

$Actor1 = new Actors("Leonardo", "Di Caprio");
$Actor2 = new Actors("Sam", "Worthington");
$Actor3 = new Actors("Naomie", "Harris");

//Oggetti istanziati
$Horror = new Movie("28 Giorni Dopo", "13 giugno 2003", $Actor3);
// $Horror->name = "28 Giorni Dopo";
// $Horror->year = "1998";
$Horror->duration = "1h:27min";
$Horror->Start();

$Romantico = new Movie("Titanic", "16 gennaio 1998", $Actor1);

$Fantasy = new Movie("Avatar", "15 gennaio 2010", $Actor2);

var_dump($Horror);
var_dump($Romantico);
var_dump($Fantasy);



?>
