<?php

/* 
- ÉTAPE 1
- Faire un tableau de casting.
- Ce casting doit se rajouter dans le role, l'acteur, et le film concerné.

- ÉTAPE 2
- À partir d'un acteur, lister ses roles et ses films. 
- À partir d'un film, lister les acteur et les roles. 
- À partir d'un role, lister les films et les acteurs.
*/ 

// Class
class Casting{
    private Role $roleCasting;
    private Film $filmCasting;
    private Acteur $acteurCasting;

    // Construct
    public function __construct(Role $roleCasting, Film $filmCasting, Acteur $acteurCasting){
        $this->roleCasting = $roleCasting;
        $this->filmCasting = $filmCasting;
        $this->acteurCasting = $acteurCasting;
        $this->roleCasting->nouveauRoleCasting($this);
        $this->filmCasting->nouveauFilmCasting($this);
        $this->acteurCasting->nouveauActeurCasting($this);    
    }

    // Getters
    public function getRoleCasting():Role{
        return $this->roleCasting;
    }
    public function getFilmCasting():Film{
        return $this->filmCasting;
    }
    public function getActeurCasting():Acteur{
        return $this->acteurCasting;
    }

    // Setters
    public function setRoleCasting(Role $roleCasting){
        $this->roleCasting = $roleCasting;
        return $this->roleCasting;
    }
    public function setFilmCasting(Film $filmCasting){
        $this->filmCasting = $filmCasting;
        return $this->filmCasting;
    }
    public function setActeurCasting(Acteur $acteurCasting){
        $this->acteurCasting = $acteurCasting;
        return $this->acteurCasting;
    }
    
    // Convertir en string
    public function __toString(){
        return "Role : $this->roleCasting<br>
        Films : $this->filmCasting<br> 
        Acteurs : $this->acteurCasting<br>";
    }
    
}
?>
