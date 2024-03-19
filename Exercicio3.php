<?php
function StringInvertida($string)
{
    return strrev($string);
}
$PrincipalString = "Meu nome nao e Andrei";
$stringInvertida = StringInvertida($PrincipalString);
echo "string original: " . $PrincipalString . "\n";
echo "string invertida: " . $stringInvertida;
