<?php

//  Funções para strings
/*
    strtoupper      (converte uma string em MAISCULA)
    strtolower      (converte uma string em minuscula)
    substr          (retorna um parte de uma string)
    str_pad         (complementa uma outra string com alguns caracteres)
    str_repeat      (repetir uma string)
    strlen          (informa o tamanho da string)
    str_replace     (serve para substituir uma palavra em um texto)
    strpos          (retorna a posição de uma palavra em um texto)

*/

// strtoupper      (converte uma string em MAISCULA)
$teste1 = "laura";
$novoNome = strtoupper($teste1);
echo "$novoNome <hr>";

// strtolower      (converte uma string em minuscula)
$test2 = "LAURA";
$novoNome2 = strtolower($test2);
echo "$novoNome2 <hr>";  

// substr          (retorna um parte de uma string)
$mensagem = "Estou aprendendo php";
echo substr($mensagem,5);
echo "<hr>";
//str_pad         (complementa uma outra string com alguns caracteres)
$objeto = "mouse";
$novoObjeto = str_pad($objeto,7,"*");
echo $novoObjeto;
echo "<hr>";

//str_repeat      (repetir uma string)

$string = str_repeat("Parábens ",5);
echo " $string ";
echo "<hr>";

//strlen          (informa o tamanho da string)
$Bola = "De pano";
echo strlen($Bola);
echo "<hr>";

//str_replace     (serve para substituir uma palavra em um texto)
$texto = "A seleção brasileira é muito ruim porém ultimamente está fraca";
$novoTexto = str_replace("ruim","boa",$texto);
echo "$novoTexto";
echo "<hr>";

//strpos          (retorna a posição de uma palavra em um texto)
echo strpos($novoTexto,"está");






