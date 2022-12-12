<?php
include_once __DIR__ . '/models/movie.php';
$movie1 = new Movie("Metropolis", "Fritz Lang", 1927, 8.2, array("Drammatico", "Fantascienza"));
$movie2 = new Movie("GUERRE STELLARI V - L'IMPERO COLPISCE ANCORA", "Ivrin Kershner", 1980, 8.1, array("Azione", "Fantascienza", "Fantasy", "Famiglia"));

// Stampa dei dettagli dei film
$movie1->printDetails();
echo "<br>";
$movie2->printDetails();