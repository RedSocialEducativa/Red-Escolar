<?php
include_once("MensajeCollector.php");

$id =1;


$MensajeCollectorObj = new MensajeCollector();

foreach ($MensajeCollectorObj->showMensaje() as $c){
    echo "<div>";
  echo "ID:".$c->getId()."<br>";
	echo "Descripcion:" .$c->getDescripcion()."<br>"."<br>";                                   
  echo "</div>"; 
}


?>
