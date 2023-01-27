<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Corentin");
echo 'humain = ' . $humain->getVie() . '<br>';
// Creation d'une instance de la classe dragon
$dragon = new dragon();
echo 'dragon = ' . $dragon->getVie() . '<br>';
// Creation d'une instance de la classe princesse
$princesse = new princesse();
echo 'princesse = ' . $princesse->getSaved() . '<br>';
// Creation d'une instance de la classe sorcier
$sorcier = new sorcier();
echo 'princesse = ' . $princesse->x() . '<br>';

