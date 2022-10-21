<?php

    $numeros = array(2,7,3,9,10,1,4,8,12,5);

    echo '<h2> Vamos a ordenar la siguiente array usando métodos burbuja y quicksort</h2>';

    $arreglo = "";
    foreach ($numeros as $valor){
        $arreglo .= " " . $valor ;
    }

    echo '<h3>'.$arreglo.'</h3>';

    burbuja($numeros);

    echo '<p> Usando método quicksort: </p>';

    $output = "";
     foreach (quickSort($numeros) as $valor){
        $output .= " " . $valor;
    }

    function burbuja ($numeros): void {

        for ($i = 0; $i < count($numeros); $i++){
            for ($j = 0; $j < count($numeros) - 1; $j++){
                if ($numeros[$j] < $numeros[$j + 1] ){
                    $aux = $numeros[$j];
                    $numeros[$j] = $numeros[$j + 1];
                    $numeros[$j + 1] = $aux;
                }

            }
        }

        $output = "";
        foreach ($numeros as $valor){
            $output .= " " . $valor ;
        }
        echo '<p>Usando método burbuja: </p>' . $output;
    }

    function quickSort ($numeros){

        if (count($numeros) <= 1) {
            return $numeros;
        } else {

            $pivot = count($numeros) - 1;
            $i = 0;
            $j = $pivot - 1;
            $left = array();
            $right = array();

            for (; $i < $j; $i++) {
                for (; $j > $i; $j--) {

                    if ($numeros[$i] < $pivot) {
                        $left[] = $numeros[$i];
                    } else {
                        $right[] = $numeros[$i];
                    }

                    if ($numeros[$j] < $pivot) {
                        $left[] = $numeros[$j];
                    } else {
                        $right[] = $numeros[$j];
                    }

                }

            }
            var_dump($left, array($pivot), $right);
        }
    }






