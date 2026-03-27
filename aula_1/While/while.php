<?php

$i = 1;


while($i < 10){
    $j = 1;
    while($j < 10){
        $resultado = $i * $j;
        echo $i ."x".$j."=".$resultado."<br>";
        $j += 1;
    }
    if($i == 5) break;

    $j += 1;

    echo"--------<br>";
    $i += 1;
}