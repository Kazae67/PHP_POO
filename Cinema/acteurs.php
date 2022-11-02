<?php

// Class Extends
class Acteurs extends Personnes{
    private string $acteurs;
    private array $castings;

    // Construct
    public function __construct(string $nom, string $prenom, string $sexe, int $age, string $acteurs){
        parent::__construct($nom, $prenom, $sexe, $age);
        $this->acteurs = $acteurs;
        $this->castings = [];

    }

    // Getters
    public function getActeur():string{
        return $this->acteurs;
        
    }

    // Setters
    public function setActeur(string $acteurs){
        $this->acteurs = $acteurs;
        return $this->acteurs;
    }

    // Nouveau 
    public function nouveauActeurCasting(Casting $casting){
        $this->castings[] = $casting;
    }

        // Afficher les roles
        public function AfficherRolesFilms() {
            $pluriel = (count($this->castings) > 1 ? "s" : "");
            $result = "</pre>role$pluriel : <b>".count($this->castings)."</b><ul>";
            foreach ($this->castings as $casting) {
                $result .= "<li>Dans le film : ".$casting->getFilmCasting()." $this a joué :".$this->getRoleCasting()."</li>";
                $result .= "<br>";
            }
            $result .= "</ul>";
            return $result;
        }

        public function __toString(){
            return "Acteur : ".$this->getNom()." ".$this->getPrenom()."<br> 
            Sexe : ".$this->getSexe()."<br> 
            Âge : ".$this->getAge()."<br>";
        }
        
}