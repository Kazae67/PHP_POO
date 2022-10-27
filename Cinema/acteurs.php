<?php

// Class Extends
class Acteurs extends personne{
    private DateTime $naissanceActeur;
    private string $role;

    // Construct
    public function __construct(DateTime $naissanceActeur, string $role){
        $this->naissanceActeur = $naissanceActeur;
        $this->role = $role;
    }

    // Getters
    public function getNaissanceActeur():DateTime{
        return $this->naissanceActeur;
    }
    public function getRole():string{
        return $this->role;
    }

    // Setters
    public function setNaissanceActeur(string $naissanceActeur){
        $this->naissanceActeur = $naissanceActeur;
        return $this->naissanceActeur;
    }
    public function setRole(string $role){
        $this->role = $role;
        return $this->role;
    }
}