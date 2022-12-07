<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php

class Movie
{
    //variabili d'istanza
    public $name;
    public $genre;
    public $description;
    public $duration;

    //costruttore
    public function __construct($name, $genre, $description, $duration)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->description = $description;
        $this->duration = $duration;
    }

    //metodo
    public function isLongFilm($duration)
    {
        if ($duration > 150) {
            $this->duration .= ' - long movie';
        }
    }

    public function getMovieDetails()
    {
        return "Title: " . $this->name . "<br/>".
         "Genre: " . $this->genre . "<br/>" .
         "Description: " . $this->description . "<br/>" .
         "Duration: " . $this->duration . "min" . "<br/>";
    }
}

//oggetti Movie
$VanillaSky = new Movie('Vanilla Sky', 'fantastic', 'David Aames è un ricco ed affascinante giovane ereditiere..', 136);
$TaxiDriver = new Movie('Taxi Driver', 'drama', 'Travis Bickle è un ventiseienne disadattato e alienato, ex Marine in Vietnam..', 114);
$TheLordOfTheRings = new Movie('The Lord Of The Rings', 'fantastic', 'Ambientato nel mondo immaginario della Terra di Mezzo..', 178);

$TheLordOfTheRings->isLongFilm(178);

var_dump($VanillaSky);
var_dump($TaxiDriver);
var_dump($TheLordOfTheRings);

echo $VanillaSky->getMovieDetails();
echo $TaxiDriver->getMovieDetails();
echo $TheLordOfTheRings->getMovieDetails();

?>