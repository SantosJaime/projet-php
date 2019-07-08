<?php
//PAGE INTERMEDIAIRE => QUE DU PHP
//import database
require_once ("database.php");
//création connexion
$database = new database();

//récupérer infos du formulaire avec $_POST

//importer et instancier database

//appeler la fonction insertDog en passant infos du formulaire
$insertDog = $database->insertDog($_POST["nom"],$_POST['age'],$_POST['race'],$_POST['idMaitre']);
//récupérer le nouvel id du chien créé


//Rediriger l'utilisateur vers la page de profil du chien
header("Location: detailChien.php?id=$insertDog");
//effacer un chien par id
//$resultat = $database->updateDog($id, $nom, $age, $race);
//if($resultat == true){
//redirection vers page liste si OK
//url de redirection
//header('Location: listeChiens.php');
//}else{
//en cas d'échec
    //echo "Suppresiion impossible";
//}
?>