<?php
function removerElementosRepetidos($arrayAleatorio)
{
    $array = [];

    for ($i = 0; $i < count($arrayAleatorio); $i++) {
        $elementoAtual = $arrayAleatorio[$i];
        $foiVisto = false;

        for ($j = 0; $j < $i; $j++) {
            if ($arrayAleatorio[$j] === $elementoAtual) {;
                $foiVisto = true;
                break;
            }
        }

        if ($foiVisto == false) {
            $array[] = $elementoAtual;
        }
    }

    return $array;
}

$arrayAleatorio = [3, 5, 3, 6, 6, 7, 9];
$arrayCorrigido = removerElementosRepetidos($arrayAleatorio);
print_r($arrayCorrigido);
