<?php

function somar($a, $b){
    $soma = $a + $b;
    return $soma;
}

$resultado = somar(20, 30);
echo $resultado."<br>";
$resultado = somar(50, 40);
echo $resultado."<br>";
$resultado = somar(67, 69);
echo $resultado."<br>";


function boasVindas($nome) {
    echo "Bem vindo".$nome."<br>";
}

boasVindas("Thiago");