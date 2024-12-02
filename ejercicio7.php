<?php
$matriz = [[1, 2, 3], [5, 7, 9], [3, 3, 4]];
$diferenciaMin = PHP_INT_MAX;
$filaMinima = [];
foreach ($matriz as $fila) {
$diferencia = max($fila) - min($fila);
if ($diferencia < $diferenciaMin) {
$diferenciaMin = $diferencia;
$filaMinima = $fila;
}
}
echo "Fila con menor diferencia: " . implode(", ", $filaMinima);
?>
