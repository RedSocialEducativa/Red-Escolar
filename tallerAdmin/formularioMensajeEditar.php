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
include_once("MensjaeCollector.php");
include_once("Mensaje.php");
$MensajeCollectorObj = new MensajeCollector();
$ObjMensaje = $MensajeCollectorObj->showMensaje($id);
?>
<h2>Editar Objeto Mensaje </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="id" value="<?php echo $ObjMensaje->getId(); ?>" readonly />
</p>

<p>
Texto: <input type="text" name="texto"  value="<?php echo $ObjMensaje->getTexto(); ?>" autofocus required />
Status: <input type="text" name="status"  value="<?php echo $ObjMensaje->getStatus(); ?>" autofocus required />

</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
