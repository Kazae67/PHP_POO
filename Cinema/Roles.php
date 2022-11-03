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

    // Convertir en string
    public function __toString(){
        return "Ses roles : $this->role";
    }

    
}