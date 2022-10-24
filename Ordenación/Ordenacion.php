<?php

    $numeros = array(2,7,3,9,10,1,4,8,12,5);

    echo '<h2> Vamos a ordenar la siguiente array usando métodos burbuja y quicksort</h2>';

    $arreglo = "";
    foreach ($numeros as $valor){
        $arreglo .= " " . $valor ;
    }

    echo '<h3>'.$arreglo.'</h3>';

    burbuja($numeros); // METODO BURBUJAETODO BURBUJA

    echo '<p> Usando método quicksort: </p>';

    $output = "";

    $result = array(quickSort($numeros));

     foreach ( $result as $value){
         $output .= " " . $value;
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

        if (count($numeros) < 2) {
            return $numeros;
        }
        $left = array();
        $right = array();

        reset($numeros);
        $pivote_key = key($numeros);
        $pivote = array_shift($numeros);

        foreach ($numeros as $k => $v){
            if ($v < $pivote){
                $left[$k] = $v;
            }
            else{
                $right[$k] = $v;
            }
        }
        return array_merge(quickSort($left), array($pivote_key => $pivote), quickSort($right));
     }







