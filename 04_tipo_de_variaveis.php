<?php

//***************ESCALARES*****************//

// Tipo : Sting (texto)

$nome = "Olá";

var_dump($nome);

if(is_string($nome)):
		echo "É uma string";
else:
		echo "Não é uma string";
endif;
echo "<hr>";
echo "<br>";

//Tipo: int (inteiro)

$idade = 27;

var_dump($idade);

if(is_int($idade)):
	echo "É inteiro";
else:
	echo "Não é inteiro";
endif;
echo "<hr>";
echo "<br>";

//Tipo: float (numeros quebrados)

$altura = 1.86;

var_dump($altura);

if(is_float($altura)):
	echo "É um float";
else:
	echo "Não é um float";
endif;	
echo "<hr>";
echo "<br>";
//Tipo boolean (Verdadeiro ou falso)

$adim = true;

var_dump($adim);

if(is_bool($adim)):
	echo "É um booleano";
else:
	echo "Não é booleano";
endif;
echo "<hr>";
echo "<br>";

//***********COMPOSTOS****************//

//Tipo: array (vetor)

$carros = array("Gol","Uno","Camaro",12,20.6,true);

var_dump($carros);
if(is_array($carros)):
	echo "É uma array";
else:
	echo "Não é uma array";
endif;
echo "<hr>";
echo "<br>";

//Tipo: object (objeto)
class cliente {
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

$cliente = new cliente();
$cliente->atribuirNome("Luana");
var_dump($cliente);
if(is_object($cliente)):
	echo "É um objeto";
else:
	echo "Não é objeto";
endif;
echo "<hr";
echo "<br>";


//************ESPECIAIS************//

//Tipo: Null

$bairro = null;
var_dump($bairro);
echo "<hr";
echo "<br>";
