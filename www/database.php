<?php
Class Database {
    private $connexion;

    public function __construct(){
 
        $PARAM_hote="mariadb";// chemin vers le serveur
        $PARAM_port="3306";// port de connexion DB
        $PARAM_nom_bd="AnnuaireToutou";// Nom DB
        $PARAM_utilisateur="adminToutou";//nom utilisateur connexion
        $PARAM_mot_passe="Annu@ireT0ut0u";//mot de passe connexion

        try{
            $con = 'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd;
            $this->connexion = new PDO($con,$PARAM_utilisateur, $PARAM_mot_passe);
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage()."<br />";
            echo "N° : ".$e->getCode();
        }

    }

    public function getConnexion(){
        return $this->connexion;
    }
  
    public function insertMaster($nom, $telephone){// Fonction pour insérer nouveau maitre
        
        // Préparation de la requête
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Maitres (nom, telephone) VALUES (:nom,:telephone)"
        );
     
        // Exécution de la requête
        $pdoStatement->execute(array(
            "nom" => $nom,
            "telephone" => $telephone)
        );
        // test de la requête
        //var_dump($pdoStatement->errorInfo());

        //Récupération ID crée
        $id = $this->connexion->lastInsertId();
        return $id;
    }   

    public function insertDog($nom, $age, $race, $idMaitre){//Fonction pour insérer nouveau chien

        // Je prépare la requête
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Chiens (nom, age, race, id_maitre) VALUES (:nomChien,:ageChien,:raceChien,:idMaitre)"
        );
        
        // J'exécute la requête
        $pdoStatement->execute(array(
            "nomChien" => $nom,
            "ageChien" => $age,
            "raceChien" => $race,
            "idMaitre" => $idMaitre)
        );
        
        // test de la requête
        //var_dump($pdoStatement->errorInfo());

        //Récupération ID crée
        $id = $this->connexion->lastInsertId();
        return $id;
    } 

    /*public function getChiens($id){
        $listDog = $connexion->prepare(
            "SELECT FROM Chiens WHERE id = :id"
        );
        $listDog->execute(array(
            "id" => $id)
        );
        $Toutou = $listDog->fetchObject ("Chien");
        return $Toutou;

    }*/

    public function getAllChiens(){
        $pdoStatement = $this->connexion->prepare("SELECT c.id, c.nom, c.age, c.race, m.nom as nomMaitre, m.telephone
        FROM Chiens c
        INNER JOIN Maitres m
        ON c.id_maitre = m.id");

        $pdoStatement->execute();

        $listeChien = $pdoStatement->fetchAll (PDO::FETCH_CLASS, 'Chien'); 

        //var_dump($pdoStatement->errorInfo());
        //echo "resultat : " .$listeChien;
        return $listeChien;
    }

    public function getChien(){
        $pdostatement = $this->connexion->prepare("SELECT c.id, c.nom, c.age, c.race, m.nom as nomMaitre, m.telephone
        FROM Chiens c
        INNER JOIN Maitres m
        ON c.id_maitre = m.id
        WHERE c.id = 4");

        $pdostatement->execute();

        $Clebs = $pdostatement->fetchObject ('Chien');

        var_dump($pdostatement->errorInfo());
        return $Clebs;


    }

    

    
}// fin DB

?>