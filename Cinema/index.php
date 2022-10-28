<html>
<title>Cinéma</title>
<link rel="stylesheet" href="table.css">
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/PHP_POO/livres/style.css');

require "Personne.php";
require "Films.php";
require "Realisateurs.php";
require "Acteurs.php";

echo "<h1> III. Cinéma</h1>";
echo "Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
<br><br>";
$action = new Genres("Action");
$realisateur = new Realisateur("George", "Clown", "Homme", 25);
$film = new Films("Le festival", 1992, 120, $action, $realisateur);

echo $realisateur->filmographie();
echo $realisateur;

?>