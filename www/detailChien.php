<?php
//import database
require_once ("database.php");
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
        <link rel="stylesheet" href="style.css">
    </header>
    <body>
        <h1><b> <?php echo $monChien->getNom() ?> </b></h1>
        
        
        <h3><?php echo "<br>Race : " .$monChien->getRace(). "<br>Age: ".$monChien->getAge()."</h3>"
        ."<br><h2> Infos du maître </h2>"
        ."<h3><br>Nom du Maître : " .$monChien->getNomMaitre()."<br>N° Tel : ".$monChien->getTelephone(); ?></h3>
        <h4><?php echo "Supprimer Chien N° ".$monChien->getId(). " ?"?></h4>
        <a href="DeleteDog.php?id=<?php echo $monChien->getId() ;?>"> 
            <button class="favorite styled"
                type="button"> Effacer
            </button>
        </a>
        <br>
        <br>
        <a href="listeChiens.php"> 
            <button class="favorite styled2"
                type="button"> Retour à la liste
            </button>
        </a>

    </body>
</html>
