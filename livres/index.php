<html>
<title>Livres</title>
<link rel="stylesheet" href="table.css">
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/PHP_POO/livres/style.css');

require "livres.php";
require "auteur.php";

echo "<h1> II. Livres</h1>";
echo "Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et
leurs auteurs respectifs.<br><br>";

$auteur = new Auteur("Dieu", "Prophète");
$livre = new Livres("Les rois du monde", 1750, 250, 7.50, "€", $auteur);
$livre2 = new Livres("Les rois des océans", 1850, 250, 7.50, "€", $auteur);

$auteur2 = new Auteur("Singe", "Wukong");
$livre = new Livres("Roi des singes", 1287, 750, 28.99, "€", $auteur2);

echo $auteur->afficherBibliographie();
echo $auteur2->afficherBibliographie();
?>