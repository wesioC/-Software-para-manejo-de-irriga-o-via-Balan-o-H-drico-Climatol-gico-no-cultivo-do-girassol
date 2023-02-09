<?php

class Plantation{
    private $id;
    private $nome;   
    private $lat;
    private $lon;
  

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getLat(){
        return $this->lat;
    }

    public function setLat($lat){
        $this->lat = $lat;
    }
    
    public function getLon(){
        return $this->lon;
    }

    public function setLon($lon){
        $this->lon = $lon;
    }
    
}
?>