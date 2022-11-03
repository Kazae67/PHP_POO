<?php

// Class
class Genre{
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

    public function nouveauFilm(Film $film){
        $this->films[] = $film;
    }

    public function afficherFilmsParGenre() {
        $result = "Genre : <b>$this->nomGenre</b><br>";
        $result .= "<ul>";
        foreach ($this->films as $film) {
            $result .= "<li>$film</li>";
            $result .= "<br>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->nomGenre;
    }
    
}
?>