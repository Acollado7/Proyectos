<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicando arrays</title>
</head>
<body>
    <?php 

  /*  $nota[0] = 5;
    $nota[1] = 0;
    $nota[2] = 7;
    $nota[3] = 9;
    $nota[4] = 6;
    $nota[5] = 4; */

    $nota=array(5,9,6,5,8,7);

    echo "<h1>Recorrido de un array escalar con sus indices correlativos</h1>";
    for ($i=0; $i < count($nota) ; $i++) { 
        echo "<p>En la pocision : ".$i." tiene el valor ".$nota[$i]."</p>";
    }

   

    /* $valor[0] = 18;
    $valor[1] = "hoola";
    $valor[2] = true;
    $valor[3] = 3.4; */
    

  /*  $valor[] = 18;
    $valor[99] = "hoola";
    $valor[] = true;
    $valor[200] = 3.4;
    echo "<h1>Recorrido de un array escalar con sus indices no correlativos</h1>";

    foreach ($valor as $indice => $contenido ) {
        echo"<p>En la posicion ".$indice." tiene el valor ".$contenido."</p>";
    }*/
    

    $notas["Antonio"]["DWESE"] = 5;
    $notas["Antonio"]["DWEC"] = 7;
    $notas["Luis"]["DWESE"] = 9;
    $notas["Luis"]["DWEC"] = 6;
    $notas["Ana"]["DWESE"] = 8;
    $notas["Ana"]["DWEC"] = 5;
    $notas["Eloy"]["DWESE"] = 6;
    $notas["Eloy"]["DWEC"] = 8;
    

    echo "<h1>Notas de los Alumnos</h1>";
    foreach ($notas as $nombre => $asignaturas) {
        echo "<p>".$nombre."<ul>";
        foreach ($asignaturas as $nombreAsig => $valor) {
            echo"<li>".$nombreAsig. ": " .$valor. "</li>";
       }

        echo"</ul> </p>";
        
    }


    ?>
    
</body>
</html>