<?php

// Class
class Genres{
    private string $nomGenre;
    private array $films;

    // Construct
    public function __construct(string $nomGenre){
        $this->nomGenre = $nomGenre;
    }

    // Getters
    public function getNomGenre():string{
        return $this->nomGenre;
    }

    // Setters
    public function setNomGenre(string $nomGenre){
        $this->nomGenre = $nomGenre;
        return $this->nomGenre;
    }

    public function nouveauFilm(Films $film){
        $this->films[] = $film;
    }

    public function __toString(){
        return $this->nomGenre;
    }
    

}