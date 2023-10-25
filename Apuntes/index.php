<?php
//DNI
function letraNIF($dni)
{

    return substr("TRWAGMYFPDXBNJZSQVHLCKEO", $dni % 23, 1);
}

function compDni($param)
{
    if (strlen($param) == 9) {

        $letraMin = substr($param, -1);

        if ($letraMin >= "A" || $letraMin <= "Z") {

            $letra = strtoupper($letraMin);
            $soloNum = substr($param, 0, 8);

            if (is_numeric($soloNum) && letraNIF($soloNum) == $letra) {

                return true;
            }
        }
    }

    return false;
}
//ERRORES FORMULARIO COMPLETO
if (isset($_POST["enviar"])) {

    $error_nombre = $_POST["nombre"] == "";
    $error_usuario = $_POST["usuario"] == "";
    $error_psswd = $_POST["psswd"] == "";
    $error_dni = $_POST["dni"] == "" || !compDni($_POST["dni"]);
    $error_sexo = !isset($_POST["sexo"]);
    $error_foto = $_FILES["foto"]["name"] != "" && ($_FILES["foto"]["error"] 
    || !getimagesize($_FILES["foto"]["tmp_name"]) || $_FILES["foto"]["size"] > (500 * 1000));
    $errores = $error_nombre || $error_usuario
        || $error_psswd || $error_dni 
        || $error_sexo || $error_foto;
}
if (isset($_POST["enviar"]) && !$errores) {

    //ERRORES SUBIR ARCHIVO
    $error_archivo = $_FILES["foto"]["name"] == "" || $_FILES["foto"]["error"] || !getimagesize($_FILES["foto"]["tmp_name"]) || $_FILES["foto"]["size"] > 500 * 1024;
    if (isset($_FILES["foto"])) {
    }
    echo "<p>Existe S_POST</p>";
} else {
    echo "<p>No existe S_POST</p>";
}

//STRLEN PERSONAL
function mi_strlen($texto)
    {
        $resp=0;
        while(isset($texto[$resp]))
            $resp++;
        return $resp;
    }

//EXPLODE PERSONAL
function mi_explode($sep,$texto)
    {
        $aux=[];
        $long_texto=mi_strlen($texto);
        $i=0;
        while($i<$long_texto && $texto[$i]==$sep)
        {
            $i++;
        }    

        if($i<$long_texto)
        {
            $j=0;
            $aux[$j]=$texto[$i];
            for($k=$i+1; $k<$long_texto;$k++)
            {
                if($texto[$k]!=$sep)
                {
                    $aux[$j].=$texto[$k];
                }
                else
                {
                    $k++;
                    while($k<$long_texto && $texto[$k]==$sep)
                    {
                           $k++;
                    }
                    if($k<$long_texto)
                    {
                        $j++;
                        $aux[$j]=$texto[$k];
                    }
                }
            }
        }
        return $aux;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>