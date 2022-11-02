<?php

class Roles{

    // Class
    private string $roles;
    private array $castings;

    // Construct
    public function __construct(string $roles){
        $this->roles = $roles;
        $this->castings = [];

    }

    // Getters
    public function getRole():string{
        return $this->roles;
    }

    // Setters
    public function setRole(string $roles){
        $this->roles = $roles;
        return $this->roles;
    }

    // Nouveau 
    public function nouveauRoleCasting(Casting $casting){
        $this->castings[] = $casting;
    }

    // Convertir en string
    public function __toString(){
        return "Ses roles : $this->roles";
    }

    
}