<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
     $v[]= "Madrid";
     $v[]= "Barcelona";
     $v[]="Londres";
     $v[]= "New York";
     $v[]="Los Angeles";
     $v[]="Chicago";
 
     foreach ($v as $identf => $valor) {
        echo "<p>La ciudad con el indice: ".$identf." tiene el nombre de ".$valor."</p>";
     }

    ?>
    
</body>
</html>