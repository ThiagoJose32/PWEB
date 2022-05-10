<?php


class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }
}


class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando grau em 321";
    }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
//var_dump($carro);
$carro->ligarLimpador();

echo "<br>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azuk";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
//var_dump($moto);
$moto->darGrau();
$carro











?>