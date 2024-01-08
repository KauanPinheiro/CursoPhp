<?php

/*
    Condicionais

    if
    else
    else  if 

*/

$n = 10;

if($n == 10){
    echo 'É igual a 10';
}elseif($n <=9){
    echo 'É menor ou igual a 9';
}
else{
    echo "É diferente de 10";
}

echo'<hr>';
// Outra meneira simples de fazer uma condição 

$media = 6;

echo ($media >= 7) ? 'Aprovado' : 'Reprovado';


/*
    Condicionais 
    switch
    case

*/
echo'<hr>';

$cor = 'rosa';

switch($cor):
    case 'Vermelho':
        echo 'Sua cor preferida é Vermelho';
    break;

    case 'rosa':
        echo 'Sua cor preferida é Rosa';
    break;

    case 'Roxo':
        echo 'Eu amo roxo';
    break;
    
    default:
        echo 'Sua cor preferida não é vermelho,rosa ou roxo';

endswitch;