<?php

include_once('usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuario() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new usuario($c{'id'},$c{'correoElectronico'},$c{'password'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

}
?>

