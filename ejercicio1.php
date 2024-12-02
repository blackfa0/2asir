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

	function Convertir($v) {
		
		$mat = array(
			array(0,0,0,0,0),
			array(0,0,0,0,0),
			array(0,0,0,0,0)
		);
		$cont1=0;
		$cont2=0;
		
		for($i=0;$i<count($v);$i++){
			if($cont1 == 5){
				$cont2++;
				$cont1=0;
			}
			$mat[$cont2][$cont1]=$v[$i];
			$cont1++;
			
		}	
		
		return $mat;
	}

	function ConvertirInversa($v) {
		
		$mat = array(
			array(0,0,0,0,0),
			array(0,0,0,0,0),
			array(0,0,0,0,0)
		);
		$cont1=0;
		$cont2=0;
		
		for($i=count($v)-1;$i>=0;$i--){
			if($cont1 == 5){
				$cont2++;
				$cont1=0;
			}
			$mat[$cont2][$cont1]=$v[$i];
			$cont1++;
			
		}	
		
		return $mat;
	}

	function Visualizar($r){
		
		for($k = 0; $k < count($r); $k++){
			for($l = 0; $l < count($r[$k]); $l++){
				echo $r[$k][$l]." ";
			}
			echo "<br>";
		}	
		
	}

        $vec = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
        
        $matriz = Convertir($vec);
        $matrizinversa = ConvertirInversa($vec);
        Visualizar($matriz);
        Visualizar($matrizinversa);
    }
?>
