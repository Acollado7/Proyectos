<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 practica recuperacion</title>
</head>
<body>
<h1>Primer Formulario</h1>

<form action="index.php" method="post" enctype="multipart/form-data">

    <p><label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario" placeholder="Usuario..."
    value="<?php if (isset($_POST["usuario"])){echo $_POST["usuario"];}
    ?>"
    ><?php if (isset($_POST["enviar"]) && $error_usuario) {
        echo "<span>* Campo Vacio *</span>";
    } ?></p>


    <p><label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre..."value="<?php if (isset($_POST["nombre"])){echo $_POST["nombre"];}
    ?>">
    <?php if (isset($_POST["enviar"]) && $error_nombre) {
        echo "<span>* Campo Vacio *</span>";
    } ?></p>

    <p><label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña..."value="<?php if (isset($_POST["contraseña"])){echo $_POST["contraseña"];}
    ?>" >
    <?php if (isset($_POST["enviar"]) && $error_contarseña) {
        echo "<span>* Campo Vacio *</span>";
    } ?></p>


    <p><label for="dni">DNI:</label>
    <input type="text" name="dni" id="dni" placeholder="Dni : 11223344Z"></p>

    <p>
            
            <label for="sexo">Sexo</label><br />
            <input type="radio" <?php if (isset($_POST["sexo"]) && $_POST["sexo"] == "hombre") echo "checked "; ?> name="sexo" id="sexo" value="hombre"><span>Hombre</span><br />
            <input type="radio" <?php if (isset($_POST["sexo"]) && $_POST["sexo"] == "mujer")  echo "checked "; ?> name="sexo" id="sexo" value="mujer"><span>Mujer</span><br>
            <?php
            if (isset($_POST["enviar"]) && $error_sexo)
                echo "<span class='error'> Debes seleccionar un Sexo*  </span>";
            ?>
        </p>
        
    <p><label for="archivo">Incluir mi foto(Max 500KB):</label>
    <input type="file" name="archivo" id="archivo" accept="image/*"></p>

    <p><label for="sub"></label>
    <input type="checkbox" name="sub" id="sub" checked><span>Subscribirme al boletin de novedades</span></p>

    <p><button type="submit" name="guardar">Guardar cambios</button>
    <button type="reset" name="borrar">Borrar los datos introducidos</button></p>




</form>
</body>
</html>