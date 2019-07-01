<?php

//import fichiers pour test
require_once ("database.php");


echo "<h1> Test de la database :  </h1>";

$database = new Database();//instancie novelle connexion DB

//var_dump($database); // affiche contenu de la variable (debug)
if($database->getconnexion() ==null){
    echo "<p> La connexion a échoué</p>";
}else{
    echo"<p> Connexion réussie</p>";
}


?>