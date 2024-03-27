<?php 

class Caneta {
    public string $modelo;
    public string $cor;
    public float $ponta;
    public int $carga;
    public bool $tampada;

    function rabiscar(){
        if($this -> tampada){
            $this -> destampar();
        }
        print("Rabiscando...");
    }
    
    function tampar(){
        $this -> tampada = true;
        print(json_encode($this -> tampada));
    }

    function destampar(){
        $this -> tampada = false;
        print(json_encode($this -> tampada));
    }

    function verMOdelo() {
        print($this -> modelo);
    }
}