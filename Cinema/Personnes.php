<?php

// Class
class Personnes{
    private string $nom;
    private string $prenom;
    private string $sexe;
    private int $age;

    // Construct
    public function __construct(string $nom, string $prenom, string $sexe, int $age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->age = $age;
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
    public function getAge():int{
        return $this->age;
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
    public function setAge(int $age){
        $this->age = $age;
        return $this->age;
    }
    
}
?>