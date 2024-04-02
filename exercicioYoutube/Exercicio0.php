<?php
function antecessorEsucessor($n)
{
    $antecessor = $n - 1;
    $sucessor = $n + 1;

    return array($antecessor, $sucessor);
}
$numero = 10;
$result = antecessorEsucessor($numero);
$antecessor = $result[0];
$sucessor = $result[1];
echo "o antecessor do numero $numero, é $antecessor, e o sucessor é $sucessor.";
