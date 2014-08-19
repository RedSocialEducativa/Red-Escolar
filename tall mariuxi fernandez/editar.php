<html>
<head>
</head>

<body>
<div id="main">
<?php
$texto=$_POST["texto"];
$iddemo=$_POST["idperfil"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("NotificacionCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->updateDemo($idperfil,$texto);

echo "id :".$idperfil." actualizado a:".$texto." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
