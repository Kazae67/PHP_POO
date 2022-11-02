<?php

// Class
class Films{
    private string $titre;
    private int $dateSortie;
    private int $duree;
    private Genres $genres;
    private Realisateurs $realisateur;
    private array $castings;
    
    

    // Construct
    public function __construct(string $titre, int $dateSortie, int $duree, Genres $genres, Realisateurs $realisateur){
        $this->titre = $titre;
        $this->dateSortie = $dateSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->realisateur->nouveauFilm($this);
        $this->genres = $genres;
        $this->genres->nouveauFilm($this);
        $this->castings = [];
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
    public function getGenres():Genres{
        return $this->genres;
    }
    public function getRealisateur():Realisateurs{
        return $this->realisateur;
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

    // Nouveau 
    public function nouveauFilmCasting(Casting $casting){
        $this->castings[] = $casting;
    }


    // Convertir en string
    public function __toString(){
        return "Titre : $this->titre<br> 
        Année de sortie : $this->dateSortie<br>
        Durée : $this->duree<br> 
        Genre : ". $this->getGenres()."<br>";
    }
}