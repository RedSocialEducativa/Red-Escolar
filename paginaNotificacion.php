<?php
include_once("NotificacionCollector.php");

$id =1;


$NotificacionCollectorObj = new NotificacionCollector();

foreach ($NotificacionCollectorObj->showNotificacion() as $c){
  echo "<div>";
  echo "ID:".$c->getId()."<br>";
	echo "Descripcion:" .$c->getDescripcion()."<br>"."<br>";                                   
  echo "</div>"; 
}


?>
