<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria BD</title>
    <style>
        table,th,td{
            border:1px solid black}
        table{
            border-collapse: collapse;width: 80%;margin: 0 auto;text-align: center;
        }
        th{
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <h1>Teoria BD</h1>
    <?php

    try{
    $conexion=mysqli_connect("localhost","jose","josefa","bd_teoria");
    mysqli_set_charset($conexion,"utf8");
    }catch(Exception $e){
        die ("<p> No ha podido conectarse a la base de datos".$e->getMessage()."</p></body></html>");
    }



    $consulta="select * from t_alumnos";
    try {
        $resultado=mysqli_query($conexion,$consulta);
        
    } catch (Exception $e) {
        mysqli_close($conexion);
        die ("<p> imposible realizar la consulta".$e->getMessage()."</p></body></html>");
    }

    $n_tuplas=mysqli_num_rows($resultado);

    echo"El numero de tuplas obtenido ha sido ".$n_tuplas.PHP_EOL;

    $tupla = mysqli_fetch_row($resultado);
    echo"</p> El primer alumno obtenido tiene el nombre de: ".$tupla[1]."</p>";
    $tupla = mysqli_fetch_assoc($resultado);
    echo"</p> El segundo alumno obtenido tiene el nombre de: ".$tupla["nombre"]."</p>";

    $tupla = mysqli_fetch_array($resultado);
    echo"</p> El tercer alumno obtenido tiene el nombre de: ".$tupla[1]."</p>";

    mysqli_data_seek($resultado,0);
    $tupla =mysqli_fetch_object($resultado);
    echo"</p> El tercer alumno obtenido tiene el nombre de: ".$tupla->nombre."</p>";
    mysqli_data_seek($resultado,0);

    echo "<table>";
    echo "<tr><th>Codigo</th><th>Nombre</th><th>Telefono</th><th>Codigo postal</th></tr>";
    while ($tupla = mysqli_fetch_assoc($resultado)) {
        echo"<tr>";

        echo"<td>".$tupla["cod_alu"]."</td>";
        echo"<td>".$tupla["nombre"]."</td>";
        echo"<td>".$tupla["telefono"]."</td>";
        echo"<td>".$tupla["cp"]."</td>";

        echo"</tr>";
    }

    mysqli_free_result($resultado);

    echo"</table>";
    

    mysqli_close($conexion);

    ?>
    
</body>
</html>