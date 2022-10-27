<?php

class Role{
// mettre un tableau array role
    // Class
    private string $role;

    // Construct
    public function __construct(string $role){
        $this->role = $role;
        $this->role = [];
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
    
}