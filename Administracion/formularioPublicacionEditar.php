<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Publicación</title>
</head>
<body>


<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("PublicacionCollector.php");
include_once("publicacion.php");
$PublicacionCollectorObj = new PublicacionCollector();
$ObjPublicacion = $PublicacionCollectorObj->showPublicacion($id);
?>

<h2>Editar Objeto </h2>
<form action="editarPublicacion.php" method="post" >
<p>
	Id: <input type="text" name="id" value="<?php echo $ObjPublicacion->getId(); ?>" readonly />
</p>

<p>
	Texto:     <input type="text" name="texto"  value="<?php echo $ObjPublicacion->getTexto(); ?>" autofocus required />
	Nombre:   <input type="text" name="nombre"  value="<?php echo $ObjPublicacion->getnombrePerfilFK(); ?>" autofocus required />

</p>
<a href="perfil.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
