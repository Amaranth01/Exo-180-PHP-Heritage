<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require 'Classes/Habitation.php';
require 'Classes/Maison.php';
require  'Classes/Appartement.php';

$maison1 = new Maison('Belgique', 'Momignies', 6590, 3, 4, true, 1, false);
echo  $maison1-> getPays()."<br>";
echo  $maison1-> getVille()."<br>";
echo  $maison1-> getCodePostal()."<br>";
echo  $maison1-> getChambres()."<br>";
echo  $maison1-> getPieces()."<br>";
echo  $maison1-> isJardin()."<br>";
echo $maison1-> getEtage()."<br>";
echo $maison1 -> isGarage()."<br>";

echo "<br><br>";

$maison2 = new Maison('France', 'Bourg-en-Bresse', 01000, 3, 5, true, 1, true);
echo  $maison2-> getPays()."<br>";
echo  $maison2-> getVille()."<br>";
echo  $maison2-> getCodePostal()."<br>";
echo  $maison2-> getChambres()."<br>";
echo  $maison2-> getPieces()."<br>";
echo  $maison2-> isJardin()."<br>";
echo $maison2-> getEtage()."<br>";
echo $maison2 -> isGarage()."<br>";

echo "<br><br>";

$appartement = new Appartement('France', 'Mâcon', 71000, 3, 6, false);
echo  $appartement-> getPays()."<br>";
echo  $appartement-> getVille()."<br>";
echo  $appartement-> getCodePostal()."<br>";
echo  $appartement-> getChambres()."<br>";
echo  $appartement-> getPieces()."<br>";
echo $appartement -> isGarage()."<br>";

$appartement->setGarage(false);
$appartement->setCodePostal(01000);
$appartement->setVille("Bourg-en-Bresse");
$appartement->setPays("France");
$appartement->setChambres(3);
$appartement->setPieces(6);