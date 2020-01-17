<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loto</title>
</head>
<body>
    <h1>Loto</h1>
    
    <?php
    set_time_limit ( 180 );
        echo "<h2>Creer une fonction qui crée un tableau et le remplit de 1 à 49</h2>";
        
        function creerTableau($debut, $fin){
            $tableau = array();
            for ($i= $debut; $i <= $fin; $i++) {
                array_push($tableau,$i);
            };
            // var_dump($tableau);

        echo '<h2>extraire 5 nombres aléatoire de $tableau</h2>'; 

            $resultat = array();
//----------------renvoi 5 clés d'entrée du tableau "$tableau"
            // $resultat = array_rand($tableau, 5);
            // var_dump($resultat);

//----------------échange les clés par les valeurs et vice versa------------------------
            
            $resultat = array_rand(array_flip($tableau), 5);
            // var_dump($resultat);
        };
        creerTableau(1, 49);

        echo '<h2>Créer un tableau de 5 nombres aléatoire entre 1 et 49 avec une boucle FOR...</h2>'; 

        $resultat2 = array();
        for ($i=0; $i < 5 ; $i++) {
            array_push($resultat2, random_int(1, 49)); 
        }
        // var_dump($resultat2);

        echo '<h2>Créer un tableau de 5 nombres aléatoire entre 1 et 49 avec une boucle WHILE</h2>'; 

        $a =1;
        $resultat3= array();
        while ($a <= 5) {
            $a++;
            array_push($resultat3, random_int(1, 49));
        }
        // var_dump($resultat3);

        echo '<h2>Créer une fonction tirage qui renvoie un tableau de 5 nombres différents</h2>';

        function tirage(){
            $grille = array();
            for ($i=1; $i <=49 ; $i++) { 
                array_push($grille,$i);
            };
            
            $jouerNumero = array_rand(array_flip($grille), 5);
            // var_dump($jouerNumero);
            return $jouerNumero;
        }
        echo '<h2>Créer 10 tirages</h2>';
        
        $plusieursTirages = [];
        $tousMesTirages = [];
        $nbTirages = 10;
         for ($i=1; $i <= $nbTirages ; $i++) { 
            // tirage();
            // var_dump(tirage());
            array_push($plusieursTirages, tirage());
            $tousMesTirages = array_merge($tousMesTirages, tirage());
        }
        // var_dump($plusieursTirages);
        // var_dump($tousMesTirages);
        echo '<h2>Comparer les nombres sortis et les classer</h2>';
        $statistiques = array_count_values($tousMesTirages);
        arsort($statistiques);
        
        // var_dump($statistiques);

        echo '<h2>Comparer ma grille avec différents tirages</h2>';
        
        function genererTirage(){
            $maGrille = array(12, 29, 49, 17, 5);
            
            $tab = [];
            for ($i=1; $i < 50 ; $i++) { 
                array_push($tab, $i);
            } 
            // var_dump($tab);

            $resultatTirage = [];
            $resultatTirage = array_rand(array_flip($tab), 5);
            // var_dump($resultatTirage);
            $compare = [];
            $compare = array_diff($maGrille, $resultatTirage);
            // var_dump($compare);
            
            return empty($compare);
        }
        $count = 0;

        do {
            genererTirage();
            $count++;
        } 
        while (genererTirage() == false);
        echo "<h1>Vous avez décroché le gros lot !! en $count tirages</h1>";
        
        

        


        
    ?>
</body>
</html>