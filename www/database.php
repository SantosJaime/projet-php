<?php
Class Database {
    private $connexion;

    public function __construct(){
 
        $PARAM_hote="mariadb";//chemin vers le serveur
        $PARAM_port="3306";//port de connexion DB
        $PARAM_nom_bd="AnnuaireToutou";// Nom DB
        $PARAM_utilisateur="adminToutou";//nom utilisateur connexion
        $PARAM_mot_de_passe="Annu@ireT0ut0u";//mot de passe connexion

        try{
            $this->connexion = new PDO(
                "mysql:dbname=" .$PARAM_nom_bd,";host=" .$PARAM_hote,
                    $PARAM_utilisateur,
                    $PARAM_mot_passe );
        }catch(Exception $monException){
            echo "Erreur : ".$monException->getMessage()."<br />";
            echo "N° : ".$monException->getCode();
        }

    }

    public function $getConnexion(){
        return $this->connexion;
    }
}



?>