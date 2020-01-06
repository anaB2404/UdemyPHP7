<?php

    class Carro{

        private $modelo;
        private $motor;
        private $ano;

        public function getModelo(){

            return $this->modelo;

        }

        public function setModelo($modelo){
            
            $this->modelo = $modelo;

        }

        public function getMotor():float{

            return $this->motor;

        }

        public function setMotor($motor){

            $this->motor = $motor;

        }

        public function getAno():int{

            return $this->ano;

        }

        public function setAno($ano){

            $this->ano = $ano;

        }

        public function exibirCarro(){
            
            return array(
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );

        }
    }

    $dodge = new Carro();
    $dodge->setModelo("Dodge amoo");
    $dodge->setMotor("3.5");
    $dodge->setAno("2020");
    var_dump($dodge->exibirCarro());


?>