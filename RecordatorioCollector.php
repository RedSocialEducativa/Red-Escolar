<?php

include_once('recordatorio.php');
include_once('Collector.php');

class RecordatorioCollector extends Collector
{
  
  function showRecordatorio() {
    $rows = self::$db->getRows("SELECT * FROM recordatorio");        
    $arrayRecordatorio= array();        
    foreach ($rows as $c){
      $aux = new recordatorio($c{'id'},$c{'descripcion'},$c{'fechaEvento'},$c{'horaInicio'},$c{'horaFinal'});
      array_push($arrayRecordatorio, $aux);
    }
    return $arrayRecordatorio;        
  }

}
?>

