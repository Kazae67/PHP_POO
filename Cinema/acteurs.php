<?php

// Class Extends
class Acteurs extends Personnes{
    private string $acteur;

    // Construct
    public function __construct(string $nom, string $prenom, string $sexe, int $age, string $acteur){
        parent::__construct($nom, $prenom, $sexe, $age);
        $this->acteur = $acteur;
    }

    // Getters
    public function getActeur():string{
        return $this->acteur;
    }

    // Setters
    public function setActeur(string $acteur){
        $this->acteur = $acteur;
        return $this->acteur;
    }
}