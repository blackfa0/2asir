<?php
$tabla = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q',
'V', 'H', 'L', 'C', 'K', 'E'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$dni = intval($_POST["dni"]);
$letra = $tabla[$dni % 23];
echo "El DNI es: $dni$letra";
}
?>
<form method="post">
