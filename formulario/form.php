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

    if (($_GET['nombre'] != NULL) && ($_GET['tlf'] != NULL)){
        agenda($agenda);
    }
    
    function agenda($agenda){

        $output = "";

        $output .= '<p> Nombre: ' . $agenda[0] . ' | Teléfono: ' . $agenda[1] . '</p>';

        echo $output;

    }


    ?>

</body>

</html>