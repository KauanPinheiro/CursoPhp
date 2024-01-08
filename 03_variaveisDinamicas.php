<?php


// variaveis dinamicas

$bebida = "refrigerante";

$$bebida = "Guaraná";

// com um '$' atribuimos o primeiro valor
// com dois '$$' conseguimos adicionar mais um valor a primeria variavel e ultilizar ambas e etc...

echo $refrigerante;
echo "<br>";

$destino = "cidade";

$$destino = "São Paulo ";

echo $cidade ;
echo "<br>";

$comidas = "tipos";

$$comidas = "salgados";

$$$comidas = "doces";

echo $$$comidas;