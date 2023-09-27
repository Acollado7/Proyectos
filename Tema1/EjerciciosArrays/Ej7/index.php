<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
     $v["MD"]= "Madrid";
     $v["BAR"]= "Barcelona";
     $v["LD"]="Londres";
     $v["NY"]= "New York";
     $v["LA"]="Los Angeles";
     $v["CG"]="Chicago";
 
     foreach ($v as $identf => $valor) {
        echo "<p>El indice del array que contiene como valor ".$valor." es ".$identf."</p>";
    }

    ?>
    
</body>
</html>