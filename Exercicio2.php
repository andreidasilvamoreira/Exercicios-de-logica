<?php
function CalcMedia($array)
{
    $soma = 0;
    $quantidade = 0;

    //cada vez que esse loop foreach executar ele vai ir adicionando numero na variavel $numero e depois vai mandar somado pra variavel $soma. e cada vez que esse loop ocorrer vai adicionar mais 1 pra $quantidade. ja que cada vez que executar é pra contar um numero do array.

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