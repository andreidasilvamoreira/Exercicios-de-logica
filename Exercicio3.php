<?php
function StringInvertida($string)
{
    $stringInvertida = '';

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $stringInvertida .= $string[$i];
    }
    return $stringInvertida;
}

$string = 'Ola Mundo';
echo "string original: " . $string . "\n";
echo "string invertida: " . stringInvertida($string);