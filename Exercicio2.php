<?php
function CalcMedia($array)
{
    $soma = 0;
    $quantidade = 0;

    foreach ($array as $numero) {
        $soma += $numero;
        $quantidade++;
    }

    if ($quantidade) {
        $media = $soma / $quantidade;

        return $media;
    }
}

$array = [98, 78, 67, 100, 100];
echo "a media dos numeros é: " . CalcMedia($array);