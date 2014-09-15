<?php
//incluimos el archivo para manipular la base de datos
require_once "PerfilCollector.php";

//Recibimos en variables los campos del registro
//Con trim quitamos espacios en blanco al inicio y final
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$ciudad = trim($_POST['ciudad']);
$colegio = trim($_POST['colegio']);
$profesion = trim($_POST['profesion']);
$correo = trim($_POST['correo']);
$contrasena = trim($_POST['contrasena']);

		$PerfilCollector = new PerfilCollector();
		$contraseña = crypt($contraseña, '_er#.lop');
		$PerfilCollector->crear($nombre, $apellido, $ciudad, $colegio, $profesion, $correo, $contrasena);	
echo '<script language = javascript>
	alert("Usuario Creado")
	self.location = "index.php"
	</script>'
?>
