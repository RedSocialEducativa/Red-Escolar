<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Demo</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
?>
<h2>Editar Objeto Demo </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdDemo(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjDemo->getNombre(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
