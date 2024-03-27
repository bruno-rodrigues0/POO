<?php 

class Caneta {
    public string $modelo;
    public string $cor;
    public float $ponta;
    public int $carga;
    public bool $tampada;

    function rabiscar($frase){
        if($this -> tampada){
            $this -> destampar();
        }
        print($frase);
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