<?php

include_once('mensaje.php');
include_once('Collector.php');

class MensajeCollector extends Collector
{
  
  function showMensaje() {
    $rows = self::$db->getRows("SELECT * FROM mensaje ");        
    $arrayMensaje= array();        
    foreach ($rows as $c){
      $aux = new mensaje($c{'id'},$c{'texto'},$c{'status'});
      array_push($arrayMensaje, $aux);
    }
    return $arrayMensaje;        
  }

  function createMensaje($texto,$status) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.mensaje (id, texto, status) VALUES (?, ?, ?)", array(null, "{$texto}", "{$status}"));
  }  

  function readMensaje() {
    $rows = self::$db->getRows("SELECT * FROM mensaje ");        
    $arrayMensaje= array();        
    foreach ($rows as $c){
      $aux = new mensaje($c{'id'},$c{'texto'},$c{'status'});
      array_push($arrayMensaje, $aux);
    }
    return $arrayMensaje;        
  }
  
  function updateMensaje($id,$texto,$status) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.mensaje SET mensaje.texto = ?, mensaje.status = ?  WHERE mensaje.id = ? ", array( "{$texto}", "{$status}",$id));
    }

  function deleteMensaje($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.mensaje WHERE id= ?", array("{$id}"));
  }  
}
?>