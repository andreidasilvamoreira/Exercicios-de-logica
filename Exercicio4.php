<?php
function CalcFat($fatorial)
{
    if ($fatorial <= 0) {

        return "fatorial é apenas para numeros positivos";
    }

    $resultado = 1;

    for ($i = $fatorial; $i > 1; $i--) {
        $resultado *= $i;
    }

    return $resultado;
}

$fatorial = 0;
$result = CalcFat($fatorial);
echo is_int($result) ? "a fatorial do numero é:" . $result : $result;
