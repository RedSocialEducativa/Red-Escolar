<?php

include_once('mensaje.php');
include_once('Collector.php');

class MensajeCollector extends Collector
{
  
  function showMensaje() {
    $rows = self::$db->getRows("SELECT * FROM mensaje ");        
    $arrayMensaje= array();        
    foreach ($rows as $c){
      $aux = new mensaje($c{'id'},$c{'descripcion'});
      array_push($arrayMensaje, $aux);
    }
    return $arrayMensaje;        
  }

}
?>

