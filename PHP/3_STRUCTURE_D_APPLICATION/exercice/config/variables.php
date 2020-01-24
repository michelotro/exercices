<?php
$racine = $_SERVER["DOCUMENT_ROOT"]."/exercices/PHP/3_STRUCTURE_D_APPLICATION/exercice";
$requeteHTTP = ("http://localhost")."/exercices/PHP/3_STRUCTURE_D_APPLICATION/exercice";
define ("images", $requeteHTTP."/assets/img/");
define ("title", "Pierre, Paul et Jacquot");
define ("head", $racine."/template/parts/head.php");
define ("imgCircle", "class= img-circle");
define ("navbar", $racine."/template/parts/navBar.php");
define ("lienIndex", $requeteHTTP."/index.php?page=Accueil");
define ("lienProduits", $requeteHTTP."/index.php?page=Produits");
define ("produits", $racine."/template/parts/nosProduits.php");
define ("lienBlog", $requeteHTTP."/index.php?page=Blog");
define ("article", $racine."/template/parts/articleBlog.php");
define ("lienContact", $requeteHTTP."/index.php?page=Contact");
define ("lienAbout", $requeteHTTP."/index.php?page=About");
define ("footer", $racine."/template/parts/footer.php");
define ("fonctions", $requeteHTTP."/fonctions/");
define ("classes", $requeteHTTP."/classes/");
define ("bodyAccueil", $racine."/template/pagesPHP/accueil.php");
define ("bodyProduits", $racine."/template/pagesPHP/produits.php");
define ("bodyBlog", $racine."/template/pagesPHP/blog.php");
define ("bodyContact", $racine."/template/pagesPHP/contact.php");
define ("bodyAbout", $racine."/template/pagesPHP/about.php");
define ("routes", $racine."/config/routes.php");
?>