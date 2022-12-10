<?php

//oggetti Movie
$Movies = [
$VanillaSky = new Movie('Vanilla Sky', [new Genre('fantasy'), new Genre('drama'),new Genre('thriller')], 'David Aames è un ricco ed affascinante giovane ereditiere..', 136 .'min'),
$TaxiDriver = new Movie('Taxi Driver', [new Genre('drama')], 'Travis Bickle è un ventiseienne disadattato e alienato, ex Marine in Vietnam..', 114 .'min'),
$TheLordOfTheRings = new Movie('The Lord Of The Rings', [new Genre('fantasy')], 'Ambientato nel mondo immaginario della Terra di Mezzo..', 178 .'min'),
$Matrix = new Movie('Matrix', [new Genre('action'), new Genre('fantasy'),new Genre('thriller')], 'Lorem ipsum dolor sit amet..', 136 .'min'),
$MeetTheParents = new Movie('Meet the parents', [new Genre('comedy')], 'Lorem ipsum dolor sit amet lorem ipsum dolor..', 114 .'min'),
$Avatar = new Movie('Avatar', [new Genre('fantasy')], 'Lorem ipsum dolor sit amet....', 178 .'min'),
];

$VanillaSky->isLongMovie(136);
$TaxiDriver->isLongMovie(114);
$TheLordOfTheRings->isLongMovie(178);
$Matrix->isLongMovie(136);
$MeetTheParents->isLongMovie(114);
$Avatar->isLongMovie(178);

/* var_dump($VanillaSky);
var_dump($TaxiDriver);
var_dump($TheLordOfTheRings); */

/* echo $VanillaSky->getMovieDetails();
echo $TaxiDriver->getMovieDetails();
echo $TheLordOfTheRings->getMovieDetails(); */