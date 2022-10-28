<?php


// Faire un tableau de casting, ce casting là vas se rajouter dans le role concerné, dans l'acteur, et le film,
// ensuite, à partir d'un acteur lister ces roles et ces films, à partir d'un film pour lister les acteur et les roles, et à partir d'un role on pourra lister les films et les acteurs.
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