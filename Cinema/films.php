<?php

// Class
class Films{
    private string $titre;
    private int $dateSortie;
    private int $duree;
    private Genres $genres;
    private Realisateur $realisateur;
    

    // Construct
    public function __construct(string $titre, int $dateSortie, int $duree,  Genres $genres, Realisateur $realisateur){
        $this->titre = $titre;
        $this->dateSortie = $dateSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->realisateur->nouveauFilm($this);
        $this->genres = $genres;
        $this->genres->nouveauFilm($this);
    }

    // Getters
    public function getTitre():string{
        return $this->titre;
    }
    public function getDateSortie():int{
        return $this->dateSortie;
    }
    public function getDuree():int{
        return $this->duree;
    }
    public function getGenre():Genres{
        return $this->genres;
    }
    public function getRealisateur():Realisateur{
        return $this->Realisateur;
    }

    // Setters test
    public function setTitre(string $titre){
        $this->titre = $titre;
        return $this->titre;
    }
    public function setDateSortie(int $dateSortie){
        $this->dateSortie = $dateSortie;
        return $this->dateSortie;
    }
    public function setDuree(int $duree){
        $this->duree = $duree;
        return $this->duree;
    }
    public function setGenres(string $genres){
        $this->genres = $genres;
        return $this->genres;
    }
    public function setRealisateur(string $realisateur){
        $this->realisateur = $realisateur;
        return $this->realisateur;
    }


    // Convertir en string
    public function __toString(){
        return "Titre : $this->titre<br> Date de sortie : $this->dateSortie<br>Durée : $this->duree<br> Genre : $this->genre";
    }
}