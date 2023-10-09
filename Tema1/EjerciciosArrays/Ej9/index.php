<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
    
    $lenguajeCliente = array("LC1"=>"Lenguaje cliente 1","LC2"=>"Lenguaje cliente 2","LC3"=>"Lenguaje cliente 3");
    $lenguajeServidor = array("LS1"=>"Lenguaje Servidor 1","LS2"=>"Lenguaje servidor 2","LS3"=>"Lenguaje servidor 3");
    
    $lenguajes = $lenguajeCliente + $lenguajeServidor;
    echo "<table>";
    echo "<tr><th>Lenguajes: </th></tr>";
    foreach ($lenguajes as $leng => $de) 
        echo "<tr><td>$de</td></tr>";

        echo "</table>";
       
    ?>
</body>
</html>