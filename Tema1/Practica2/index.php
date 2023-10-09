<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera pagina PHP</title>
</head>

<body>
    <h1>Esta es mi super página</h1>
    <form action="recogida.php" method="post" enctype="multipart/form-data">
        <p><label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>

        <p><label for="nacimiento">Nacido en:</label>
            <select id="nacimiento" name="nacimiento">
                <option value="malaga">Malaga</option>
                <option value="estepona">Estepona</option>
                <option value="marbella" selected>Marbella</option>
            </select>
        </p>

        <p><label for="sexo">Sexo:</label>
            <span>Hombre</span><input type="radio" name="sexo" id="sexo" value="H">
            <span>Mujer</span><input type="radio" name="sexo" id="sexo" value="M">
        </p>

        <p><label for="aficiones">Aficiones: </label>
            <span>Deportes</span><input type="checkbox" name="deportes" id="deportes">
            <span>Lectura</span><input type="checkbox" name="lectura" id="lectura">
            <span>Otros</span><input type="checkbox" name="otros" id="otros">
        </p>

        <p><label for="comentarios">Comentarios: </label>
            <textarea id="comentarios" name="comentarios" rows="4" cols="20"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar</button>
    </form>

</body>

</html>