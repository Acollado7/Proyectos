


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
    
            echo "<p><strong>Nombre: </Strong>".$_POST["nombre"]."</p>";
            echo "<p><strong>Nacido en : </Strong>".$_POST["nacimiento"]."</p>";


            if(isset($_POST["aficiones"])){
                if(isset($_POST["deportes"])){
                    echo"<p><strong>Aficciones: ".$_POST["deportes"]."</Strong> Deportes: Si</p>";
                }else{
                    echo"<p><strong>Aficiones: </Strong> Deportes: No</p>";
                }
                if(isset($_POST["lectura"])){
                    echo"<p><strong>Aficciones: ".$_POST["lectura"]."</Strong> Lectura: Si</p>";
                }else{
                    echo"<p><strong>Aficiones: </Strong> Lectura: No</p>";
                }
                if(isset($_POST["otros"])){
                    echo"<p><strong>Aficciones:".$_POST["otros"]." </Strong> Otros: Si</p>";
                }else{
                    echo"<p><strong>Aficiones: </Strong> Otros: No</p>";
                }
            }else {
                echo"<p><strong>Aficiones: </Strong> No </p>";

            }
        
        if (isset($_POST["sexo"])) {
            echo "<p><strong>Sexo: </Strong>".$_POST["sexo"]."</p>";
            
        }else{
            echo"<p><strong>Sexo: </Strong> No has puesto sexo</p>";
        }
        



        echo "<p><strong>Comentarios: </Strong>".$_POST["comentarios"]."</p>";
        
    

        

        

        
    
    ?>
</body>
</html>

<?php  
