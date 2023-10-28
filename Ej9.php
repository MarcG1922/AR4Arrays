<?php

$datos = [1, 15, 39, 75, 92];
$diferencia = 53;
$pares = [];

for ($i = 0; $i < count($datos); $i++) {
    for ($j = $i + 1; $j < count($datos); $j++) {
        if (abs($datos[$i] - $datos[$j]) == $diferencia) {
            $pares[] = [$datos[$i], $datos[$j]];
        }
    }
}

if (!empty($pares)) {
    echo "Pares con diferencia de $diferencia:<br>";
    foreach ($pares as $par) {
        echo "($par[0], $par[1])<br>";
    }
} else {
    echo "No se encontraron pares con una diferencia de $diferencia.";
}

?>