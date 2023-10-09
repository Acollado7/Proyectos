<?php
if(isset($_POST["enviar"])){
?>



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


            
                if(isset($_POST["deportes"])){
                    echo"<p><strong>Aficciones: </Strong>".$_POST["deportes"]." </p>";
                }else{
                    echo"<p><strong>Aficiones: </Strong> Deportes: Off</p>";
                }
                if(isset($_POST["lectura"])){
                    echo"<p><strong>Aficciones: </Strong>".$_POST["lectura"]." </p>";
                }else{
                    echo"<p><strong>Aficiones: </Strong> Lectura: Off</p>";
                }
                if(isset($_POST["otros"])){
                    echo"<p><strong>Aficciones: </Strong>".$_POST["otros"]."/p>";
                }else{
                    echo"<p><strong>Aficiones: </Strong> Off</p>";
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
}else {
           
    header("Location:index.php");
        }
        
?>
