<?php

//class Movie
class Movie
{
    //variabili d'istanza
    public $name;
    public $genres;
    public $description;
    public $duration;


    //costruttore
    public function __construct($name, array $genres, $description, $duration)
    {
        $this->name = $name;
        $this->genres = $genres;
        $this->description = $description;
        $this->duration = $duration;
    }

    //metodi
    public function isLongMovie($duration)
    {
        if ($duration > 150) {
            $this->duration .= ' - long movie';
        }
    }

   /*  public function getMovieDetails()
    {
        return "Title: " . $this->name . "<br/>".
         "Genre: " . $this->genres . "<br/>" .
         "Description: " . $this->description . "<br/>" .
         "Duration: " . $this->duration . "<br/>";
    } */
}