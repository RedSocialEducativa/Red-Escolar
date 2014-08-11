<?php

include_once('notificaciones.php');
include_once('Collector.php');

class NotificacionCollector extends Collector
{
  
  function showNotificacion() {
    $rows = self::$db->getRows("SELECT * FROM notificacion ");        
    $arrayNotificacion= array();        
    foreach ($rows as $c){
      $aux = new notificaciones($c{'id'},$c{'descripcion'});
      array_push($arrayNotificacion, $aux);
    }
    return $arrayNotificacion;        
  }

}
?>

