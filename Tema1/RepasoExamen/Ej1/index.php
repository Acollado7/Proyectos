<!DOCTYPE html>
<html>
<head>
    <title>Verificación de caracteres duplicados</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="palabra">Teclee una palabra:</label>
    <input type="text" name="palabra" id="palabra">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra = $_POST["palabra"];

    // Verificar si se repiten caracteres
    $repetidos = false;
    $caracteres = array();

    for ($i = 0; $i < strlen($palabra); $i++) {
        $caracter = $palabra[$i];
        if (isset($caracteres[$caracter])) {
            $repetidos = true;
            break;
        }
        $caracteres[$caracter] = true;
    }

    if ($repetidos) {
        echo "La palabra contiene caracteres repetidos.";
    } else {
        echo "La palabra no contiene caracteres repetidos.";
    }
}
?>

</body>
</html>
