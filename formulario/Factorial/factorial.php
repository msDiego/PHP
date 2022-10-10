<!DOCTYPE html>
<html>

<body>

    <form>
        <label for="number">Número:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Calcular:">

    </form>

    <?php

use function PHPSTORM_META\type;

    $number = $_GET['numero'];

    if(($number > 0)){
        calcular($number);
    }
    else{
        echo '<p> Solo admite números enteros positivos mayores que 0';
    }

    function calcular($number){

        $resultado = 1;
        for ($i = $number; $i > 0; $i--){
            $resultado = $resultado * $i;
        }

        echo '<p> El factorial de ' . $number . ' es: ' . $resultado . '.';
    }
        
    ?>
</body>

</html>