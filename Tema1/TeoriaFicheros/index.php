<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria Ficheros de texto</title>
</head>
<body>
    <?php 

       @$fd1 = fopen("prueba.txt","r");
        if(!$fd1)
        die("<p>No se ha podido abrir el fichero prueba.txt</p>");

        echo "<h1>Por ahora todo en orden</h1>";

        fseek($fd1,0);

        while($linea=fgets($fd1)){
            echo "<p>".$linea."</p>";
        }



        fclose($fd1);
    ?>
</body>
</html>