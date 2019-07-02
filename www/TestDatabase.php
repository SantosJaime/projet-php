<?php

// import fichiers pour test
require_once ("database.php");


echo "<h1> Test de la database :  </h1>";

$database = new Database();// instancie novelle connexion DB

//var_dump($database); // affiche contenu de la variable (debug)
if($database->getconnexion() == null){
    echo "<p> La connexion a échoué</p>";
}else{
    echo"<p> Connexion réussie</p>";
}

//$database->insertMaster();
// minséeréer nouveau maitre et récupérer ID
$idMaitre = $database->insertMaster('Bob', '0798767654');
echo "<p> Un nouveau maitre a été inseré avec le N° : $idMaitre </p>";

//$database->insertDog();
// minséeréer nouveau chien et récupérer ID
$idChien = $database->insertDog('Chipie',12,'Yorkshire',1);
echo "<p> Un nouveau chien a été inseré avec le N° : $idChien </p>";

?>