<?php

class Movie {
    //Variabili d'instanza
    public $title;
    public $description;
    public $genre;
    public $vote;
    //Costruttore
    public function __construct(string $title, string $description, string $genre) {
        $this->title = $title;
        $this->description = $description;
        $this->genre = $genre;
    }
    //Metodo
    public function setVote($vote) {
        if($vote > 2) {
            return $this->vote = $vote;
        }

    }
}

$avatar = new Movie('Avatar', 'Lorem ipsum dolor', 'Fantasy');
$rambo = new Movie('Rambo', 'Lorem ipsum dolor', 'Action');

$avatar->setVote(3);
var_dump($avatar);
var_dump($rambo);