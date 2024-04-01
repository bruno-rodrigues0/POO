<?php

    class Conta{
        public int $numConta;
        protected string $tipo;
        private string $dono;
        private float $saldo;
        private bool $status;
        private static int $count = 0;
        public function __construct($tipo, $dono){
            $this -> numConta = Conta::$count + 1;
            $this -> tipo = $tipo;
            $this -> dono = $dono;
            $this -> status = false;
            $this -> saldo = 0.00;
            Conta::$count++; 
        }

        public function abrirConta(){
            if($this -> status == false){
                $this -> status = true;
                $this -> saldo = 50.00;
            }
        }

        public function fecharConta(){
            if($this -> status == true 
                && $this -> saldo == 0)
            {
                $this -> status = false;
            } else {
                print("Não foi possivel fechar sua conta. Verifique seu saldo.");
            }
        }

        public function depositar($value){
            if($this -> status == true){
                $this -> saldo = $this -> saldo + $value;
            } else {
                print("Conta fechada!");
            }
        }

        public function sacar($value){
            if($this -> status == true 
                && $this -> saldo > $value)
            {
                $this -> saldo = $this -> saldo - $value;
            }   
        }

        public function pagarMensal(){
            if($this -> status == true){
                $this -> saldo = $this -> saldo - 12.00;
            }
        }

        public function getDono(){
            return $this -> dono;
        }
        public function getNumConta(){
            return $this -> numConta;
        }
        public function getSaldo(){
            return $this -> saldo;
        }
        public function getTipo(){
            return $this -> tipo;
        }
        public function getStatus(){
            return $this -> status;
        }

        private function setDono($dono){
            $this -> dono = $dono;
        }
        private function setNumConta($numConta){
            $this -> dono = $numConta;
        }
        private function setTipo($tipo){
            $this -> dono = $tipo;
        }
        private function setSaldo($saldo){
            $this -> dono = $saldo;
        }
        private function setStatus($status){
            $this -> dono = $status;
        }
 
    }