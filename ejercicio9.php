<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];

function sumaPosicionesPares($array) {
    $suma = 0;
    foreach ($array as $i => $val) {
        if ($i % 2 == 0) $suma += $val;
    }
    return $suma;
}

$suma1 = sumaPosicionesPares($array1);
$suma2 = sumaPosicionesPares($array2);

echo "Suma Array1: $suma1<br>";
echo "Suma Array2: $suma2<br>";

if ($suma1 > $suma2) {
    echo "La suma de Array1 es mayor.";
} elseif ($suma1 < $suma2) {
    echo "La suma de Array2 es mayor.";
} else {
    echo "Las sumas son iguales.";
}
?>
