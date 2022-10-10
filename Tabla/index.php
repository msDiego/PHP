<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
    <link Shref="style.css">
</head>

<body>

    <style>

        table{
            border-collapse: collapse;
            margin: auto;
        }

        td, th {
            border: solid 2px;
            margin: auto;
            padding: 8px;
            background-color: #FFFBDE;
        }

        h2{
            text-align: center;
        }
        
    </style>

    <h2>Tabla de multiplicar creada con PHP </h2>

    <style>
        <?php include 'style.css'; ?>
    </style>
    <?php

    define('multiplicador', 10);
    define('multiplicando', 10);


    $output = '<table><thread><tr><th>*</th>';
    for ($i = 0; $i <= multiplicador; $i++) {
        $output .= "<th>$i</th>";
    }

    $output .= '</tr></thread><tbody>';

    for ($j = 0; $j <= multiplicando; $j++) {
        $output .= "<tr><th>$j</th>";
        for ($z = 0; $z <= multiplicador; $z++) {
            $output .= '<td align="center">' . $j * $z . '</td>';
        }

        $output .= "</tr>";
    }

    $output .= "</tbody></table>";

    echo $output;


    ?>
</body>

</html>