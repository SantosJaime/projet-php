<?php
//import database
require_once ("database.php");
//création connexion
$database = new database();
//récupàration liste des chiens
$listeChien = $database->getAllDogs();

?>

<html>
    <header>
        <link rel="stylesheet" href="style.css">
    </header>
    <body>
        <h1><u> Liste des Chiens </u></h1>
        <h3> Annuaire </h3>
        <ul>
            <?php foreach ($listeChien as $Chien){ ?>
                    <li><h2>
                    <a href="detailChien.php?id= <?php echo $Chien->getId() ;?>">
                    <?php echo "Le chien N° " . $Chien->getId() . " : "?> 
                    <?php echo $Chien->getNom() . " de race " . $Chien->getRace(); ?> </a>
                        
                    </li></h2>
            <?php } ?>
        </ul>
    </body>
</html>
