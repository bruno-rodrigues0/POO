<?php 

class  Caneta{

    public $modelo;
    private $ponta;

    public function Caneta($model, $point) : void{
        $this->modelo = $model ?? "Nao informado";
        $this->ponta = $point ?? "Nao informado";
    }
    
    public function getModelo() : string{
        return $this ->  modelo;
    }
    public function setModelo($modelo) : void{
        $this ->  modelo = $modelo;
    }
    public function getPonta() : string{
        return $this ->  ponta;
    }
    public function setPonta($ponta) : void{
        $this ->  modelo = $ponta;
    }

    
}