<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <form action="ejer3.php" method="POST">
        <label for="numero_n">Número n:</label>
        <input type="number" name="numero_n" min="1" max="10" required>
        <br>
        <label for="numero_m">Número m:</label>
        <input type="number" name="numero_m" min="1" max="10" required>
        <br>
        <input type="submit" value="Mostrar línea">
    </form>
    <?php
$numero_n = $_POST['numero_n'];
$numero_m = $_POST['numero_m'];

$archivo = "Tablas/tabla_" . $numero_n . ".txt";

if (file_exists($archivo)) {
    $lineas = file($archivo);
    if ($numero_m <= count($lineas)) {
        echo "Línea $numero_m del archivo $archivo: " . $lineas[$numero_m - 1];
    } else {
        echo "El archivo $archivo no tiene una línea $numero_m.";
    }
} else {
    echo "El archivo $archivo no existe.";
}
?>
</body>
</html>