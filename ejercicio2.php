<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

		function SeRepiten($tab1,$tab2){

			echo "Los iguales y sus posiciones son: ";

			for($i = 0; $i < count($tab1); $i++){

				if($tab1[$i] == $tab2[$i]){
					echo $tab1[$i]." en la posición ".$i." | ";
				}
			}

		}

		$t1 = array(4,6,7,8,4,5,6,8);
		$t2 = array(42,62,7,8,4,5,6,8);

		SeRepiten($t1,$t2);

    }
?>
