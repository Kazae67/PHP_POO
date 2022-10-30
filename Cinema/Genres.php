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

    public function afficherFilmsParGenre() {
        $result = "Films : $this<br><ul>";
        foreach ($this->films as $film) {
            $result .= "<li>$film</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->nomGenre;
    }
    
    //foreach($films->getGenres() as $genre){ echo $genre->getName(); }
}