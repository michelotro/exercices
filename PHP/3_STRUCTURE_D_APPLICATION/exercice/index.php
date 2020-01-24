    <?php 
        include ("config/variables.php"); 
        $page = $_GET["page"];
        // echo $page;
        include (routes);
        ?>

<!DOCTYPE html>
<html lang="fr">
    
    <?php include (head); ?>
    
    <body>
        <!-- Navbar -->
        <?php 
        
        include (navbar); 
        
        include ($tabRoutes[$page]);
        // echo $tabRoutes[$page];
        // switch ($page) {
        //     case "Produits":
        //         include (bodyProduits);
        //         break;
            
        //     case "Blog":
        //         include (bodyBlog);
        //         break;

        //     case "Contact":
        //         include (bodyContact);
        //         break;
                
        //     case "About":
        //         include (bodyAbout);
        //         break;
            
        //     default:
        //         include (bodyAccueil);
        //         break;
        // }
    ?>
    <!-- Footer -->
    <?php include footer;?>

</body>

</html>