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

        function MejorNota($m){

            $cont=0;
            $max=-1;

            for($i = 0; $i < count($m); $i++){
                foreach ($m[$i] as $key => $value){
                    $cont+=$value;
                } 
                if($max < $cont){
                    $max = $cont;
                    $fila = $i;
                }

                $cont = 0;
            }

            $fila++;
            echo "Las mejores notas las tiene en la evaluacion ".$fila."<br>";
        }

        function TodasSuspensas($m){

            $suspensas = array(0,0,0,0);
            $asignaturas = array('Matematicas','Lengua','Ingles','Informatica');
            $cont=0;

            for($i = 0; $i < count($m); $i++){
                foreach ($m[$i] as $key => $value){
                    if($value < 5){
                        $suspensas[$cont]++;
                    }
                    $cont++;
                } 
    
                $cont = 0;
            }

            for($i = 0; $i < count($suspensas); $i++){
                if($suspensas[$i]==3){
                    echo "La asignatura ".$asignaturas[$i]." tiene todas las evaluaciones suspensas <br>";
                }
            }
        }

        function MatrizEscalar($m){

            $escalar = array(
                        array(0,0,0),
                        array(0,0,0),
                        array(0,0,0),
                        array(0,0,0)
            );

            $j=0;

            for($i = 0; $i < count($m); $i++) {
                foreach ($m[$i] as $key => $value) {
                    $escalar[$j][$i] = $value;
                    $j++;
                }
                $j=0;
            }

            return $escalar;
        }

        function Visualizar($m){
            for($i = 0; $i < count($m); $i++) {
                for($j = 0; $j < count($m[$i]); $j++) {
                    echo $m[$i][$j].", ";
                }
                echo "<br>";
            }
        }

        $matriz = array(
            array(
                'Matematicas' => 6,
                'Lengua' => 4,
                'Ingles' => 1,
                'Informatica' => 7
            ),
            array(
                'Matematicas' => 8,
                'Lengua' => 4,
                'Ingles' => 4,
                'Informatica' => 8
            ),
            array(
                'Matematicas' => 10,
                'Lengua' => 3,
                'Ingles' => 2,
                'Informatica' => 7
            )
        );

        MejorNota($matriz);
        TodasSuspensas($matriz);
        Visualizar(MatrizEscalar($matriz));

    }
?>
