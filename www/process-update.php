<?php
//PAGE INTERMEDIAIRE => QUE DU PHP
//import database
require_once ("database.php");
//création connexion
$database = new database();

//récupérer infos du formulaire avec $_POST
$id = $_POST["id"];
//$nom = $_POST["nom"];
//$age = $_POST['age'];
//$race = $_POST['race'];
//appeler la fonction updateDog en passant infos du formulaire
//function updateDog($id, $nom, $age, $race)
$updateDog = $database->updateDog($id,$_POST["nom"],$_POST['age'],$_POST['race']);

//Rediriger l'utilisateur vers la page de profil du chien
//header("Location: detailChien.php?id=$id");
header("Location: detailChien.php?id=$id");

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