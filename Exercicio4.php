<?php
function CalcFat($fatorial)
{
    if ($fatorial < 0) {

        return "fatorial é apenas para numeros positivos";
    }

    $resultado = 1;

    for ($i = $fatorial; $i > 1; $i--) {
        $resultado *= $i;
    }

    return $resultado;
}

$fatorial = 5;
echo "a fatorial do numero é: " . CalcFat($fatorial);
