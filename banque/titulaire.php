<?php

// Class
class Titulaire{
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private string $ville;
    private array $comptes;


    // Construct
    public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
        $this->ville = $ville;
        $this->comptes = [];
    }

    // Getters
    public function getNom():string{
        return $this->nom;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getDateDeNaissance():DateTime{
        return $this->dateDeNaissance;
    }
    public function getAge():string{
        return date_diff(new DateTime(), $this->dateDeNaissance)->format("%Y");
    }
    public function getVille():string{
        return $this->ville;
    }

    // Setters
    public function setNom($nom){
        $this->nom = $nom;
        return $this->nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this->prenom;
    }
    public function setDateDeNaissance(DateTime $dateDeNaissance){
        $this->dateDeNaissance = $dateDeNaissance;
        return $this->dateDeNaissance;
    }
    public function setVille($ville){
        $this->ville = $ville;
        return $this->ville;
    }

    // Nouveau Compte
    public function nouveauCompte(Compte $compte){
        $this->comptes[]= $compte;
        echo "[$this->nom $this->prenom] solde initial $compte<br>";
    }

    // Afficher les Comptes
    public function afficherComptes(){
        $pluriel = (count($this->comptes) > 1 ? "s" : "");
        $result = "Nombre de compte$pluriel : ".count($this->comptes);
        foreach ($this->comptes as $compte) {
            $result .= "<li>$compte</li>";
        }
        $result .= "<br>";
        return $result;
    }

    // Convertir en String
    public function __toString(){
        return "[$this->nom $this->prenom] ".$this->getAge()." ans ".$this->getVille()." :";
    }
}