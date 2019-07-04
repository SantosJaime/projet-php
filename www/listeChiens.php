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
        <h1> Liste des Chiens </h1>
        <h2> Annuaire </h2>
        <ul>
            <?php foreach ($listeChien as $Chien){ ?>
                    <li>
                        <?php echo "Le chien N° " . $Chien->getId() . " : " . $Chien->getNom() . " de race " . $Chien->getRace(); ?>
                    </li>
            <?php } ?>
        </ul>
    </body>
</html>
