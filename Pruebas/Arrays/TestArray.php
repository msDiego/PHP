<?php 

    $array1 = array(2,5,-1,"String");

    $array2 = array('altura'=> 185, 'edad' => 23, 'sexo' => "Masculino");

    foreach ($array1 as $valor){
        var_dump($valor);
    }

    foreach ($array2 as $clave => $valor){
        var_dump(($clave));
    }
