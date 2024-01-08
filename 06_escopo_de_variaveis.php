<?php

// escopo de variaveis é o contexto onde ela foi definida

$nome = "Heloisa bringuel";
$a = 1;
$b = 2;
$c = 3;

function exibirNome(){
    //escopo global
    global $nome;
    echo $nome;
}

exibirNome();
echo "<hr>";

////////////////

/* ESCOPO LOCAL
function exibirCidade(){
    $cidade = "São paulo";
}
exibirCidade();
echo $cidade
*/


// ESCOPO GLOBAL DE MANEIRA ALTERNARDA
function soma(){
    echo $GLOBALS ['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();