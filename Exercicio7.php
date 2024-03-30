<?php
echo contarVogal('ola');

function contarVogal($palavra)
{
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $quant = strlen($palavra);
    $vogaisletras = 0;

    for ($i = 0; $i < $quant; $i++) {
        $letra = strtolower($palavra[$i]);
        // strtolower é pra deixar as letras minusculas
        if (in_array($letra, $vogais)) {
            $vogaisletras++;
            // in array serve pra verificar se algum valor ta presente no array
        }
    }

    return $vogaisletras;
}
