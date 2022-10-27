<?php

// Class
class Personne{
    private string $nom;
    private string $prenom;
    private string $sexe;

    // Construct
    public function __construct(string $nom, string $prenom, string $sexe){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
    }

    // Getters
    public function getNom():string{
        return $this->nom;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getSexe():string{
        return $this->sexe;
    }

    // Setters
    public function setNom(string $nom){
        $this->nom = $nom;
        return $this->nom;
    }
    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
        return $this->prenom;
    }
    public function setSexe(string $sexe){
        $this->sexe = $sexe;
        return $this->sexe;
    }

}