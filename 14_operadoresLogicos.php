<?php

// Operadores Lógicos
/*
    Nos permite fazer comparações entre expressões

                    e (&& - and)  Só funciona quando duas expressões são verdadeiras
                    ou (|| - or)  Só funcionar se uma das expressões são verdadeiras
                    ou exclusivo (xor) Só funcionar se uma das expressões são verdadeiras se os dois forem verdadeiros ele retonar falso 
                    negação (!)

*/

$idade = 25;
$nome = 'Luana';

if(($idade == 25) &&  ($nome == 'Luana')):
    echo 'É verdadeiro';
else:
    echo 'Não é verdadeiro';
endif;

echo '<hr>';


if(($idade == 25) || ($nome == 'Luana')):
    echo 'Está funcionando';
else:
    echo 'Não está funcionando';
endif;

echo '<hr>';


if(($idade == 25) xor ($nome == 'Luana')):
    echo 'Está funcionando';
else:
    echo 'Não está funcionando';
endif;

echo '<hr>';


if(!($idade == 25) && ($nome == 'Luana')):
    echo 'Está funcionando';
else:
    echo 'Não está funcionando';
endif;
