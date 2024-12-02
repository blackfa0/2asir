<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$numeros = array_map('intval', explode(",", $_POST["numeros"]));
$mayor = max($numeros);
$menor = min($numeros);
$media = array_sum($numeros) / count($numeros);
echo "Mayor: $mayor<br>Menor: $menor<br>Media: $media";
}
?>
<form method="post">
Introduce 5 números separados por coma: <input type="text" name="numeros" required>
<button type="submit">Calcular</button>
</form>
