<?php

class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ".$this->idade." acabou de falar";
        //$this é usado para poder usar atributos e métodos dentro do escopo da classe
    }
}

$rodrigo = new Pessoa();
//var_dump($rodrigo); //detalha a variável
$rodrigo->nome = "Rodrigo S. de Oliveira";
$rodrigo->idade = 25;
$rodrigo->Falar();
?>