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


/*$monChien = $database->getDogById($id);
        echo "<h4> Infos du chien </h4>"
        ."<br>Nom du Chien : " .$monChien->getNom()."<br>Race : " .$monChien->getRace(). "<br>Age: ".$monChien->getAge()
        ."<br> <h4> Infos du maître </h4>"
        ."<br>Nom du Maître : " .$monChien->getNomMaitre()."<br>N° Tel : ".$monChien->getTelephone();*/

//$deleteDog = $database->delDogById(7);

//Appel fonction update
//$id, $nom, $age, $race
/*$resultat = $database->updateDog(111, "tutu", 5, "chihuahua");
if($resultat == true){
    echo "le chien a été bien mis à jour";
}else{
    echo" Problème, Impossible de mettre le chien à jour";
}*/


$allMasters = $database->getAllMasters();
    echo "<ul>";
        foreach ($allMasters as $Maitre){
            echo "<li>";
            echo "Le Maître ". $Maitre->masterNom() . "Possède l'id N° ". $Maitre->masterId();
            echo "</li>";
        }
    echo "</ul>";

    
?>