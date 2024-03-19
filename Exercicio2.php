<?php
function CalcMedia($array)
{

    $soma = array_sum($array);

    $quantidade = count($array);

    $media = $soma / $quantidade;

    return $media;
}

$array = [5, 5, 5, 5, 5];
echo "a media dos numeros é:" . CalcMedia($array);