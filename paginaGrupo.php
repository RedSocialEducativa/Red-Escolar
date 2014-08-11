<?php
include_once("GrupoCollector.php");

$id =1;


$GrupoCollectorObj = new GrupoCollector();

foreach ($GrupoCollectorObj->showGrupo() as $c){
  echo "<div>";
  echo "ID:".$c->getId()."<br>";
 echo "NombreGrupo: ".$c->getNombre()."<br>";
	echo "Descripcion:" .$c->getDescripcion()."<br>"."<br>";                                   
  echo "</div>"; 
}


?>
