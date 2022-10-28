<?php

// Class
class Casting{
    private Roles $roleCasting;
    private Films $filmCasting;
    private Acteurs $acteurCasting;

    // Construct
    public function __construct(Roles $roleCasting, Films $filmCasting, Acteurs $acteurCasting){
        $this->roleCasting = $roleCasting;
        $this->filmCasting = $filmCasting;
        $this->acteurCasting = $acteurCasting;
    }

    // Getters
    public function getRoleCasting():Roles{
        return $this->roleCasting;
    }
    public function getFilmCasting():Films{
        return $this->filmCasting;
    }
    public function getActeurCasting():Acteurs{
        return $this->acteurCasting;
    }

    // Setters
    public function setRoleCasting(Roles $roleCasting){
        $this->roleCasting = $roleCasting;
        return $this->roleCasting;
    }
    public function setFilmCasting(Films $filmCasting){
        $this->filmCasting = $filmCasting;
        return $this->filmCasting;
    }
    public function setActeurCasting(Acteurs $acteurCasting){
        $this->acteurCasting = $acteurCasting;
        return $this->acteurCasting;
    }
    
}