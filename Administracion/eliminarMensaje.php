<html>
<head>
</head>

<body>
<div id="main">
<?php
$id=$_GET["id"];

include_once("mensajeCollector.php");
$MensajeCollectorObj = new mensajeCollector();
$MensajeCollectorObj->deleteMensaje($id);

echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="mensaje.php">Volver al Inicio</a></div>
</div>
</body>
</html>
