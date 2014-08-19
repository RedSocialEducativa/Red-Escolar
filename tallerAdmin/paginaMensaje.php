<?php
include_once("MensajeCollector.php");


$MensajeCollectorObj = new MensajeCollector();

foreach ($MensajeCollectorObj->showMensaje() as $c){
    echo "<div>";
  	echo "ID:".$c->getId()."<br>";
	echo "Texto:" .$c->getTexto()."<br>";
	echo "Status:".$c->getStatus()."<br>"."<br>";                                   
  	echo "</div>"; 
}


?>
