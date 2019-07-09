<?php
//import fichier database
require_once ("database.php");
//instanciation de la class database
$database= new Database();
//récupération liste des maitres
$maitres = $database->getAllMasters();
//var_dump($maitres);
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
                        <li><a href="listeChiens.php">Liste</a></li>
                        <li><a href="create-chien.php">Nouveau Chien</a></li>
                        <li><a href="update-chien.php">Mise à jour</a></li> 
                        <li class="active"><a href="create-master.php">Nouveau Maitre</a></li>   
                    </ul>
                </div>
        </nav>
    <body>

        

        <h2> Création de nouveau maitre </h2>
        <form action="process-create.php" method="post">
            <label for="nomMaitre">Nom </label>
            <input type="text" id="nomMaitre" name="nom" placeholder ="Dupont">
            <label for="telMaitre">Téléphone </label>
            <input type="number" id="telMaitre" name="age" placeholder ="1">
           
                    
            </select>

            <input type="submit">
        </form>       

    </body>
</html>