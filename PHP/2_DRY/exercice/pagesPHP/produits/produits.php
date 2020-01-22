<?php include ('../../config/variablesPHP/variables.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <?php include head; ?>
<body>
    <!-- Navbar -->
    <?php include navbar; ?>

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Our Products</h3>
        <br>
        <?php
            include produits;
            include produits;
            include produits;
        ?>
    </div>
    <!-- Footer -->
    <?php include footer; ?>
</body>
</html>