<?php
$capital = $_REQUEST["capital"];
$interes = $_REQUEST["intereses"];
$meses = $_REQUEST["meses"];
$sugerencia = "";

if ((($capital * $interes) /(1-(1+$interes))^(-$meses)) ) {
	$resultado="usuario Valido";

}else{
	$resultado="usuario no Valido";

}
echo $resultado;
?>
