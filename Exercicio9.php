<?php
function calcRaio($raio)
{
    if ($raio) {
        $diametro = $raio * 2;
        return $diametro;
    }
}
$raio = 6;
$diametro = calcRaio($raio);
echo "o diametro é: " . $diametro;
