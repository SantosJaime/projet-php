<?php

Class Maitre{

    //Atributs specifiques du maitre
    private $id;
    private $nom; 
    private $telephone;

    //Constructeur par défaut

    //Fonctions
    public function __set($name, $value){}
    public function getId (){
        return $this->id;
    }
    public function getNom (){
        return $this->nom;
    }
    public function getTelephone (){
        return $this->telephone;
    }
}



?>