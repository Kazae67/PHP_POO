<?php

// Class Extends
class Acteurs extends Personne{
    private string $role;

    // Construct
    public function __construct(string $nom, string $prenom, string $sexe, int $age, string $role){
        parent::__construct($nom, $prenom, $sexe, $age);
        $this->role = $role;
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