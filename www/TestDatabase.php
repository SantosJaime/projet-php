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
//inséeréer nouveau maitre et récupérer ID
//$idMaitre = $database->insertMaster('Bob', '0798767654');
//echo "<p> Un nouveau maitre a été inseré avec le N° : $idMaitre </p>";

//$database->insertDog();
//inséeréer nouveau chien et récupérer ID
//$idChien = $database->insertDog('Chipie',12,'Yorkshire',1);
//echo "<p> Un nouveau chien a été inseré avec le N° : $idChien </p>";

$listeChien = $database->getAllDogs();
    echo "<ul>";
        foreach ($listeChien as $Chien){
            echo "<li>";
            echo "Le chien N° " . $Chien->getId() . " : " . $Chien->getNom() . " de race " . $Chien->getRace();
            echo "</li>";
        }
    echo "</ul>";


$monChien = $database->getDogById(3);
        echo "<h4> Infos du chien </h4>"."<br>Nom du Chien : " .$monChien->getNom()."<br>Race : " .$monChien->getRace(). "<br>Age: ".$monChien->getAge().
        "<br> <h4> Infos du maître </h4>".
        "<br>Nom du Maître : " .$monChien->getNomMaitre();//"<br>Téléphone : ". $monchien->getTelephone();

       
/*$toutou = $database->getAllChiens ();
    echo "<ul>";
    foreach ($toutou as $Chien){
        echo "<li> " . $Chien->getId() . $Chien->getNom(). $Chien->getRace() ."</li>";
    }
    echo "</ul>";

$iench = $database->getChien ();
        echo "<h2>".$iench->getId().$iench->getNom().$iench->getRace() ."</h2>";*/
    
?>