<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<?php

    $meses ["Enero"] =9;
    $meses ["Febrero"] =12;
    $meses ["Marzo"] =0;
    $meses ["Abril"] =17;

    foreach ($meses as $indice => $valor) {
        if ($valor != 0) {
            echo "<p> Meses en los que  se han visto peliculas: ".$indice."</p>";
        }
    }
?>
    
</body>
</html>