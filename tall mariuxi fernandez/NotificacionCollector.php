<?php

include_once('notificaciones.php');
include_once('Collector.php');

class NotificacionCollector extends Collector
{
  
  function showNotificacion() {
    $rows = self::$db->getRows("SELECT * FROM notificaciones ");        
    $arrayNotificacion= array();        
    foreach ($rows as $c){
      $aux = new notificaciones($c{'id'},$c{'idPerfil'},$c{'texto'},$c{'status'});
      array_push($arrayNotificacion, $aux);
    }
    return $arrayNotificacion;        
  }

}
?>

