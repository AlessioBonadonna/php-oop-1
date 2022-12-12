<?php
class Movie
{
    // Variabili d'istanza
    public $title;
    public $director;
    public $year;
    public $rating;
    public $generes = array();

    // Costruttore
    public function __construct($_title, $_director, $_year, $_rating, $_generes)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->rating = $_rating;
        $this->generes = $_generes;
    }

    // Metodo per stampare i dettagli del film
    public function printDetails()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Director: " . $this->director . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Voto: " . $this->rating . "<br>";
        echo "Generes : ";
        foreach ($this->generes as $genere) {
            echo $genere . " , ";
        }
        echo "<br>";
    }
}