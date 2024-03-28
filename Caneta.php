<?php 

class  Caneta{

    public $modelo;
    private $ponta;

    public function __construct($model, $point){
        $this->modelo = $model ?? "Nao informado";
        $this->ponta = $point ?? "Nao informado";
    }
    
    public function getModelo(){
        return $this ->  modelo;
    }
    public function setModelo($modelo){
        $this ->  modelo = $modelo;
    }
    public function getPonta(){
        return $this ->  ponta;
    }
    public function setPonta($ponta){
        $this ->  modelo = $ponta;
    }

    
}