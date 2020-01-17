<?php
//Les éléments du tableau sont des paires clés/valeurs, Lundi est la clé, PHP est la valeur
$activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");
//afficher la valeur d'un élément du tableau enutilisant sa clé
echo "<h2>Afficher la valeur d'un élément du tableau par sa clé</h2>";
echo $activites['Lundi']."<br/>";
echo $activites['Vendredi'];
//Afficher le tableau $activites avec var_dump
echo "<h2>Afficher le tableau 'activites' avec var_dump</h2>";
var_dump($activites); 
//Modifier une valeur par sa clé
echo "<h2>Modifier une valeur par sa clé</h2>";
$activites['Dimanche'] = "Il faut bosser quand même !!";
var_dump($activites) ;
//deux dimensions
$pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");
$preferences = array();

//Fusionner plusieurs tabeaux en un seul 
echo "<h2>Fusionner plusieurs tabeaux en un seul</h2>";
$preferences1 = array_merge($pierre, $paul, $jacques);
var_dump($preferences1);

//Créer un tableau contenant 3 sous-tableaux et leur affecter une clé
echo "<h2>Créer un tableau contenant 3 sous-tableaux et leur affecter une clé</h2>";
$preferences2 = array("pierre"=>$pierre,"paul"=>$paul,"jacques"=>$jacques);
var_dump($preferences2);

//Compter le nombre de valeurs présentes dans les 3 tableaux d'après le tableau fusionné
echo "<h2>Compter le nombre de valeurs présentes dans les 3 tableaux d'après le tableau fusionné</h2>";
$compterValeurs = array_count_values($preferences1);
var_dump($compterValeurs);
?>