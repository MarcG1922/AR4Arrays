<?php

$paroimpar = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$tam = count($paroimpar);
$par = [];
$impar = [];
$pospar = 0;
$posimpar = 0;

foreach ($paroimpar as $elem){
    if ($elem % 2 == 0){
            $par[$pospar] = $elem;
            $pospar++;

    } else {
        $impar[$posimpar] = $elem;
        $posimpar++;

    }
}
echo "El array de pares: ";
var_dump($par);
echo "<br>";
echo "El array de impares: ";
var_dump($impar);
?>