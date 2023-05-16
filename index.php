<?php
class Genre {
    public $type;

    public function __construct(string $type) {
        $this->type = $type;
    }
}
class Movie {
    //Variabili d'instanza
    public $title;
    public $description;
    public $genre;
    public $vote;
    //Costruttore
    public function __construct(string $title, string $description, Genre $genre) {
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

$fantasy = new Genre('Fantasy');
$action = new Genre('Action');
$avatar = new Movie('Avatar', 'Lorem ipsum dolor', $fantasy);
$rambo = new Movie('Rambo', 'Lorem ipsum dolor', $action);

$avatar->setVote(3);
var_dump($avatar);
var_dump($rambo);


