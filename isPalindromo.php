<?php
echo isPalindromo("oio");

function isPalindromo($string)
{
    $stringInvertida = stringInvertida($string);
    if ($stringInvertida == $string) {
        return "é um palindromo";
    }

    return "nao é um palindromo";
}

function stringInvertida($string)
{
    $stringInvertida = '';

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $stringInvertida .= $string[$i];
    }
    return $stringInvertida;
}
