<?php

[Films]
// Class
class Films{
    private Genres $genres;

    // Construct
    public function construct(Genres $genres){
        $this->genres = $genres;
        $this->genres->nouveauFilm($this);

        // Getters
        public function getGenre():Genres{
            return $this->genres;
        }

        // Setters
        public function setGenres(string $genres){
            $this->genres = $genres;
            return $this->genres;
        }
    }

[Genres]
// Class
class Genres{
    private string $nomGenre;
    private array $films;

    // Construct
    public function __construct(string $nomGenre){
        $this->$nomGenre = $nomGenre();
    }

    // Nouveau ?
    public function nouveauFilm(Films $film){
        $this->films[] = $film;
    }
}