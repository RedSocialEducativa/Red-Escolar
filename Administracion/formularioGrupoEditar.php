<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Grupo</title>
</head>
<body>


<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("GrupoCollector.php");
include_once("grupoObjeto.php");
$GrupoCollectorObj = new grupoCollector();
$ObjGrupo = $GrupoCollectorObj->showGrupo($id);
?>

<h2>Editar Objeto </h2>
<form action="editarGrupo.php" method="post" >
<p>
	Id: <input type="text" name="id" value="<?php echo $ObjMensaje->getId(); ?>" readonly />
</p>

<p>
	Nombre:        <input type="text" name="nombre"  value="<?php echo $ObjGrupo->getNombre(); ?>" autofocus required />
	Eventos:       <input type="text" name="eventos"  value="<?php echo $ObjGrupo->getEventos(); ?>" autofocus required />
	Recursos:      <input type="text" name="recursos"  value="<?php echo $ObjGrupo->getRecursos(); ?>" autofocus required />
	Administrador: <input type="text" name="idAministradorFK"  value="<?php echo $ObjGrupo->getIdAdministradorFK(); ?>" autofocus required />

</p>
<a href="grupo.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
