<?php
if (isset($_POST["btnGuardar"])) {
    $errorForm = $_FILES["archivo"]["name"] == "" || $_FILES["archivo"]["error"] || $_FILES["archivo"]["type"] != "text/plain" || $_FILES["archivo"]["size"] > 1024 * 1024;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Horario 2</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Ejercicio 2</h1>
    <form action="ejercicio2.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="fichero">Sube tu archivo aqui(Menos de 1MB):</label>
            <input type="file" name="archivo" id="archivo" value="<?php if (isset($_POST["archivo"])) {
                                                                        echo $_POST["archivo"];
                                                                    } ?>">
            <?php
            if (isset($_POST["btnGuardar"]) && $errorForm) {
                if ($_FILES["archivo"]["error"]) {
                    echo "<span class='error'>Error</span>";
                } elseif ($_FILES["archivo"]["type"] != "text/plain") {
                    echo "<span class='error'>El archivo no es tipo txt</span>";
                } else {
                    echo "<span class='error'>El archivo pesa mas de 1MB</span>";
                }
            }
            ?>
        </p>
        <p>
            <button type="submit" name="btnGuardar">Subir Fichero</button>
        </p>
    </form>
    <?php
        if (isset($_POST["btnGuardar"]) && !$errorForm) {
            "<h2>Respuesta</h2>";
            @$var = move_uploaded_file($_FILES["archivo"]["tmp_name"],"Ficheros");
                if ($var) {
                    echo"<p>Archivo subido</p>";
                }else
                "<p>El fichero seleccionado no ha podido subirse</p>";
        }
    ?>
</body>

</html>