<?php
class Movie
{
    public $nome;
    public $genere;
    public $rating;
    function __construct($_nome, $_genere, $_rating)
    {
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->rating = $_rating;
    }
}