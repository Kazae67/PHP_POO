<?php

// Class 
class Compte{
    private string $libelle;
    private float $soldeInitial;
    private string $devise;
    private Titulaire $titulaire;

    // Construct 
    public function __construct(string $libelle = "", float $soldeInitial = 0, string $devise = "€", Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->nouveauCompte($this);
    }

    // Getters
    public function getLibelle():string{
        return $this->libelle;
    }
    public function getSoldeInitial():float{
        return $this->soldeInitial;
    }
    public function getDevise():string{
        return $this->devise;
    }
    public function getTitulaire():Titulaire{
        return $this->titulaire;
    }

    // Setters
    public function setLibelle(string $libelle){
        $this->libelle = $libelle;
        return $this->libelle;
    }
    public function setSoldeInitial(float $soldeInitial){
        $this->soldeInitial = $soldeInitial;
        return $this->soldeInitial;
    }
    public function setDevise(string $devise){
        $this->devise = $devise;
        return $this->devise;
    }
    public function setTitulaire(string $titulaire){
        $this->titulaire = $titulaire;
        return $this->titulaire;
    }

    // Actions banque
    public function crediter(float $solde){
        $this->soldeInitial += $solde;
        echo "$this->titulaire a été crédité de [$solde$this->devise] sur le $this->libelle <strong>[$this->soldeInitial$this->devise]</strong><br> ";
    }
    public function debiter(float $solde){
        $this->soldeInitial -= $solde;
        echo "$this->titulaire a été débité de [$solde$this->devise] sur le $this->libelle <strong>[$this->soldeInitial$this->devise]</strong><br> ";
    }
    public function virement(float $solde, Compte $compte){
        $this->debiter($solde);
        $compte->crediter($solde);
        echo "$this->titulaire transfert du $this->libelle [$solde.$this->devise] sur le $compte<br>";
    }

    // Convertir en String
    public function __toString(){
        return $this->libelle." "."<strong>[$this->soldeInitial$this->devise]</strong>";
    }
}