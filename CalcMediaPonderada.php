<?php
function calcMediaPond($notas, $pesos)
{
    $quantidadeNotas = count($notas);
    $somaTotalNotas = 0;
    $somaTotalPesos = 0;

    for ($i = 0; $i < $quantidadeNotas; $i++) {
        $somaTotalNotas += $notas[$i] * $pesos[$i];
        $somaTotalPesos += $pesos[$i];
    }

    $mediaPonderada = $somaTotalNotas / $somaTotalPesos;

    return $mediaPonderada;
}

$num = [5, 5, 5];
$pesos = [1, 2, 3];

$mediaPonderada = calcMediaPond($num, $pesos);
echo "A Media Ponderada é :" . $mediaPonderada;
