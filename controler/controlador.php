<?php 

interface Controlador {
    public function ligar();
    public function disligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosValume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}