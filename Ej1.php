<?php

$orden = [1,2,3,4, 5,];
print_r($orden);
echo "<br>";
$tam = count($orden);
$max = $tam - 1;

while ($max >= 0){
    echo $orden[$max], " - ";
    $max--;
}

?>