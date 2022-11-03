<?php

class Roles{

    // Class
    private string $role;
    private array $castings;

    // Construct
    public function __construct(string $role){
        $this->role = $role;
        $this->castings = [];

    }

    // Getters
    public function getRole():string{
        return $this->role;
    }

    // Setters
    public function setRole(string $role){
        $this->role = $role;
        return $this->role;
    }

    // Nouveau 
    public function nouveauRoleCasting(Casting $casting){
        $this->castings[] = $casting;
    }

     // Afficher les roles 
     public function AfficherRole_ActeursFilms() {
        $pluriel = (count($this->castings) > 1 ? "s" : "");
        $result = "</pre>Role$pluriel : <b>".count($this->castings)."</b><ul>";
        foreach ($this->castings as $casting) {
            $result .= "<li>".$casting->getActeurCasting()." $this ".$casting->getFilmCasting()."</li>";
            $result .= "<br>";
        }
        $result .= "</ul>";
        return $result;
    }   

    // Convertir en string
    public function __toString(){
        return "Ses roles : $this->role<br>";
    }

}
?>