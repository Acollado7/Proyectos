<?php
if(isset($_POST["guardar"])){
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
       /*$a[0]=3;
        $a[1]=6;
        $a[2]=-1;
        $a[3]=8;

        for ($i=0; $i < count($a); $i++) { 
            echo "<p>Número: ".$a[$i]."</p>";
        }*/

        
            echo "<p><strong>Nombre: </Strong>".$_POST["nombre"]."</p>";
        echo "<p><strong>Apellido: </Strong>".$_POST["apellido"]."</p>";
        echo "<p><strong>Contraseña: </Strong>".$_POST["contraseña"]."</p>";
        echo "<p><strong>DNI: </Strong>".$_POST["dni"]."</p>";
        if (isset($_POST["sexo"])) {
            echo "<p><strong>Sexo: </Strong>".$_POST["sexo"]."</p>";
            
        }else{
            echo"<p><strong>Sexo: </Strong> No has puesto sexo</p>";
        }
        echo "<p><strong>Nacido en : </Strong>".$_POST["nacimiento"]."</p>";
        if(isset($_POST["sub"])){
            echo "<p><strong>Subscrito: </Strong>Si</p>";
        }else{
            echo"<p><strong>Subscrito: </Strong> No te has subscrito</p>";

        }

        

        

        
    
    ?>
</body>
</html>

<?php 
}else {
           
    header("Location:index.php");
        }
        
?>