<?php
 if(isset($_POST["enviar"]))//Compruebo errores
 {
     $error_usuario=$_POST["usuario"]=="";
     $error_nombre=$_POST["nombre"]=="";
     $error_contarseña=$_POST["contraseña"]=="";
     

     $error_sexo=!isset($_POST["sexo"]);
     $error_form=$error_nombre||$error_sexo;

 }
 if(isset($_POST["enviar"])&&!$error_form)
 {
     require "Vistas/vistaRespuestas.php";
 }
 else
 {
     require "Vistas/vistaFormulario.php";
 }
?>