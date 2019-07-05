<?php
//import database
require_once ("database.php");
//création connexion
$database = new database();
//Récupérer ID via l'URL
$id= $_GET['id'];
//effacer un chien par id
$resultat = $database->delDogById($id);
//if($resultat == true){
//redirection vers page liste si OK
//url de redirection
header('Location: listeChiens.php');
//}else{
//en cas d'échec
    //echo "Suppresiion impossible";
//}
?>

