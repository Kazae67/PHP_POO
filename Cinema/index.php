<html>
<title>Cinéma</title>
<link rel="stylesheet" href="table.css">
<head>
    <meta charset="UTF-8">
</head>
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
$realisateur = new Realisateurs("Rose", "Bouquet", "Femme", 25);
$film = new Films("Le Renard", 1992, 158, $action, $realisateur);
$film2 = new Films("La Chèvre", 2018, 112, $fiction, $realisateur);
$realisateur2 = new Realisateurs("Jack", "Roussot", "Homme", 60);
$film = new Films("Le Singe", 1992, 120, $action, $realisateur2);
$film2 = new Films("Le Cochon", 2012, 141, $action, $realisateur2);
$film3 = new Films("La Girafe", 2001, 132, $fiction, $realisateur2);

echo "<h1>Afficher les infos du réalisateur, le nombre(s) film(s), et les infos des film(s)</h1>";

echo $realisateur;
echo $realisateur->filmographie();
echo $realisateur2;
echo $realisateur2->filmographie();

echo "<h1>Afficher les films par genre</h1>";
echo $action->afficherFilmsParGenre();
echo $fiction->afficherFilmsParGenre();

echo "<h1>Afficher les roles et films des acteurs</h1>";




$roleCasting = new Roles("Son role");
$filmCasting = new Films("Le Singe", 1992, 120, $action, $realisateur);
$acteurCasting = new Acteurs("Akgedik", "Yasin", "Homme", 29, "Test");
$casting = new Casting($roleCasting, $filmCasting, $acteurCasting);

echo $acteurCasting->AfficherRolesFilms();



// $acteur = new Acteurs("Akgedik", "Yasin", "Homme", 29, "Test");
// $sesRoles = new Roles("Son Role");
// $sesFilm = new Films("Le Renard", 1992, 158, $action, $realisateur);
// $casting = new Casting($sesRoles, $sesFilm, $acteur);
// echo $acteur;
// echo $acteur->AfficherSesRoles();
// echo $casting;
// echo $acteur->AfficherSesRoles();




?>
