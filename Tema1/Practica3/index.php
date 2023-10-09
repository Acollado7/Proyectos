<?php
require "src/funciones.php";

function letraNIF($dni)
{
    return substr("TRWAGMYFPDXBNJZSQVHLCKEO", $dni % 23, 1);
}
function dni_bien_escrito($texto){
  return strlen($texto)== 9 && is_numeric(substr($texto,0,8)) && substr($texto,-1)>= "A" && substr($texto,-1)<= "Z";

}
function dni_valido($texto) {
    $numero = substr($texto,0,8);
    $letra = substr($texto,-1);
    $valido = letraNIF($numero) == $letra;
    return $valido;
}


if (isset($_POST["borrar"])) {
    unset($_POST);
}
$error_form = false;

if (isset($_POST["guardar"])) { //compruebo el posible error
    $error_nombre = $_POST["nombre"] == "";
    $error_ape = $_POST["apellido"] == "";
    $error_contraseña = $_POST["contraseña"] == "";
    $error_dni = $_POST["dni"] =="" || !dni_bien_escrito(strtoupper($_POST["dni"])) || !dni_valido($_POST["dni"]);
    $error_sexo = !isset($_POST["sexo"]);
    $error_comentario = $_POST["comentarios"] == "";

    $error_form = $error_nombre || $error_ape || $error_contraseña || $error_sexo || $error_comentario;
}
if (isset($_POST["guardar"]) && !$error_form) {
    echo "<h1>Recogida de datos</h1>";
    echo "<p><strong>Nombre: </Strong>" . $_POST["nombre"] . "</p>";
    echo "<p><strong>Apellido: </Strong>" . $_POST["apellido"] . "</p>";
    echo "<p><strong>Contraseña: </Strong>" . $_POST["contraseña"] . "</p>";
    echo "<p><strong>DNI: </Strong>" . $_POST["dni"] . "</p>";

    if (isset($_POST["sexo"])) {
        echo "<p><strong>Sexo: </Strong>" . $_POST["sexo"] . "</p>";
    } else {
        echo "<p><strong>Sexo: </Strong> No has puesto sexo</p>";
    }
    echo "<p><strong>Nacido en : </Strong>" . $_POST["nacimiento"] . "</p>";
    if (isset($_POST["sub"])) {
        echo "<p><strong>Subscrito: </Strong>Si</p>";
    } else {
        echo "<p><strong>Subscrito: </Strong> No te has subscrito</p>";
    }
} else {

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>

    <body>
        <h1>Rellena tu CV</h1>
        <style>
            .error {
                color: red;
                font-size: x-small;
            }
        </style>

        <form action="index.php" method="post" enctype="multipart/form-data">
            <p><label for="nombre">Nombre</label> <br />
                <input type="text" name="nombre" id="nombre" value="<?php if (isset($_POST["nombre"])) {
                                                                        echo $_POST["nombre"];
                                                                    } ?>">

                <?php
                if (isset($_POST["guardar"]) && $error_nombre) {
                    echo "<span class='error'>Campo Vacio*</span>";
                }
                ?>
            </p>


            <p><label for="apellido">Apellido</label><br />
                <input type="text" name="apellido" id="apellido" value="<?php if (isset($_POST["apellido"])) {
                                                                            echo $_POST["apellido"];
                                                                        } ?>">
                <?php
                if (isset($_POST["guardar"]) && $error_ape) {
                    echo "<span class='error'>Campo Vacio*</span>";
                }
                ?>
            </p>

            <p><label for="contraseña">Contraseña</label><br />
                <input type="password" name="contraseña" id="contraseña" value="<?php if (isset($_POST["contraseña"])) {
                                                                                    echo $_POST["contraseña"];
                                                                                } ?>">
                <?php
                if (isset($_POST["guardar"]) && $error_contraseña) {
                    echo "<span class='error'>Campo Vacio*</span>";
                }
                ?>
            </p>
            <p><label for="dni">DNI</label><br />
                <input type="text" placeholder="DNI: 11223344Z" name="dni" id="dni" value="<?php if(isset($_POST["dni"])) {
                 
                } ?>">

                <?php
                if (isset($_POST["guardar"]) && $error_dni) {

                   if ($_POST["dni"]=="") {
                    echo "<span class='error'>Campo Vacio*</span>";
                   }elseif(!dni_bien_escrito(strtoupper($_POST["dni"])))
                   echo "<span class='error'> DNI no esta bien escrito</span>";
                   else
                   "<span class='error'>DNI no valido*</span>";
                }
                
                ?>
            </p>


            <p><label for="sexo">Sexo</label><br />
                <input type="radio" <?php if (isset($_POST["sexo"]) && $_POST["sexo"] == "hombre") echo "checked "; ?> name="sexo" id="sexo" value="hombre"><span>Hombre</span><br />
                <input type="radio" <?php if (isset($_POST["sexo"]) && $_POST["sexo"] == "mujer")  echo "checked "; ?> name="sexo" id="sexo" value="mujer"><span>Mujer</span>
            </p>

            <p><label for="archivo">Incluir mi foto: </label>
                <input type="file" name="archivo" id="archivo" accept="image/*">
            </p>

            <p><label for="nacimiento">Nacido en:</label>
                <select id="nacimiento" name="nacimiento">
                    <option value="malaga" <?php if (isset($_POST["nacimiento"]) || (isset($_POST["nacimiento"]) && $_POST["nacimiento"] == "malaga")) echo "selected"; ?>>Malaga</option>
                    <option value="estepona" <?php if (isset($_POST["nacimiento"]) || (isset($_POST["nacimiento"]) && $_POST["nacimiento"] == "estepona")) echo "selected"; ?>>Estepona</option>
                    <option value="marbella" <?php if (isset($_POST["nacimiento"]) || (isset($_POST["nacimiento"]) && $_POST["nacimiento"] == "marbella")) echo "selected"; ?>selected>Marbella</option>
                </select>
            </p>

            <p><label for="comentarios">Comentarios</label>
                <textarea id="comentarios" name="comentarios" rows="4" cols="20"><?php if (isset($_POST["comentarios"])) {
                                                                                        echo $_POST["comentarios"];
                                                                                    } ?></textarea>
                <?php
                if (isset($_POST["guardar"]) && $error_comentario) {
                    echo "<span class='error'>Campo Vacio*</span>";
                }
                ?>
            </p>

            <p><label for="sub"></label>
                <input type="checkbox" name="sub" id="sub"><span>Subscribirse al boletin de novedades</span>
            </p>

            <p>

                <button type="submit" name="guardar">Guardar cambios</button>
                <button type="submit" name="borrar">Borrar los datos introducidos</button>
            </p>
        </form>
    </body>

    </html>

<?php

}
?>