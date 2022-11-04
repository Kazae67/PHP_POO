<html>
<title>Cinéma</title>
<link rel="stylesheet" href="table.css">
<head>
    <meta charset="UTF-8">
</head>
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/PHP_POO/PHP_POO/Cinema/style.css');

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

echo "<h1> III. Cinéma</h1>";
echo "Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
<br><br>";

$action = new Genre("Action");
$fiction = new Genre("Fiction");
$realisateur = new Realisateur("Rose", "Bouquet", "Femme", "03-01-1992");
$film = new Film("Le Renard", 1992, 158, $action, $realisateur);
$film2 = new Film("La Chèvre", 2018, 112, $fiction, $realisateur);
$realisateur2 = new Realisateur("Jack", "Roussot", "Homme", "01-01-1993");
$film = new Film("Le Singe", 1992, 120, $action, $realisateur2);
$film2 = new Film("Le Cochon", 2012, 141, $action, $realisateur2);
$film3 = new Film("La Girafe", 2001, 132, $fiction, $realisateur2);

echo "<h1>Afficher les infos du réalisateur, le nombre(s) film(s), et les infos des film(s)</h1>";

echo $realisateur;
echo $realisateur->filmographie();
echo $realisateur2;
echo $realisateur2->filmographie();

echo "<h1>Afficher les films par genre</h1>";
echo $action->afficherFilmsParGenre();
echo $fiction->afficherFilmsParGenre();

echo "<h1>Afficher les roles et films d'un acteur</h1>";
$acteurCasting = new Acteur("Akgedik", "Yasin", "Homme", "03-08-1993", "Test");
$roleCasting = new Role("John Freeman");
$filmCasting = new Film("Le Singe", 1992, 120, $action, $realisateur);
$casting = new Casting($roleCasting, $filmCasting, $acteurCasting);

echo $acteurCasting->AfficherActeur_RolesFilms();


$acteurCasting2 = new Acteur("Johny", "Depp", "Homme", "23-01-1995", "Test");
$roleCasting2 = new Role("Le Chien");
$filmCasting2 = new Film("Le Dino", 1992, 120, $action, $realisateur);
$casting2 = new Casting($roleCasting2, $filmCasting2, $acteurCasting2);

echo $acteurCasting2->AfficherActeur_RolesFilms();

// $acteur = new Acteurs("Akgedik", "Yasin", "Homme", 29, "Test");
// $sesRoles = new Role("Son Role");
// $sesFilm = new Film("Le Renard", 1992, 158, $action, $realisateur);
// $casting = new Casting($sesRoles, $sesFilm, $acteur);
// echo $acteur;
// echo $acteur->AfficherSesRoles();
// echo $casting;
// echo $acteur->AfficherSesRoles();

echo "<h1>Afficher les acteurs et rôles d'un film</h1>";
$acteurCasting3 = new Acteur("Akgedik", "Yasin", "Homme", "01-02-1996", "Test");
$roleCasting3 = new Role("John Freeman");
$filmCasting3 = new Film("Le Singe", 1992, 120, $action, $realisateur);
$casting3 = new Casting($roleCasting3, $filmCasting3, $acteurCasting3);

echo $filmCasting3->AfficherFilm_ActeursRoles();

$acteurCasting4 = new Acteur("Loup", "Rouge", "Femme", "05-04-1998", "Test");
$roleCasting4 = new Role("Morgane Freeman");
$filmCasting4 = new Film("Le Mouton", 1992, 120, $fiction, $realisateur);
$casting4 = new Casting($roleCasting4, $filmCasting4, $acteurCasting4);

echo $filmCasting4->AfficherFilm_ActeursRoles();


echo "<h1>Afficher les acteurs et films d'un rôle</h1>";

$acteurCasting5 = new Acteur("Reis", "Glouf", "Homme", "02-03-2000", "Test");
$roleCasting5 = new Role("Rachel Lulu");
$filmCasting5 = new Film("Le Patron", 1992, 120, $action, $realisateur);
$casting5 = new Casting($roleCasting5, $filmCasting5, $acteurCasting5);

echo $roleCasting5->AfficherRole_ActeursFilms();

$acteurCasting6 = new Acteur("Miaw", "Chat", "Femme", "08-07-2001", "Test");
$roleCasting6 = new Role("Richarde Jiji");
$filmCasting6 = new Film("Le FOU", 1992, 120, $action, $realisateur);
$casting6 = new Casting($roleCasting6, $filmCasting6, $acteurCasting6);

echo $roleCasting6->AfficherRole_ActeursFilms();



?>
