<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Perfil</title>
</head>
<body>


<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("PerfilCollector.php");
include_once("perfilObjeto.php");

$PerfilCollectorObj = new PerfilCollectoru();
$ObjPerfil = $PerfilCollectorObj->showPerfil($id);
?>

<h2>Editar Objeto </h2>
<form action="editarPerfil.php" method="post" >
<p>
	Id: <input type="text" name="id" value="<?php echo $ObjPerfil->getId(); ?>" readonly />
</p>

<p>
	Nombre:     <input type="text" name="nombre"  value="<?php echo $ObjPerfil->getNombre(); ?>" autofocus required />
	Apellido:   <input type="text" name="apellido"  value="<?php echo $ObjPerfil->getApellido(); ?>" autofocus required />
	Ciudad:     <input type="text" name="ciudad"  value="<?php echo $ObjPerfil->getCiudad(); ?>" autofocus required />
	Colegio:    <input type="text" name="colegio"  value="<?php echo $ObjPerfil->getColegio(); ?>" autofocus required />
	Profesion:  <input type="text" name="profesion"  value="<?php echo $ObjPerfil->getProfesion(); ?>" autofocus required />
	Correo:     <input type="text" name="correo"  value="<?php echo $ObjPerfil->getCorreo(); ?>" autofocus required />
	Contrasena: <input type="text" name="contrasena"  value="<?php echo $ObjPerfil->getContrasena(); ?>" autofocus required />
	Imagen:     <input type="text" name="imagen_id"  value="<?php echo $ObjPerfil->getImagen_id(); ?>" autofocus required />
	Amigo:      <input type="text" name="amigo_id"  value="<?php echo $ObjPerfil->getAmigo_id(); ?>" autofocus required />

</p>
<a href="perfil.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
