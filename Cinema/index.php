<html>
<title>Livres</title>
<link rel="stylesheet" href="table.css">
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/PHP_POO/livres/style.css');

require "personne.php";
require "films.php";
require "realisateurs.php";
require "acteurs.php";

echo "<h1> III. Cinéma</h1>";
echo "Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
<br><br>";

$realisateur = new Realisateur("George", "Clown", "Homme", 25);
$film = new Films("Le festival", 1992, 120, "Action", $realisateur);

echo $realisateur->filmInfos();

?>