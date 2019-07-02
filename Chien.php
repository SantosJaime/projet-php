<?php

Class Chiens{
    private $id;
    private $nom;
    private $age;
    private $race;

    public function __set($name, $value){}
    public function getId (){return $this->id;}
    public function getNom (){return $this->nom;}
    public function getAge (){return $this->age;}
    public function getRace (){return $this->race;}

}

?>