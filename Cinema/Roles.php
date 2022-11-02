<?php

class Roles{

    // Class
    private string $roles;
    private array $castings;

    // Construct
    public function __construct(string $roles){
        $this->roles = $roles;
        $this->roles = [];
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
    
}