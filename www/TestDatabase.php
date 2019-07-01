<?php

Class Database {
    private $connexion;

    public function __construct(){
 

        $PARAM_hote="mariadb";
        $PARAM_port="3306";
        $PARAM_nom_bd="AnnuaireToutou";
        $PARAM_utilisateur="adminToutou";
        $PARAM_mot_de_passe="Annu@ireT0ut0u";

        try{
            $this->connexion = new PDO(
                "mysql:dbname="  .$PARAM_nom_bd,  ";host=".$PARAM_hote,

                $PARAM_utilisateur,
                $PARAM_mot_passe);
        }
        catch(Exception $e){
            echo "Erreur : " .$e->getMessage() ."<br />";
            echo "N° : " .$e->getCode();
        }

    }


?>