<?php
include_once("UsuarioCollector.php");

$id =1;


$UsuarioCollectorObj = new UsuarioCollector();

foreach ($UsuarioCollectorObj->showUsuario() as $c){
  echo "<div>";
  echo "ID:".$c->getId()."<br>";
 echo "Correo Electronico: ".$c->getCorreoElectronico()."<br>";
	echo "Password:" .$c->getPassword()."<br>"."<br>";                                   
  echo "</div>"; 
}


?>
