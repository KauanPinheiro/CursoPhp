<?php

//Arrays

$carros = array('BMW','Veloster','Hilux');

// Insirindo valores a arrays 

$carros[] = 'Amarok';
$carros[10] = 'Camaro';


echo $carros[10];   
echo '<br>';

// Outra forma de criar uma array

$clientes = ['Luana rodrigues','Heloisa bringuel','Guilherme paixão'];
echo $clientes[1];
echo '<br>';

// Count {exibir a quantidade de elementos de uma array}

echo count($carros);
echo count($clientes);
echo '<br>';

// Foreach {A meneira de percorre a array}
foreach($carros as $valor){
    echo $valor.'<br>';
}
foreach($clientes as $valor){
    echo $valor.'<br>';
}

// Arrays associativos é quando os elementos são stings

$pessoa = array('nome' => 'Rodrigo','idade' => 23, 'altura' => 1.76);
//atribuindo valor
$pessoa['cidade'] = 'São paulo';

echo $pessoa['altura']; 
echo'<br>';

foreach($pessoa as $indice => $valor){
    echo $indice.':'.$valor.'<br>';
}

// Arrays multidimisionais

$times = array(
                'Cariocas'=> array('campeao'=>'vasco', 'vice'=>'Flamengo', 'terceiro'=>'botafogo'),
                'Paulistas'=> array('primeiro'=>'Santos', 'segundo'=>'São paulo', 'terceiro'=>'Palmeiras'),
                'Baianos'=> array('1'=>'Bahia','2'=>'Vitoria', '3'=>'alagoas')
);

echo '<br>';
echo '<hr>';

foreach($times['Cariocas'] as $indice => $valor){
    echo $indice.':'.$valor.'<br>';
}

echo '<br>';
echo '<hr>';

foreach($times['Paulistas'] as $indice => $valor){
    echo $indice.':'.$valor.'<br>';
}

echo '<br>';
echo '<hr>';

foreach($times['Baianos'] as $indice => $valor){
    echo $indice.':'.$valor.'<br>';
}
