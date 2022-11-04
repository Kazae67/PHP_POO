<?php

// Class Extends
class Acteur extends Personne{
    private array $castings;

    // Construct
    public function __construct(string $nom, string $prenom, string $sexe, $dateNaissance){
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->castings = [];

    }

    // Ajouter Casting 
    public function nouveauActeurCasting(Casting $casting){
        $this->castings[] = $casting;
    }

    // Afficher les roles 
    public function AfficherActeur_RolesFilms() {
        $pluriel = (count($this->castings) > 1 ? "s" : "");
        $result = "Acteur$pluriel : <b>".$this->getNom()." ".$this->getPrenom()."</b><br>";
        $result .= "<ul>";
        foreach ($this->castings as $casting) {
            $result .= "<li>".$casting->getFilmCasting()." $this ".$casting->getRoleCasting()."</li>";
            $result .= "<br>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return "";
    }  
}
?>