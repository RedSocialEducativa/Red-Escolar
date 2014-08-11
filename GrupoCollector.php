<?php

include_once('grupo.php');
include_once('Collector.php');

class GrupoCollector extends Collector
{
  
  function showGrupo() {
    $rows = self::$db->getRows("SELECT * FROM grupo ");        
    $arrayGrupo= array();        
    foreach ($rows as $c){
      $aux = new grupo($c{'id'},$c{'nombre'},$c{'descripcion'});
      array_push($arrayGrupo, $aux);
    }
    return $arrayGrupo;        
  }

}
?>

