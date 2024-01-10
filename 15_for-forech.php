<?php

// Estrutura de repetição

for ($contador = 0; $contador <= 10; $contador++){
    echo "$contador <br>";

}

echo '<hr>';

for ($contador = 0; $contador <=10; $contador++ ){
    echo " 8 x $contador = ".($contador * 8) .'<br>';
}

echo "<br>";


// foreach é usando para percorrer arrays 

$cores = array("vermelho","verde","azul","amarelho");

foreach($cores as $indice => $valor){
    echo "$indice - $valor <br>";
    
}