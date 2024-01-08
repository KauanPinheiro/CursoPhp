<?php

// Funções array

/*

is_array ($array) = verificar se uma determinada variável é uma array
in_array ($valor,$array) = verificar se um determinado valor existe em alguma posição do array
array_keys ($array) = retorna um novo array com as chaves do array passado como parãmetros
array_values ($array) = retonar um novo array com os valores do array passado como parãmetros
array_merge ($array1,$array2) = agrega o conteudo dos dois array
array_pop ($array) = exclui a ultima posição do array 
array_shift ($array) = exclui a primeira posição do array 
array_unishift ($arr, 'valor') = adiciona um ou mais elementos no início do array
array_push ($array, 'valor', 'valor') = adiciona um ou mais elementos no final de uma array
array_combine ($keys,$values) =mescla os dois arrays passados
array_sum() = calcula a soma dos elemenstos da array
explore("/", "20/01/2001") = transforma strings em arrays
implore("-",$arr) = transforma array em strings

*/

$nomes = array('Luana','Heloisa','Ruthi','Caren');

$exemplo = array('Primo'=>'Laura', 'Vizinha'=>'Regiane', 'Colega'=>'Veronica', 'Chefe'=>'Roberta');

if(is_array($nomes)):
    echo 'É uma array';
else:
    echo 'Não é uma array';
endif;

echo "<hr>";
echo "<br>";


if(in_array('Heloisa',$nomes)):
    echo "Este valor existe";
else:
    echo "Este valor não existe";
endif;

echo "<hr>";
echo "<br>";

$keys = array_keys($exemplo); 
print_r($keys);

echo "<hr>";
echo "<br>";

$values = array_values($exemplo);
print_r($values);

echo "<hr>";
echo "<br>";

$carros = array('gol','uno','camaro');
$motos = array('pop100','50cc','cb1000');

$veiculos = array_merge($carros,$motos);
print_r($veiculos);

echo "<hr>";
echo "<br>";

array_pop($carros);
print_r($carros);

echo "<hr>";
echo "<br>";

array_shift($motos);
print_r($motos);

echo "<hr>";
echo "<br>";

$frutas = array('uva','laranja','maça');
print_r($frutas);
array_unshift($frutas,'morango','manga','acerola');
print_r($frutas);

echo "<hr>";
echo "<br>";

array_unshift($frutas,'morango','manga','acerola');
print_r($frutas);

echo "<hr>";
echo "<br>";

$keys = array('campeão','vice','terceiro');
$values = array('vasco','flamengo','botafogo');

$times = array_combine($keys,$values);
print_r($times);    

echo "<hr>";
echo "<br>";

$soma = array(5,6,10,8);
echo array_sum($soma);

$data = '07/01/2024';

$novaData = explode('/',$data);
print_r($novaData);

echo "<hr>";
echo "<br>";

$teste1 = array('Rodrigo','Carlos','Julia','Guilherme');

$result = implode(',',$teste1);

echo $result;






