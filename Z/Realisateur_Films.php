<?php

[Realisateur]
// Class
class Realisateurs{
    private array $films;

    // Construct
    public function __construct(){
        $this->films = [];
    }

    // Nouveau film
    public function nouveauFilm(Film $film){
        $this->films[] = $film;
    }
}

[Films]
// Class
class Films{
    private Realisateur $realisateur;

    // Construct
    public function __construct(Realisateur $realisateur){
    $this->realisateur = $realisateur;
    $this->realisateur->nouveauFilm($this);

    // Getters
    public function getRealisateur():Realisateur{
        return $this->Realisateur;
    }

    // Setters
    public function setRealisateur(string $realisateur){
        $this->realisateur = $realisateur;
        return $this->realisateur;
    }

}