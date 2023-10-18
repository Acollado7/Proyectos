<!DOCTYPE html>
<html>
<head>
    <title>Contador de Palabras</title>
</head>
<body>
    <h1>Contador de Palabras</h1>

    <form action="ejer4.php" method="post" enctype="multipart/form-data">
      <p><input type="file" name="file" accept=".txt" /></p>  
        <p><input type="submit" value="Contar Palabras" /></p>
    </form>

<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $file = $_FILES['file'];

    if ($file['error'] === UPLOAD_ERR_OK) {
        $filename = $file['tmp_name'];
        $maxFileSize = 2.5 * 1024 * 1024; // 2.5MB

        if ($file['size'] <= $maxFileSize && pathinfo($file['name'], PATHINFO_EXTENSION) === 'txt') {
            $content = file_get_contents($filename);
            $wordCount = str_word_count($content);

            echo "Número de palabras: $wordCount";
        } else {
            echo "El archivo no es válido. Asegúrate de que sea un archivo .txt y que no supere 2.5MB.";
        }
    } else {
        echo "Hubo un error al subir el archivo.";
    }
}

?>

</body>
</html>
