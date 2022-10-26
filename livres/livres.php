<?php

// Class
class Livres{
    private string $titre;
    private int $parution;
    private int $pages;
    private float $prix;
    private string $devise;
    private Auteur $auteur;

    // Construct
    public function __construct(string $titre,int $parution, int $pages, float $prix, string $devise, Auteur $auteur){
        $this->titre = $titre;
        $this->parution = $parution;
        $this->pages = $pages;
        $this->prix = $prix;
        $this->devise = $devise;
        $this->auteur = $auteur;
        $this->auteur->nouveauLivre($this);

    }

    // Getters
    public function getAuteur():Auteur{
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
    public function getDevise():string{
        return $this->devise;
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
    public function setDevise(string $devise){
        $this->devise = $devise;
        return $this->devise;
    }

    // Convertir en string
    public function __toString(){
        return "Titre : $this->titre<br> Année de sortie : $this->parution<br>Nombre de pages : $this->pages<br> Prix : $this->prix $this->devise";
    }
}
?>