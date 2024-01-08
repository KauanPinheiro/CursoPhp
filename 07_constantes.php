<?php

//Constantes
// as constantes não podem alterar seu valor
// e sempre uma constantes  com valor definido tem que ser em letra MAISCULA 
// as constantes são globais 

define('NOME','Luana rodrigues');
define('IDADE',22);
define('ALTURA',1.50);
define('SOLTEIRA',true);
define('CARROS',['gol','uno','fucas']);


echo 'Meu nome é ' .NOME. ' tenho ' .IDADE. ' com'.ALTURA. ' de altura estou ';  
echo '<hr>';
echo CARROS[2];
var_dump(CARROS);
echo '<hr>';

function exibirNome(){
    echo CARROS[2];
}
exibirNome();



