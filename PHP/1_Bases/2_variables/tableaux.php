<?php
$tab = array(15,22);
$tabCrochets = [15,22];
var_dump($tab);
var_dump($tabCrochets);
$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
echo "<h2>Afficher le tableau</h2>";
var_dump($jours);

//afficher le 4ème élément du tableau
echo "<h2>Afficher le 4ème élément du tableau</h2>";
var_dump($jours[3]);
echo "<h2>Afficher la valeur du 4ème élément du tableau</h2>";
echo $jours[3];
//Ajoute l'élément "Dimanche à la fin du tableau et l'afficher
echo "<h2>Ajouter l'élément Dimanche à la fin du tableau</h2>";
array_push($jours, "Dimanche");
var_dump($jours);
//Afficher le tableau avec print_r
echo "<h2>Tabbleau affiché avec print_r</h2>";
print_r($jours);
//Ajout de deux autres éléments à la fin du tableau et l'afficher
echo "<h2>Ajouter 2 autres éléments à la fin du tableau</h2>";
$jours[] = "Napoledi";
$jours[] = "Joudredi";//ou : array_push($jours, "Napoledi", "Joudredi");
print_r($jours);
//Supprimer le dernier élément du tableau et l'afficher
echo "<h2>Supprimer le dernier élément du tableau</h2>";
array_pop($jours);
print_r ($jours);
//Supprimer le dernier élément du tableau une seconde fois et l'afficher
echo "<h2>Supprimer le dernier élément du tableau une seconde fois</h2>";
array_pop($jours);
print_r ($jours);
//Supprimer le premier élément du tableau et l'afficher
echo "<h2>Supprimer le premier élément du tableau</h2>";
array_shift($jours);
print_r ($jours);
//Ajouter un ou plusieurs éléments au début du tableau et l'afficher
echo "<h2>Ajouter un  ou plusieurs éléments au début du tableau</h2>";
array_unshift($jours, "napoledi", "Lundi");
print_r ($jours);
//array_splice
echo "<h2>Array_splice</h2>";
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
var_dump($input);
?>