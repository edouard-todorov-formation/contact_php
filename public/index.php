<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Mon site</title>
</head>
<body>
    <!-- ici mon header -->
    <?php                                               // Instruction pour inject
        include "../includes/header.php";              // un fichier
    ?>                                               <!-- php -->
    <main>
        <?php                                          // Instruction pour inject
            include "../includes/formulaire.php";     // un fichier
        ?>                                          <!-- php -->
    </main>
    <!-- ici mon footer -->
         <?php                                       // Instruction pour inject  
        include "../includes/footer.php";           // un fichier
    ?>                                            <!-- php -->
</body>
</html>

<!-- faire un form htmm recup donnée et traiter et afficher en dessous
 utiliser session php -->