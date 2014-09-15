<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$ciudad=$_POST["ciudad"];
$colegio=$_POST["colegio"];
$profesion=$_POST["profesion"];
$correo=$_POST["correo"];
$contrasena=$_POST["contrasena"];
$imagen_id=$_POST["imagen_id"];
$amigo_id=$_POST["amigo_id"];
$id=$_POST["id"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("grupoCollector.php");
$GrupoCollectorObj = new grupoCollector();
$GrupoCollectorObj->updateGrupo($id,$nombre,$apellido,$ciudad,$colegio,$profesion,$correo,$contrasena,$imagen_id,$amigo_id);

echo "id :".$id." actualizado a:".$nombre." </br>";
echo "id :".$id." actualizado a:".$apellido ." </br>";
echo "id :".$id." actualizado a:".$ciudad ." </br>";
echo "id :".$id." actualizado a:".$colegio ." </br>";
echo "id :".$id." actualizado a:".$profesion ." </br>";
echo "id :".$id." actualizado a:".$correo." </br>";
echo "id :".$id." actualizado a:".$contrasena ." </br>";
echo "id :".$id." actualizado a:".$imagen_id ." </br>";
echo "id :".$id." actualizado a:".$amigo_id ." </br>";

?>
<div><a href="perfil.php">Volver al Inicio</a></div>
</div>
</body>
</html>
