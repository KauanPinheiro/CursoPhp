<?php

// Superglobais 

/*
    $GLOBALS (É uma variavel que servem para acessar qualque variavel global)
    $_SERVER  (É usada para encontrar caminhos)
    $_REQUEST (É usada para coleta dados de formularios)
    $_POST     (É usada para coleta dados de formularios e envia atravez de url )
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION

*/


// $GLOBALS (É uma variavel que servem para acessar qualque variavel global)
$x = 10;
$y = 15;

function soma(){

    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";
// $_SERVER  (É usada para encontrar caminhos)

echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["SERVER_PORT"]."<br>";