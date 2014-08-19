<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de DemoCollector
include_once("MensajeCollector.php");
//creo una instancia de DemoCollector
$MensajeCollectorObj = new MensajeCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$MensajeCollectorObj->deleteMensaje($id);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
