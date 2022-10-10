<!DOCTYPE html>
<html>

<body>

    <form>
        <label for="fname">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="lname">Teléfono:</label><br>
        <input type="number" id="tlf" name="tlf"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php

    $agenda = array( $_GET['nombre'] ?? null , $_GET['tlf'] ?? null );

    array_push($agenda[0] , $_GET['nombre']);
    
    if (($_GET['nombre'] != NULL) && ($_GET['tlf'] != NULL)){
        agenda($agenda);
    }
    

    function agenda($agenda){

        $output = "";

        for ($i = 0; $i <= count($agenda[0]); $i++){
            var_dump($agenda[0]);
            var_dump($i);
            $output .= '<p>Nombre: ' . $agenda[0][$i] . ' | Teléfono: ' . $agenda[1][$i] . '</p>';
        }
        
        echo $output;

    }


    ?>

</body>

</html>