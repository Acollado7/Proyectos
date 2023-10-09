<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera prueba</title>
</head>

<body>
    <h1>Teoria elemental php <?php echo date("d-m-Y") ?></h1>

    <?php
    //Equivalente al sout de Java
    echo " <h1>Mi primera prueba </h1>";
    //Inicializacion de Variables
    define("PI", 3.1415); //definir una variable
    $a = 8;
    $b = 9;
    $c = $b + $a;
    echo "<p>El resultado de sumar A" . $a . "+ B" . $b . "es" . $c . "</p>";

    //bucle if/else
    if ($c < 3) {
        echo "<p>3 es mayor que " . $c . "</p>";
    } else if (3 == $c) {
        echo "<p>es igual que" . $c . "</p>";
    } else {
        echo "<p>es menor que" . $c . "</p>";
    }
    //bucle switch
    switch ($c) {
        case 1:
            $c = $a - $b;
            break;
        case 2:
            $c = $a / $b;
            break;
        case 3:
            $c = $a * PI;
            break;

        default:
            $c = $a + $b;
            break;
    }

    echo "<p>El resultado del switch es: " . $c . "</p>";
    /*
        //bucle for
        for ($i=0; $i < 8; $i++) 
        { 
            echo "<p>hola".($i+1)."</p>";
        }

        $i=0;
        //bucle while
        while ($i <= 8) 
        {
            echo "<p> hola".($i+1)."</p>";
            $i++;
        }
*/

    ?>
</body>

</html>