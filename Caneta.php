<?php 

class Caneta {
    protected string $modelo;

    protected float $ponta;

     public function getModelo(){
        print($this->modelo);
     }
     public function setModelo($modelo){
        $this->modelo = $modelo;
     }
     public function getPonta(){
        print($this->ponta);
     }
     public function setPonta($ponta){
        $this->ponta = $ponta;
     }
}