<?php

// Criando função

function exibirNome(){
        echo "Luana é fofinha";
}

exibirNome();

echo "<hr>";

function calculaMedia($nome,$n1,$n2,$n3,$n4){
    $media = ( $n1 + $n2 + $n3 + $n4 ) / 4;

    if($media >=7):
        echo "$nome aprovado";
    else:
        echo "$nome reprovado";
    endif;

}

calculaMedia("Heloisa",5,8,5,7);