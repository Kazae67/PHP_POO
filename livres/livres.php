<?php

// Class
class Livres{
    private string $titre;
    private int $parution;
    private int $pages;
    private float $prix;
    private string $auteur;

    // Construct
    public function __construct(string $titre,int $parution, int $pages, float $prix, string $auteur){
        $this->titre = $titre;
        $this->parution = $parution;
        $this->pages = $pages;
        $this->prix = $prix;
        $this->auteur = $auteur;

    }

    // Getters
    public function getAuteur():string{
        return $this->auteur;
    }
    public function getTitre():string{
        return $this->titre;
    }
    public function getParution():int{
        return $this->parution;
    }
    public function getPages():int{
        return $this->pages;
    }
    public function getPrix():float{
        return $this->prix;
    }

    // Setters
    public function setAuteur(string $auteur){
        $this->auteur = $auteur;
        return $this->auteur;
    }
    public function setTitre(string $titre){
        $this->titre = $titre;
        return $this->titre;
    }
    public function setParution(int $parution){
        $this->parution = $parution;
        return $this->parution;
    }
    public function setPages(int $pages){
        $this->pages = $pages;
        return $this->pages;
    }
    public function setPrix(float $prix){
        $this->prix = $prix;
        return $this->prix;
    }

    public function afficherBibliographie(){
        echo "Lol";
    }
    // Convertir en string
    public function __toString(){
        return "test livres";
    }

}