<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
     $v[]= "Pedro";
     $v[]= "Ismael";
     $v[]="Sonia";
     $v[]= "Clara";
     $v[]="Susana";
     $v[]="Alfonso";
     $v[]="Teresa";

        echo "<ul>";
        echo "<p> EL numero de elementos es: ".count($v)."</p>";
    for ($i=0; $i < count($v) ; $i++) { 
        echo "<li>".$v[$i]." </li>";
    }

    ?>
    
</body>
</html>