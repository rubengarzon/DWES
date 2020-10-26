<?php

$arrayEnteros = [2, 7, 3];

$cuadrado = array_map (function ($numero){
    return $numero*$numero;
}, $arrayEnteros);

print_r($cuadrado);