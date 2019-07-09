<?php
//import fichier database
require_once ("database.php");
//instanciation de la class database
$database= new Database();
//Récupérer ID via l'URL
$id= $_GET['id'];
//récupération liste des maitres
//$maitres = $database->getAllMasters();
//récupàration infos du chien
$monChien = $database->getDogById($id);
//var_dump($monChien);
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
                        <li class="active"><a href="update-chien.php">Mise à jour</a></li> 
                        <li><a href="create-master.php">Nouveau Maitre</a></li>
                    </ul>
                </div>
        </nav>
    <body>

        <h2>Mettre à jour le chien </h2>
        <form action="process-update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $monChien->getId(); ?>">
            <label for="nomChien">Nom </label>
            <input type="text" name="nom" value="<?php echo $monChien->getNom(); ?>" required>
            <label for="ageChien">Age </label>
            <input type="number" name="age" value="<?php echo $monChien->getAge(); ?>" required>
            <label for="raceChien">Race</label>
            <input type="text" name="race" value="<?php echo $monChien->getRace(); ?>" required>

            <input type="submit" value="Valider">
        </form>    
            
    </body>
</html>