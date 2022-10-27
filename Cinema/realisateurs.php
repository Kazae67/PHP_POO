<?php

// Class
class Realisateur extends Personne{
    private DateTime $naissanceRealisateur;
    private array $films;
    
    // Construct
    public function __construct(DateTime $naissanceRealisateur){
        $this->naissanceRealisateur = $naissanceRealisateur;
        $this->films = [];
    }

    // Getters
    public function getNaissanceRealisateur():DateTime{
        return $this->naissanceRealisateur;
    }

    // Setters
    public function setNaissanceRealisateur(DateTime $naissanceRealisateur){
        $this->naissanceRealisateur = $naissanceRealisateur;
        return $this->naissanceRealisateur;
    }

    // Nouveau film
    public function nouveauFilm(Films $film){
        $this->films[] = $film;
    }

        // Bibliographie
        public function afficherBibliographie() {
            $pluriel = (count($this->films) > 1 ? "s" : "");
            $result = "Film$pluriel de <b>[$this->nom $this->prenom]</b><pre>";
            $result .= "</pre>Nombre de film$pluriel : <b>".count($this->films)."</b><ul>";
            foreach ($this->films as $film) {
                $result .= "<li>$film</li>";
                $result .= "<br>";
            }
            $result .= "</ul>";
            return $result;
        }
}