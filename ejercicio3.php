<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
    	<input type="number" name="n1">
    	<input type="number" name="n2">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

		function SonAmigos($a,$b){

			$contA = 0;
			$contB = 0;

			for($i = $a-1 ; $i > 0 ; $i--){
				if($a%$i == 0){$contA+=$i;}
			}
			for($j = $b-1 ; $j > 0 ; $j--){
				if($b%$j == 0){$contB+=$j;}
			}

			if($a==$contB && $b == $contA){
				return true;
			}else{
				return false;
			}

		}

		function Visualizar($r){
			if($r == true){
				echo "Son amigos";
			}
			else{
				echo "No son amigos";
			}
		}

		$n1 = $_POST['n1'];
		$n2= $_POST['n2'];
		Visualizar(SonAmigos($n1,$n2));

    }
?>
