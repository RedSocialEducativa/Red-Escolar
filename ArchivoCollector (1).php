<?php

include_once('archivo.php');
include_once('Collector.php');

class ArchivoCollector extends Collector
{
  
  function showArchivo() {
    $rows = self::$db->getRows("SELECT * FROM archivo");        
    $arrayArchivo= array();        
    foreach ($rows as $c){
      $aux = new archivo($c{'id'},$c{'descripcion'});
      array_push($arrayArchivo, $aux);
    }
    return $arrayArchivo;        
  }

}
?>

