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


    if(!isset($_POST["aficiones"])){
        echo "<p> <Strong>No has seleccionado niguna aficion</Strong></p>";
    }else if(count($_POST["aficiones"])==1){
        echo "<p>La Aficion seleccionada ha sido: </p>" ;
        echo"<ol> <li>".$_POST["aficiones"][0]."</li></ol>";
    }else{
        echo "<p>Las Aficiones seleccionadas han sido: </p>" ;
        echo"<ol> ";
        for ($i=0; $i < count($_POST["aficiones"]); $i++) { 
            echo "<li>".$_POST["aficiones"][$i]."</li>";
        }
        echo "</ol>";
    }
     if (isset($_POST["comentarios"])== $_POST["comentarios"]) {
        echo "<p><strong>El comentario enviado ha sido: </Strong>" . $_POST["comentarios"] . "</p>";
     }else{
         echo "<p><strong>No has hecho ningun comentario</strong></p>";
     } 

    
    ?>
</body>

</html>