<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST["frase"];
    $palabra = $_POST["palabra"];
    $contiene = false;

    $fraseArr = explode(" ", $frase);
    foreach ($fraseArr as $p) {
        if ($p == $palabra) {
            $contiene = true;
            break;
        }
    }

    echo $contiene 
        ? "La frase contiene la palabra '$palabra'." 
        : "La frase no contiene la palabra '$palabra'.";
}
?>

<form method="post">
    Frase: <input type="text" name="frase" required><br>
    Palabra: <input type="text" name="palabra" required><br>
    <button type="submit">Verificar</button>
</form>
