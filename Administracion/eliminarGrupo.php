<html>
<head>
</head>

<body>
<div id="main">
<?php
$id=$_GET["id"];

include_once("grupoCollector.php");
$GrupoCollectorObj = new grupoCollector();
$GrupoCollectorObj->deleteGrupo($id);

echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="grupo.php">Volver al Inicio</a></div>
</div>
</body>
</html>
