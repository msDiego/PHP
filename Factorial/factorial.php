<body>

    <form>
        <label for="number">Número:</label>
        <label for="numero"></label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Calcular:">

    </form>

    <?php

    $number = $_GET['numero'];

    if(($number > 0)){
        calcular($number);
    }

    elseif ($number == null){
        echo '<p> Solo admite números enteros positivos mayores que 0 </p>';
    }
    else{
        echo '<p style="color: red"> Has introducido un número incorrecto! </p>';
    }

    function calcular($number): void {

        $resultado = 1;
        for ($i = $number; $i > 0; $i--){
            $resultado = $resultado * $i;
        }

        echo '<p> El factorial de ' . $number . ' es: ' . $resultado . '.';
    }
        
    ?>
</body>

