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

require './Classes/Appartement.php';
require './Classes/Habitation.php';
require  './Classes/Maison.php';

$maison1 = new Maison('Belgique', 'Momignies', 6590, 3, 4, true, 1, false);
echo  $maison1-> getPays();
echo  $maison1-> getVille();
echo  $maison1-> getCodePostal();
echo  $maison1-> getChambres();
echo  $maison1-> getPieces();
echo  $maison1-> isJardin();
echo $maison1-> getEtage();
echo $maison1 -> isGarage();

$maison2 = new Maison('France', 'Bourg-en-Bresse', 01000, 3, 5, true, 1, true);
echo  $maison2-> getPays();
echo  $maison2-> getVille();
echo  $maison2-> getCodePostal();
echo  $maison2-> getChambres();
echo  $maison2-> getPieces();
echo  $maison2-> isJardin();
echo $maison2-> getEtage();
echo $maison2 -> isGarage();

$appartement = new Appartement('France', 'Mâcon', 71000, 3, 6, false);
echo  $appartement-> getPays();
echo  $appartement-> getVille();
echo  $appartement-> getCodePostal();
echo  $appartement-> getChambres();
echo  $appartement-> getPieces();
echo $appartement -> isGarage();

$appartement->setGarage(false);
$appartement->setCodePostal(01000);
$appartement->setVille("Bourg-en-Bresse");
$appartement->setPays("France");
$appartement->setChambres(3);
$appartement->setPieces(6);