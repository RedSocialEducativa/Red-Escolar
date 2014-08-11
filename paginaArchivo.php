<?php
include_once("ArchivoCollector.php");

$id =1;


$ArchivoCollectorObj = new ArchivoCollector();

foreach ($ArchivoCollectorObj->showArchivo() as $c){
 echo "<div>";
  echo "ID:".$c->getId()."<br>";
	echo "Descripcion:" .$c->getDescripcion()."<br>"."<br>";                                   
  echo "</div>";
}


?>
