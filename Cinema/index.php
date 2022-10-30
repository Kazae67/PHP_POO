<html>
<title>Cinéma</title>
<link rel="stylesheet" href="table.css">
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/PHP_POO/livres/style.css');

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

echo "<h1> III. Cinéma</h1>";
echo "Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
<br><br>";

$action = new Genres("Action");
$fiction = new Genres("Fiction");
$realisateur = new Realisateurs("George", "Clown", "Homme", 25);
$film = new Films("Le Renard", 1992, 120, $action, $realisateur);
$film2 = new Films("La Chèvre", 2012, 130, $fiction, $realisateur);
$realisateur2 = new Realisateurs("Saint", "Marie", "Femme", 60);
$film = new Films("Le Singe", 1992, 120, $action, $realisateur2);
$film2 = new Films("Le Cochon", 2012, 130, $action, $realisateur2);

echo "<h1>Afficher les infos du réalisateur, le nombre(s) film(s), et les infos des film(s)</h1>";

echo $realisateur;
echo $realisateur->filmographie();
echo $realisateur2;
echo $realisateur2->filmographie();


echo "<h1>Afficher les films par genre</h1>";
echo $action->afficherFilmsParGenre();
echo $fiction->afficherFilmsParGenre();






?>