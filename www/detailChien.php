<?php
//import database
require_once "database.php";
//création connexion
$database = new database();
//Récupérer ID via l'URL
$id= $_GET['id'];
//récupàration infos du chien
$monChien = $database->getDogById($id);
//effacer un chien par id
//$delDog = $database->delDogById($id);
?>

<html>
    <header>
        <meta hcharset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </header>
    <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Projet "Chiens"</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li><a href="listeChiens.php">Liste</a></li>
                        <li><a href="create-chien.php">Nouveau Chien</a></li>
                        <li><a href="update-chien.php">Mise à jour</a></li> 
                        <li><a href="create-master.php">Nouveau Maitre</a></li>   
                    </ul>
                </div>
        </nav>
    <body>
        <h1><b> <?php echo $monChien->getNom() ?> </b></h1>
        
        
        <h3><?php echo "<br>Race : " .$monChien->getRace(). "<br>Age: ".$monChien->getAge()."</h3>"
        ."<br><h2> Infos du maître </h2>"
        ."<h3><br>Nom du Maître : " .$monChien->getNomMaitre()."<br>N° Tel : ".$monChien->getTelephone(); ?></h3>
        <h4><?php echo "Supprimer/mettre à jour, Chien N° ".$monChien->getId(). " ?"?></h4>
        <a href="DeleteDog.php?id=<?php echo $monChien->getId() ;?>"> 
            <button class="favorite styled"
                type="button"> Effacer Chien
            </button>
        </a>
        <a href="update-chien.php?id=<?php echo $monChien->getId() ;?>"> 
            <button class="favorite styled"
                type="button"> Mettre à jour
            </button>
        </a>
        <br>
        <br>
        <a href="create-chien.php"> 
            <button class="favorite styled3"
                type="button"> Nouveau Chien
            </button>
        </a>
        <br><br>
        <a href="listeChiens.php"> 
            <button class="favorite styled2"
                type="button"> Retour à la liste
            </button>
        </a>

    </body>
</html>
