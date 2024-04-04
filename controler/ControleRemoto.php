<?php 

require_once 'controlador.php';

class ControleRemoto implements Controlador{
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    public function __construct()
    {
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;
    }

    private function getVolume(){
        return $this -> volume;
    }
    private function getLigado(){
        return $this -> ligado;
    }
    private function getTocando(){
        return $this -> tocando;
    }
    private function setVolume($v){
        $this -> volume = $v;
    }
    private function setLigado($v){
        $this -> ligado = $v;
    }
    private function setTocando($v){
        $this -> tocando = $v;
    }
    
    public function ligar(){
        $this -> setLigado(true);
    }
    public function disligar(){
        $this -> setLigado(false);
    }
    public function abrirMenu(){
        echo "<br>Está ligado?: ";
        print ($this -> getLigado())?"Sim":"Não";
        echo "<br>Está tocando?: ";
        print ($this -> getTocando())?"Sim":"Não";
        print "<br>Volume: ";
        for($i = 0; $i <= $this -> getVolume() - 10; $i+=10){
            echo "◙";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "Fechando menu";
    }
    public function maisVolume(){
        if($this -> getLigado()){
            $this -> setVolume($this -> getVolume() + 2);
        }
        
    }
    public function menosValume(){
        if($this -> getLigado()){
            $this -> setVolume($this -> getVolume() -2);
        }
    }
    public function ligarMudo(){
        if($this -> getLigado() && $this -> getVolume() > 0){
            $this -> setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this -> getLigado() && $this -> getVolume() == 0){
            $this -> setVolume(30);
        }
    }
    public function play(){
        if(!($this -> getTocando()) && $this -> getLigado()){
            $this -> setTocando(true);
        }
    }
    public function pause(){
        if(($this -> getTocando()) && $this -> getLigado()){
            $this -> setTocando(false);
        }
    }

}