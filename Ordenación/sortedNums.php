<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>Ordenacion</title>
    <script src="sortedNums.php"></script>

    <style>

        #main{
            display: flex;
            flex-direction: row;
        }

        #main>div{
            margin: 15px;
        }

    </style>

</head>

<body>

<div id="main">
    <div>
        <h1> Formulario para ordenar por inserción directa: </h1>
        <form action="sortedNums.php" method="POST">
            <label for="number1">Número 1:</label><br>
            <input type="number" id="number1" name="number1"><br>
            <label for="number2">Número 2:</label><br>
            <input type="number" id="number2" name="number2"><br>
            <label for="number3">Número 3:</label><br>
            <input type="number" id="number3" name="number3"><br>
            <label for="number4">Número 4:</label><br>
            <input type="number" id="number4" name="number4"><br>
            <label for="number5">Número 5:</label><br>
            <input type="number" id="number5" name="number5"><br>
            <label for="number6">Número 6:</label><br>
            <input type="number" id="number6" name="number6"><br>
            <label for="number7">Número 7:</label><br>
            <input type="number" id="number7" name="number7"><br>
            <label for="number8">Número 8:</label><br>
            <input type="number" id="number8" name="number8"><br>
            <label for="number9">Número 9:</label><br>
            <input type="number" id="number9" name="number9"><br>
            <label for="number10">Número 10:</label><br>
            <input type="number" id="number10" name="number10"><br><br>
            <input type="submit" value="Ordena!">
        </form>
    </div>
    <div>
        <h1> Formulario para ordenar por burbuja: </h1>
        <form action="sortedNums.php" method="POST">
            <label for="numero1">Número 1:</label><br>
            <input type="number" id="numero1" name="number1"><br>
            <label for="numero2">Número 2:</label><br>
            <input type="number" id="numero2" name="number2"><br>
            <label for="numero3">Número 3:</label><br>
            <input type="number" id="numero3" name="number3"><br>
            <label for="numero4">Número 4:</label><br>
            <input type="number" id="numero4" name="number4"><br>
            <label for="numero5">Número 5:</label><br>
            <input type="number" id="numero5" name="number5"><br>
            <label for="numero6">Número 6:</label><br>
            <input type="number" id="numero6" name="number6"><br>
            <label for="numero7">Número 7:</label><br>
            <input type="number" id="numero7" name="number7"><br>
            <label for="numero8">Número 8:</label><br>
            <input type="number" id="numero8" name="number8"><br>
            <label for="numero9">Número 9:</label><br>
            <input type="number" id="numero9" name="number9"><br>
            <label for="numero10">Número 10:</label><br>
            <input type="number" id="numero10" name="number10"><br><br>
            <input type="submit" value="Ordena!">
        </form>
    </div>
</div>

<br>
<h2>Este botón hará que introduzcas manualmente los valores</h2>
<form action="sortedNums.php" method="GET"></form>
<label for="opcion">Introduce con qué método quieres </label>
<select id="opcion" name="opcion">
    <option value="Burbuja">Burbuja</option>
    <option value="Inserción directa">Inserción directa</option>
</select>
<input type="submit" value="Ordenar">
</body>
</html>

<?php

$numeros = [
    $_POST['number1'],
    $_POST['number2'],
    $_POST['number3'],
    $_POST['number4'],
    $_POST['number5'],
    $_POST['number6'],
    $_POST['number7'],
    $_POST['number8'],
    $_POST['number9'],
    $_POST['number10'],
];

insercionDirecta($numeros);



if ($_GET["opcion"] == "burbuja"){
    valoresManualesBurbuja();
}
else{
    valoresManualesInsDirecta();
}

function insercionDirecta($arr): void
{

    $n = count($arr);

    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }

    $output = "";

    foreach ($arr as $valor){
        $output .= " " . $valor ;
    }

    echo '<p>Los numeros ordenados son los siguientes: </p>' . $output;
}

function burbuja ($arr) {

    for ($i = 0; $i < count($arr); $i++){
        for ($j = 0; $j < count($arr) - 1; $j++){
            if ($arr[$j] < $arr[$j + 1] ){
                $aux = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $aux;
            }

        }
    }

    $output = "";
    foreach ($arr as $valor){
        $output .= " " . $valor;
    }
    echo '<p>Los numeros ordenados son los siguientes: </p>' . $output;
}

function valoresManualesInsDirecta (){

    echo 'Introduce cuantos números quieres introducir: ';
    $numNumbers = (int)fgets(STDIN);

    $numbers = [];
    for ($i = 0; $i < $numNumbers; $i++) {
        echo 'Enter number ' . ($i + 1) . ': ';
        $numbers[] = (int)fgets(STDIN);
    }

    insercionDirecta($numbers);
}

function valoresManualesBurbuja (){

    echo 'Introduce cuantos números quieres introducir: ';
    $numNumbers = (int)fgets(STDIN);

    $numbers = [];
    for ($i = 0; $i < $numNumbers; $i++) {
        echo 'Enter number ' . ($i + 1) . ': ';
        $numbers[] = (int)fgets(STDIN);
    }

    burbuja($numbers);

}



