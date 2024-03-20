<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Practica</title>
</head>
<body>
    <h1>Notas Alumnos</h1>

    <?php 
    //Esto abre conexion
    try {
        $conexion =mysqli_connect("localhost","jose","josefa","bd_exam_colegio");
        mysqli_set_charset($conexion,"utf8");
    } catch (Exception $e) {
        die("<p>no se ha podido acceder a la: " .$e->getMessage()."</p>");
    }

    //Esto realiza la consulta para traer a los alumnos
    try {
        $consulta ="select * from alumnos";
        $resultado = mysqli_query($conexion,$consulta);
    } catch (Exception $e) {
        mysqli_close($conexion);
        die("<p>no se ha podido acceder a la Consulta: " .$e->getMessage()."</p>");
    }
    if (mysqli_num_rows($resultado)>0) {
        echo "<form action='index.php' method='post' enctype='multipart/form-data'>";
    echo "<select>";
        while ($fila=mysqli_fetch_assoc($resultado)) {
            echo "<option value='".$fila["id"]."'>".$fila["nombre"]. "</option>";
        }
    echo "<select>";
    
    echo " <button type='submit' name='btnVerNotas'>Ver Notas</button></form>";
    }else{
        echo "<p>No hay alumno con esos datos</p>";
    }
    
    if (isset($_POST["btnVerNotas"])) {
    
    }
    //Esto realiza la consulta para traer las notas de los alumnos
    try {
        $consulta ="select * from notas where cod_alu=".$_POST["btnVerNotas"]."";
        $resultado = mysqli_query($conexion,$consulta);
    } catch (Exception $e) {
        mysqli_close($conexion);
        die("<p>no se ha podido acceder a la Consulta: " .$e->getMessage()."</p>");
    }





    ?>
    
</body>
</html>