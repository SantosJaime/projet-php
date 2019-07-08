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

    
        
        <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        
        </head>
       

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Projet "Chiens"</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="listeChiens.php">Liste</a></li>
                        <li><a href="create-chien.php">Nouveau Chien</a></li>   
                    </ul>
                </div>
        </nav>
        
    

    <body>

        <ul>
            <li><a class="active" href="listeChiens.php">Liste</a></li>
            <li><a href="create-chien.php">Nouveau Chien</a></li>
           
        </ul>
    
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
