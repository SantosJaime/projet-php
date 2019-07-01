<?php
Class Database {
    private $connexion;

    public function __construct(){
 
        $PARAM_hote="mariadb";//chemin vers le serveur
        $PARAM_port="3306";//port de connexion DB
        $PARAM_nom_bd="AnnuaireToutou";// Nom DB
        $PARAM_utilisateur="adminToutou";//nom utilisateur connexion
        $PARAM_mot_passe="Annu@ireT0ut0u";//mot de passe connexion

        try{
            $this->connexion = new PDO(
                "mysql:host=" .$PARAM_hote .";dbnmame=" .$PARAM_nom_bd,
                    $PARAM_utilisateur,
                    $PARAM_mot_passe);
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage()."<br />";
            echo "N° : ".$e->getCode();
        }

    }

    public function getConnexion(){
        return $this->connexion;
    }
}



?>