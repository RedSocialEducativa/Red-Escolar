<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Mensaje</title>
</head>
<body>


<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("MensajeCollector.php");
include_once("mensaje.php");
$MensajeCollectorObj = new MensajeCollector();
$ObjMensaje = $MensajeCollectorObj->showMensaje($id);
?>

<h2>Editar Objeto </h2>
<form action="editarMensaje.php" method="post" >
<p>
	Id: <input type="text" name="id" value="<?php echo $ObjMensaje->getId(); ?>" readonly />
</p>

<p>
	Texto:     <input type="text" name="texto"  value="<?php echo $ObjMensaje->getTexto(); ?>" autofocus required />
	Nombre:   <input type="text" name="nombrePerfilFK"  value="<?php echo $ObjMensaje->getnombrePerfilFK(); ?>" autofocus required />

</p>
<a href="mensaje.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
