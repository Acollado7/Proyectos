<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 6</title>
    <meta charset="UTF-8" />
    <style>
        table {
            width: 90%;
            margin: 0 auto;
            text-align: center;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Ejercicio 6</h1>

    <form method="post">
        <label for="country">Selecciona un país:</label>
        <select name="country" id="country">
            <?php
            $fd = fopen("http://dwese.icarosproject.com/PHP/datos_ficheros.txt", "r");
            if (!$fd) {
                die("<p>No se ha podido abrir la fuente de los datos</p>");
            }

            $header = fgets($fd); 
            while ($row = fgets($fd)) {
                $data = explode("\t", $row);
                $initials = $data[0];
                echo "<option value='$initials'>$initials</option>";
            }

            fclose($fd);
            ?>
        </select>
        <input type="submit" value="Mostrar PIB">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $selectedCountry = $_POST['country'];

        $fd = fopen("http://dwese.icarosproject.com/PHP/datos_ficheros.txt", "r");
        if (!$fd) {
            die("<p>No se ha podido abrir la fuente de los datos</p>");
        }

        $found = false;
        echo "<table>";
        echo    "<caption>PIB per cápita de $selectedCountry</caption>";

        $header = fgets($fd);
        $columns = explode("\t", $header);
        $n_columns = count($columns);

        echo "<tr>";
        for ($i = 0; $i < $n_columns; $i++) {
            echo "<th>" . $columns[$i] . "</th>";
        }
        echo "</tr>";

        while ($row = fgets($fd)) {
            $data = explode("\t", $row);
            if ($data[0] === $selectedCountry) {
                $found = true;
                echo "<tr>";
                for ($i = 0; $i < $n_columns; $i++) {
                    echo "<td>" . $data[$i] . "</td>";
                }
                echo "</tr>";
            }
        }

        echo "</table>";

        if (!$found) {
            echo "<p>No se encontraron datos para $selectedCountry</p>";
        }

        fclose($fd);
    }
    ?>
</body>

</html>
