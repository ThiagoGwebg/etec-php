<?php

$idade = 100;

if($idade <= 12){
    echo("Você é uma criança");
}elseif($idade >= 13 && $idade <= 17){
    echo("Você é um adolecente");
}elseif($idade >= 18 && $idade <= 59){
    echo("Vocé é um adulto");
}else echo("Vocé é um idoso");