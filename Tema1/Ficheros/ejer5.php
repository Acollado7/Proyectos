<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 5</title>
    <meta charset="UTF-8" />
    <style>
        table {
            width: 90%;
            margin: 0 auto;
            text-align: center;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Ejercicio 5</h1>

    <?php
    @$fd = fopen("http://dwese.icarosproject.com/PHP/datos_ficheros.txt", "r");
    if (!$fd) {
        die("<p>No se ha podido abrir la fuente de los datos</p>");
    }

    echo "<table>";
    echo    "<caption>PIB per cápita de los paises de la Unión Europea</caption>";

    $fila = fgets($fd);

    $datos_fila = explode("\t", $fila);

    $n_columns = count($datos_fila);

    echo "<tr>";
    for ($i = 0; $i < $n_columns; $i++) {
        echo "<th>" . $datos_fila[$i] . "</th>";
    }
    echo "</tr>";

    while ($fila = fgets($fd)) {

        $datos_fila = explode("\t", $fila);
        echo "<tr>";
        echo "<th>" . $datos_fila[0] . "</th>";
        for ($i = 1; $i < $n_columns; $i++) {
            if (isset($datos_fila[$i])) {
                echo "<td>" . $datos_fila[$i] . "</td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($fd);
    ?>
</body>
</html>
