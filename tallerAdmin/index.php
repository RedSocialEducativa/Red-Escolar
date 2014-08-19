<html>
<head>
</head>
<?php
include_once("MensajeCollector.php");
$MensajeCollectorObj = new MensajeCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioMensajeInsert.php">Nuevo</a></td></tr>
<?php
foreach ($MensajeCollectorObj->readMensaje() as $c){
  echo "<tr>";
  echo "<td>".$c->getId() ."</td>";
  echo "<td>".$c->getTexto()."</td>";
   echo "<td>".$c->getStatus()."</td>";
  echo "<td><a href='formularioMesnsajeEditar.php?id=".$c->getId()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getId()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
