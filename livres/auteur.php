<?php

// Class
class Auteur{
    private string $nom;
    private string $prenom;
    private array $livres;

    // Construct
    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
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

    // Nouveau livre
    public function nouveauLivre(Livres $livre){
        $this->livres[] = $livre;
    }

    // Bibliographie
    public function afficherBibliographie() {
        $pluriel = (count($this->livres) > 1 ? "s" : "");
        $result = "Livre$pluriel de <b>[$this->nom $this->prenom]</b><pre>";
        $result .= "</pre>Nombre de livre$pluriel : <b>".count($this->livres)."</b><ul>";
        foreach ($this->livres as $livre) {
            $result .= "<li>$livre</li>";
            $result .= "<br>";
        }
        $result .= "</ul>";
        return $result;
    }
}
?>