<?php

// Class Extends
class Realisateurs extends Personne{
    private array $films;
    
    // Construct
    public function __construct(string $nom, string $prenom, string $sexe, string $age){
        parent::__construct($nom, $prenom, $sexe, $age);
        $this->films = [];
    }

    // Nouveau film
    public function nouveauFilm(Films $film){
        $this->films[] = $film;
    }

    // Bibliographie
    public function filmographie() {
        $pluriel = (count($this->films) > 1 ? "s" : "");
        $result = "</pre>Nombre de film$pluriel : <b>".count($this->films)."</b><ul>";
        foreach ($this->films as $film) {
            $result .= "<li>$film</li>";
            $result .= "<br>";
        }
        $result .= "</ul>";
        return $result;
    }
    
    // Convertir en string
    public function __toString(){
        return "Réalisateur : ".$this->getNom()." ".$this->getPrenom()."<br> 
        Sexe : ".$this->getSexe()."<br> 
        Âge : ".$this->getAge()."<br>";
    }
}