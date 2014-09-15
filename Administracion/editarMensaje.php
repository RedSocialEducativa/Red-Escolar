<html>
<head>
</head>

<body>
<div id="main">
<?php
$texto=$_POST["texto"];
$nombrePerfilFK=$_POST["nombrePerfilFK"];


echo "Edici&oacute;n en proceso ....  </br>";

include_once("MensajeCollector.php");
$MensajeCollectorObj = new MensajeCollector();
$MensajeCollectorObj->updateMensaje($id,$texto,$nombrePerfilFK);

echo "id :".$id." actualizado a:".$texto." </br>";
echo "id :".$id." actualizado a:".$nombrePerfilFK ." </br>";


?>
<div><a href="mensaje.php">Volver al Inicio</a></div>
</div>
</body>
</html>
