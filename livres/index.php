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

$auteur3 = new Auteur("Nicolas", "Sarokozy");
$livre = new Livres("Mettre le monde à sa poche", 2008, 89, 4.60, "$", $auteur3);
$livre2 = new Livres("Séduire la France", 2008, 103, 5.50, "€", $auteur3);
$livres3 = new Livres("Trahison", 2007, 77, 2.40, "€", $auteur3);
$livres4 = new Livres("Faciliter le pouvoir d'achat", 2004, 42, 7.50, "€", $auteur3);

echo $auteur->afficherBibliographie();
echo $auteur2->afficherBibliographie();
echo $auteur3->afficherBibliographie();
?>