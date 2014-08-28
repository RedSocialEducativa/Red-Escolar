<html>
<head>
</head>

<body>
<div id="main">
<?php
$texto=$_POST["texto"];
$status=$_POST["status"];
$id=$_POST["id"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("MensajeCollector.php");
$MensajeCollectorObj = new MensajeCollector();
$MensajeCollectorObj->updateMensaje($id,$texto,$status);

echo "id :".$id." actualizado a:".$texto." </br>";
echo "id :".$id." actualizado a:".$status." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
