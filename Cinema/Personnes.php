<?php

// Class
class Personnes{
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;

    // Construct
    public function __construct(string $nom, string $prenom, string $sexe, $dateNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
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
    public function getDateNaissance():DateTime{
        return $this->dateNaissance;
    }
    public function getAge():string{
        return $this->getDateNaissance()->format("d-m-Y");
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
    public function setdateNaissance(DateTime $dateNaissance){
        $this->dateNaissance = $dateNaissance;
        return $this->dateNaissance;
    }

    public function __toString(){
        return "
        Nom : $this->nom<br>
        Prenom : $this->prenom<br>
        Date de naissance :".$this->DateNaissance."<br>";
    }
    
}
?>