<?php

include_once('persona.php');
include_once('Collector.php');

class PersonaCollector extends Collector
{
  
  function showPersona() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new persona($c{'id'},$c{'primerNombre'},$c{'segundoNombre'},$c{'primerApellido'},$c{'segundoApellido'}
      	,$c{'fechaNacimiento'},$c{'profesion'},$c{'ciudad'},$c{'genero'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }

}
?>

