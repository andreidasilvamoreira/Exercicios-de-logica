<?php

function ordenarArrayCrescente($array)
{
 
    $quantidade = count($array);

    for ($i = 0; $i < $quantidade - 1; $i++)
    {
        for ($j = 0; $j < $quantidade - $i - 1; $j++)
        {
            if ($array[$j] > $array[$j + 1])
            {

                $variavelTemporaria = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $variavelTemporaria;
            }
        }
    }

    return $array;
}

$numeros = [6, 3, 7, 5, 0];

$ordenado = ordenarArrayCrescente($numeros);