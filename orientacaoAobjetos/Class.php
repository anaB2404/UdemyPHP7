<?php

    class Pessoa {     // criação da classe
        
        public $nome; // criando um atributo 

        public function falar(){ // metodo a função dentro da classe 

            return "o meu nome é: ".$this->nome; 

            /* a variavel $this-> é uma variavel reseravada para acessar os atributos
             e variaveis tanto publicas como privadas e protegidas, ou seja é a representação
             da classe já instanciada*/

        }
        
    }

    $ana = new Pessoa(); // objeto
    $ana->nome = "Ana Beatriz"; 
    echo $ana->falar();
    


?>