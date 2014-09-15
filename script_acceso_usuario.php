<?php 
//Recibir los datos ingresados en el formulario
$correo= $_POST['correo'];
$contrasena= $_POST['contrasena'];

	include_once("PerfilCollector.php");
	$PerfilCollectorObj = new PerfilCollector();
	$PerfilCollectorObj->session($correo,$contrasena);
?>