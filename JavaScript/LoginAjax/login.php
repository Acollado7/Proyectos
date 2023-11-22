<?php
$usuario = $_REQUEST["usuario"];
$contraseña = $_REQUEST["password"];
$sugerencia = "";

if ($usuario =="admin" && $contraseña =="1234") {
	$resultado="usuario Valido";

}else{
	$resultado="usuario no Valido";

}
echo $resultado;
?>
