<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php 
    
    function generarPares($num){
    for ($i=0; $i <2*$num ; $i+=2) { 
        $pares[]= $i;

    }
    return $pares;
    }

    define("Repeticiones",10);

    $pares = generarPares(Repeticiones);
    echo "<p>
    ";
    for ($i=0; $i < count($pares); $i++) { 
        echo $pares[$i]."<br>";
    }
    "
    </p>";

    ?>
    
</body>
</html>