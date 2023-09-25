<?php

    function enArray ($valor,$array){
        $esta = false;
        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i] == $valor) {
            $esta = true;
            break;
                
            }
        }

        return $esta;
    }

    if(isset($_POST["enviar"]))//Compruebo errores
    {
        $error_nombre=$_POST["nombre"]=="";
        $error_sexo=!isset($_POST["sexo"]);
        $error_form=$error_nombre||$error_sexo;

    }
    if(isset($_POST["enviar"])&&!$error_form)
    {
        require "vistas/vistarespuestas.php";
    }
    else
    {
        require "vistas/vistaformulario.php";
    }
?>
