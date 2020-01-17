<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h1>Afficher et concatainer des variables</h1>";

        $hello = "Hello"; 
        //Afficher la variable $hello//
        $world = "World";
        //j'affiche la variable $hello dans une div avec echo
        echo "<div>$hello</div>";
        //j'affiche le type de la variable avec gettype(+ le nom de ma variable)
        echo gettype($hello);
        //je crée une nouvelle variable pour afficher les 2 premières
        //j'utilise le point pour concatainer
        $affiche = $hello.", ".$world." !";
        echo "<h2>$affiche</h2>";

        //------------------------Variables Numériques-------------------------------

        echo "<h1>Variables numériques</h1>";    
        $montantHt = 15.2;
        $tva = 5.5/100;
        $montantTva = $montantHt*$tva;
        $montantTtc = $montantHt+$montantTva;
        echo "Montant H.T : ".$montantHt;
        echo "<br/>Montant TVA : ".$montantTva;
        echo "<br/>Montant TTC : ".$montantTtc;
        echo "<br/>Montant TTC bis: ".($montantHt+$montantTva);
    ?>
</body>
</html>