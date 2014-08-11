<?php
include_once("PersonaCollector.php");

$id =1;


$PersonaCollectorObj = new PersonaCollector();

foreach ($PersonaCollectorObj->showPersona() as $c){
   echo "<div>";
  echo "ID:".$c->getId()."<br>";
  echo "PrimerNombre: ".$c->getPrimerNombre()."<br>";
   echo "SegundoNombre: ".$c->getSegundoNombre()."<br>";
    echo "PrimerApellido: ".$c->getPrimerApellido()."<br>";
   echo "SegundoApellido: ".$c->getSegundoApellido()."<br>";
    echo "FechaNacimiento: ".$c->getFechaNacimiento()."<br>";
	echo "Profesion:" .$c->getProfesion()."<br>";
	 echo "Ciudad: ".$c->getCiudad()."<br>";
   echo "Genero: ".$c->getGenero()."<br>"."<br>";                                   
  echo "</div>"; 
  
}


?>
