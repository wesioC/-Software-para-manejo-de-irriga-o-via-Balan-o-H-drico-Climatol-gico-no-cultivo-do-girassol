<?php

class Valves{
    private $id;
    /* private $num; */   
    private $fk_plantation;
  

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

   /*  public function getNum(){
        return $this->num;
    }

    public function setNum($num){
        $this->num = $num;
    } */

    public function getFkPlantation(){
        return $this->fk_plantation;
    }

    public function setFkPlantation($fk_plantation){
        $this->fk_plantation = $fk_plantation;
    }
    
}
?>