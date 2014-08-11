<?php
include_once("RecordatorioCollector.php");

$id =1;


$RecordatorioCollectorObj = new RecordatorioCollector();

foreach ($RecordatorioCollectorObj->showRecordatorio() as $c){
   echo "<div>";
  echo "ID:".$c->getId()."<br>";
  echo "Descripcion: ".$c->getDescripcion()."<br>";
   echo "FechaEvento: ".$c->getFechaEvento()."<br>";
    echo "HoraInicio: ".$c->getHoraInicio()."<br>";
   echo "HoraFinal: ".$c->getHoraFinal()."<br>"."<br>";                                   
  echo "</div>"; 
  
}


?>
