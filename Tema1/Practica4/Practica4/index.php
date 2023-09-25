<?php

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
