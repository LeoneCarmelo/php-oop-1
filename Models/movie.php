<?php



class Movie {
    //Variabili d'instanza
    public $title;
    public $description;
    public $genre;
    public $vote;
    //Costruttore
    public function __construct(public string $img, string $title, string $description, Genre $genre) {
        $this->img = $img;  
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