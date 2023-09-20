<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Rellena tu CV</h1>
    
    <form action="recogida.php" method="post" enctype="multipart/form-data">

        <p><label for="nombre">Nombre</label> <br/>
        <input type="text" name="nombre" id="nombre"></p>

        <p><label for="apellido">Apellido</label><br/>
        <input type="text" name="apellido" id="apellido"></p>

        <p><label for="contraseña">Contraseña</label><br/>
        <input type="password" name="contraseña" id="contraseña"></p>

        <p><label for="dni">DNI</label><br/>
        <input type="text" name="dni" id="dni"></p>

        <p><label for="sexo">Sexo</label><br/>
        <input type="radio" name="sexo" id="sexo" value="H"><span>Hombre</span><br/>
        <input type="radio" name="sexo" id="sexo"value="M"><span>Mujer</span></p>

        <p><label for="archivo">Incluir mi foto: </label>
        <input type="file" name="archivo" id="archivo" accept="image/*"></p>

        <p><label for="nacimiento">Nacido en:</label>
        <select id="nacimiento" name="nacimiento">
            <option value="malaga" >Malaga</option>
            <option value="estepona">Estepona</option> 
            <option value="marbella"selected>Marbella</option>     
        </select></p>

        <p><label for="comentarios">Comentarios</label>
        <textarea id="comentarios" name="comentarios" rows="4" cols="20"></textarea></p>

        <p><label for="sub"></label>
        <input type="checkbox" name="sub" id="sub" checked><span>Subscribirse al boletin de novedades</span></p>
        
        <p>

        <button type="submit" name="guardar">Guardar cambios</button>
        <button type="reset" name="borrar">Borrar los datos introducidos</button></p>
    </form>
</body>
</html>