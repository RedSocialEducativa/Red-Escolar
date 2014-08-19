<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["texto"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("NotificacionCollector.php");

$NotificacionCollectorObj = new NotificacionCollector();
$NotificacionCollectorObj->createNotificacion($valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
