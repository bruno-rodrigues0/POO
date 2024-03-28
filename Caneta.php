<?php 

class Caneta {
    public string $modelo;
    public string $cor;
    private float $ponta;
    protected int $carga;
    protected bool $tampada;

    public function rabiscar($frase){
        if($this -> tampada){
            $this -> destampar();
        }
        print($frase);
    }

    public function tampar(){
        $this -> tampada = true;
        print(json_encode($this -> tampada));
    }

    public function destampar(){
        $this -> tampada = false;
        print(json_encode($this -> tampada));
    }

    private function verModelo() {
        print($this -> modelo);
    }
}