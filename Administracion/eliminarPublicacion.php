<html>
<head>
</head>

<body>
<div id="main">
<?php
$id=$_GET["id"];

include_once("perfilCollector.php");
$PerfilCollectorObj = new perfilCollector();
$PerfilCollectorObj->deletePerfil($id);

echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="perfil.php">Volver al Inicio</a></div>
</div>
</body>
</html>
