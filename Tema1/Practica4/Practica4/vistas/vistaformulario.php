<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera pagina PHP</title>
</head>

<body>
    <style>
        .error{
            color: red;
            font-size: x-small;
        }
    </style>
    <h1>Esta es mi super página</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <p><label for="nombre">Nombre</label> <br />
            <input type="text" name="nombre" id="nombre" value="<?php if (isset($_POST["nombre"])) {
                                                                    echo $_POST["nombre"];
                                                                } ?>">

            <?php
            if (isset($_POST["enviar"]) && $error_nombre) {
                echo "<span class='error'>Campo Vacio*</span>";
            }
            ?>
        </p>

        <p>
            <label for="nacido">Nacido en:</label>
            <select id="nacido" name="nacido">
                <option value="Málaga" <?php if(isset($_POST["nacido"]) && $_POST["nacido"]=="Málaga") echo "selected";?>>Málaga</option>
                <option value="Marbella" <?php if(isset($_POST["nacido"]) && $_POST["nacido"]=="Marbella") echo "selected";?>>Marbella</option>
                <option value="Istán" <?php if(!isset($_POST["nacido"]) || (isset($_POST["nacido"]) && $_POST["nacido"]=="Istán")) echo "selected";?>>Istán</option>
            </select>
        </p>

        <p>
            
            <label for="sexo">Sexo</label><br />
            <input type="radio" <?php if (isset($_POST["sexo"]) && $_POST["sexo"] == "hombre") echo "checked "; ?> name="sexo" id="sexo" value="hombre"><span>Hombre</span><br />
            <input type="radio" <?php if (isset($_POST["sexo"]) && $_POST["sexo"] == "mujer")  echo "checked "; ?> name="sexo" id="sexo" value="mujer"><span>Mujer</span><br>
            <?php
            if (isset($_POST["enviar"]) && $error_sexo)
                echo "<span class='error'> Debes seleccionar un Sexo*  </span>";
            ?>
        </p>

        <p><label for="aficiones">Aficiones: </label>
            <span>Deportes</span><input type="checkbox" name="deportes" id="deportes" value="1">
            <span>Lectura</span><input type="checkbox" name="lectura" id="lectura" value="2">
            <span>Otros</span><input type="checkbox" name="otros" id="otros" value="3">
        </p>

        <p><label for="comentarios">Comentarios: </label>
            <textarea id="comentarios" name="comentarios" rows="4" cols="20"><?php if(isset($_POST["comentarios"])) echo $_POST["comentarios"];?></textarea>
        </p>

        <button type="submit" name="enviar">Enviar</button>
    </form>

</body>

</html>