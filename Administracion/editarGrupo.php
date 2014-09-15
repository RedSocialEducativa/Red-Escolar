<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$eventos=$_POST["eventos"];
$recursos=$_POST["recursos"];
$idAdminFk=$_POST["idAdminFk"];
$id=$_POST["id"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("grupoCollector.php");
$GrupoCollectorObj = new grupoCollector();
$GrupoCollectorObj->updateGrupo($id,$nombre,$eventos,$recursos,$idAdminFk);

echo "id :".$id." actualizado a:".$nombre." </br>";
echo "id :".$id." actualizado a:".$eventos ." </br>";
echo "id :".$id." actualizado a:".$recursos ." </br>";
echo "id :".$id." actualizado a:".$idAdminFk ." </br>";
?>
<div><a href="grupo.php">Volver al Inicio</a></div>
</div>
</body>
</html>
