<?php

function removerElementosRepetidos($array)
{
    $array = array_unique($array);
    return $array;
}
$arrayAleatorio = [3, 5, 3, 6, 6, 7, 9];
$arrayCorrigido = removerElementosRepetidos($arrayAleatorio);
var_dump($arrayCorrigido);
