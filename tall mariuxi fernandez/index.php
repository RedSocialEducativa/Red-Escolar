<html>
<head>
</head>
<?php
include_once("NotificacionCollector.php");
$NotificacionCollectorObj = new NotificacionCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioDemoInsert.php">Nuevo</a></td></tr>
<?php
foreach ($NotificacionCollectorObj->readDemos() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdperfil() ."</td>";
  echo "<td>".$c->gettexto()."</td>";
  echo "<td><a href='formularioDemoEditar.php?id=".$c->getIdPerfil()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdPerfil()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
