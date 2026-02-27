<?php

$i = 1;
$j = 0;

while($i < 10){
    while($j < 10){
        $resultado = $i * $j;
        echo $i ."x".$j."=".$resultado."<br>";
        $j += 1;
    }

    $j += 1;

    echo"--------<br>";
    $i += 1;
}