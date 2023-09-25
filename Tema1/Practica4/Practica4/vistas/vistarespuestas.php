<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>

<body>
    <h1>Recogiendo los datos</h1>
    <?php

    echo "<p><strong>El nombre enviado ha sido: </Strong>" . $_POST["nombre"] . "</p>";
    echo "<p><strong>Ha nacido en : </Strong>" . $_POST["nacido"] . "</p>";

    if (isset($_POST["sexo"])) {
        echo "<p><strong>El sexo es: </Strong>" . $_POST["sexo"] . "</p>";
    } else {
        echo "<p><strong>Sexo: </Strong> No has puesto sexo</p>";
    }


    if (isset($_POST["aficiones"]) !="1" && $_POST["aficiones"] != "2"&& $_POST["aficiones"] != "3") {
        echo "<p><strong>No has seleccionado ninguna aficion</strong></p>";

    }else if(isset($_POST["deportes"]) == "1" && $_POST["lectura"] == "2" && $_POST["otros"] == "3"){
        echo "<p><strong> " . $_POST["deportes"] . "</Strong>     Deportes</p>";
        echo "<p><strong> " . $_POST["lectura"] . "</Strong>     Lectura </p>";
        echo "<p><strong>" . $_POST["otros"] . " </Strong>  Otros</p>";
    }else if (isset($_POST["deportes"]) == "1" && $_POST["lectura"] == "2" && $_POST["otros"] !="3") {
        echo "<p><strong> " . $_POST["deportes"] . "</Strong>     Deportes</p>";
        echo "<p><strong> " . $_POST["lectura"] . "</Strong>     Lectura </p>";
    }else if (isset($_POST["deportes"]) == "1" && $_POST["otros"] == "3" && $_POST["lectura"] !="2") {
        echo "<p><strong> " . $_POST["deportes"] . "</Strong>     Deportes</p>";
        echo "<p><strong>" . $_POST["otros"] . " </Strong>  Otros</p>";
    }else if (isset($_POST["lectura"]) == "2" && $_POST["otros"] == "3" && $_POST["deportes"] !="1") {
            
    }else if(isset($_POST["deportes"]) == "1") {
        echo "<p><strong> " . $_POST["deportes"] . "</Strong>     Deportes</p>";
    }else if (isset($_POST["lectura"]) == "2") {
        echo "<p><strong> " . $_POST["lectura"] . "</Strong>     Lectura </p>";
    }else if(isset($_POST["otros"]) == "3"){
        echo "<p><strong>" . $_POST["otros"] . " </Strong>  Otros</p>";
    }

     if (isset($_POST["comentarios"])== $_POST["comentarios"]) {
        echo "<p><strong>El comentario enviado ha sido: </Strong>" . $_POST["comentarios"] . "</p>";
     }else{
         echo "<p><strong>No has hecho ningun comentario</strong></p>";
     } 

    
    




  


    ?>
</body>

</html>
