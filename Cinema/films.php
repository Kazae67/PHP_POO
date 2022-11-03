<?php

// Class
class Films{
    private string $titre;
    private DateTime $dateSortie;
    private int $duree;
    private Genres $genres;
    private Realisateurs $realisateur;
    private array $castings;
    
    // Construct
    public function __construct(string $titre, $dateSortie, int $duree, Genres $genres, Realisateurs $realisateur){
        $this->titre = $titre;
        $this->dateSortie = new DateTime($dateSortie);
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
    public function getDateSortie():DateTime{
        return $this->dateSortie;
    }
    
    public function getDate(): string{
        return $this->getDateSortie()->format('d-m-Y');
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

     // Afficher les roles 
     public function AfficherFilm_ActeursRoles() {
        $pluriel = (count($this->castings) > 1 ? "s" : "");
        $result = "Film$pluriel : $this->titre<br>";
        $result .= "<ul>";
        foreach ($this->castings as $casting) {
            $result .= "<li>".$casting->getActeurCasting()." $this ".$casting->getRoleCasting()."</li>";
            $result .= "<br>";
        }
        $result .= "</ul>";
        return $result;
    }   

    // Convertir en string
    public function __toString(){
        return "
        Titre : $this->titre<br>
        Date de sortie : ".$this->getDate()."<br>";
    }

}