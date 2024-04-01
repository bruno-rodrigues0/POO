<?php

    class Conta{
        public int $numConta;
        protected string $tipo;
        private string $dono;
        private float $saldo;
        private bool $status;
        private static int $count = 0;
        public function __construct($tipo, $dono){
            $this -> setNumConta(Conta::$count);
            $this -> setTipo($tipo);
            $this -> setDono($dono);
            $this -> setStatus(false);
            $this -> saldo = 0.00;
            Conta::$count++; 
        }

        public function abrirConta(){
            if($this -> getStatus() == false 
                && $this -> getTipo() == "CC"){

                $this -> setStatus(true);
                $this -> setSaldo(50);

            } else if($this -> getStatus() == false
                && $this -> getTipo() == "CP") {

                $this -> setStatus(true);
                $this -> setSaldo(150);

            }
        }

        public function fecharConta(){
            if($this -> getStatus() == true 
                && $this -> getSaldo() == 0)
            {
                $this -> setStatus(false);
            } else {
                print("Não foi possivel fechar sua conta. Verifique seu saldo.");
            }
        }

        public function depositar($value){
            if($this -> getStatus() == true){
                $this -> setSaldo($value);
            } else {
                print("Conta fechada!");
            }
        }

        public function sacar($value){
            if($this -> getStatus() == true 
                && $this -> getSaldo() > $value)
            {
                $this -> setSaldo(-$value);
            }   
        }

        public function pagarMensal(){
            if($this -> getStatus() == true
            && $this -> getTipo() == "CC"){
                $this -> setSaldo(-12);
            } else if ($this -> getStatus() == true
            && $this -> getTipo() == "CP"){
                $this -> setSaldo(-20);
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
        private function setNumConta($counter){
            $this -> numConta = $counter + 1;
        }
        private function setTipo($tipo){
            $this -> tipo = $tipo;
        }
        private function setSaldo($value){
            $this -> saldo += $value;
        }
        private function setStatus($status){
            $this -> status = $status;
        }
 
    }