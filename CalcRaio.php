<?php
function calcRaio($raio)
{
    $diametro = $raio * 2;
    return $diametro;
}
$raio = 6;
$diametro = calcRaio($raio);
echo "o diametro é: " . $diametro;
