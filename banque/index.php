<html>
<title>Banque</title>
<link rel="stylesheet" href="table.css">
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/BLC/style.css');

echo "<h1> I. Banque</h1>";
echo "Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires
et leurs comptes bancaires respectifs.<br><br>";

require "banque.php";
require "titulaire.php";

$titulaire1 = new Titulaire("AKGEDIK", "Yasin", "1993-08-03", "STRASBOURG");
$livret = new Compte("Livret A", 5000, "€", $titulaire1);
$compte = new Compte("Compte courant", 8000, "€", $titulaire1);
echo "<br>";
$livret->crediter(8000);
echo "<br>";
$livret->debiter(500);
echo "<br>";
$livret->virement(10000, $compte);
echo "<br>";
$compte->virement(100, $livret);
echo "<br>";
echo $titulaire1->afficherComptes();

$titulaire2 = new Titulaire("RIZ", "Olait", "1998-02-01", "MULHOUSE");
$livret = new Compte("Livret A", 2000, "€", $titulaire2);
$compte = new Compte("Compte courant", 7000, "€", $titulaire2);
$livret->crediter(4000);
$livret->debiter(200);
$livret->virement(700, $compte);
$compte->virement(900, $livret);
echo $titulaire2->afficherComptes();

$titulaire3 = new Titulaire("MACHIN", "Bidule", "1975-10-23", "COLMAR");
$livret = new Compte("Livret A", 4000, "$", $titulaire3);
$livret->crediter(5000);
$livret->debiter(400);
echo $titulaire3->afficherComptes();

$titulaire4 = new Titulaire("TAG", "Eule", "1987-11-28", "ANNECY");
$livret = new Compte("Livret A", 5000, "€", $titulaire4);
$compte = new Compte ("Compte courant", 1000, "€", $titulaire4);
$compte2 = new Compte ("Compte courant 2", 0, "€", $titulaire4);
$compte->crediter(500);
$livret->debiter(200);
$compte2->crediter(1000);
$livret->virement(800, $compte2);
echo $titulaire4->afficherComptes();

var_dump($compte);


?>