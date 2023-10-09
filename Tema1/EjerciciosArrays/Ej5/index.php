<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    
<?php

    $datos["nombre"] = "Pedro Torres";
    $datos["direccion"] = "C/Mayor,37";
    $datos["telefono"] = 123456789;

    foreach ($datos as $dato => $value) {
        echo "<p> ".$dato." : ".$value."</p>";
    }

?>
</body>
</html>