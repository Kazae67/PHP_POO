<html>
<title>Livres</title>
<link rel="stylesheet" href="table.css">
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/PHP_POO/livres/style.css');

require "livres.php";
require "auteur.php";

$livres = new Livres("Auteur",1990, 100, 20,"Yasin"); // Titre / Parution / Pages / Prix / Auteur
$auteur = new Auteur("AKGEDIK", "Yasin");
var_dump($livres);
var_dump($auteur);
echo $livres;
echo $auteur;
echo $livres->afficherBibliographie();


echo "<h1> II. Livres</h1>";
echo "Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et
leurs auteurs respectifs.<br><br>";