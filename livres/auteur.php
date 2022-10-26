<?php

// Class
class Auteur{
    private string $nom;
    private string $prenom;
    private array $auteurs;

    // Construct
    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->auteurs = [];
    }

    // Getters
    public function getNom():string{
        return $this->nom;
    }
    public function getPrenom():string{
        return $this->prenom;
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

    public function nouvelAuteur(Livres $auteur){
        $this->auteurs[]= $auteur;
        echo "[$this->nom $this->prenom] $auteur<br>";
    }


    // Convertir en string
    public function __toString(){
        return  $this->nom.$this->prenom;
    }
}
