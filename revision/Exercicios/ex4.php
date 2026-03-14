<?php

$n1 = 1;
$n2 = 5;
$n3 = 30;

if($n1 > $n2 && $n1 > $n3){
    echo ($n1. " É o maior numero");
}elseif($n2 > $n1 && $n2 > $n3){
    echo ($n2. " É o maior numero");
}else echo ($n3. " É o maior numero");