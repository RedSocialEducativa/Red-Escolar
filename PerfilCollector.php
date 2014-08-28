<?php

include_once('perfils.php');
include_once('Collector.php');

class PerfilCollector extends Collector
{
  
  function showPersona() {
    $rows = self::$db->getRows("SELECT * FROM perfil ");        
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new persona($c{'id'},$c{'nombre'},$c{'apellido'},$c{'foto'},$c{'ciudad'}
      	,$c{'colegio'},$c{'profesion'},$c{'correo'},$c{'contraseña'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }
  function createPersona($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.perfil (id, nombre, apellido, foto, ciudad, colegio, profesion
	, correo, contraseña) VALUES (?, ?)", array(null, "{$nombre}","{$apellido}","{$foto}","{$ciudad}"
	,"{$colegio}","{$profesion}","{$correo}","{$contraseña}"));
  }  

  function readPersona() {
    $rows = self::$db->getRows("SELECT * FROM perfil ");        
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new perfil($c{'id'},$c{'nombre'},$c{'apellido',$c{'foto'},$c{'ciudad'}
      	,$c{'colegio'},$c{'profesion'},$c{'correo'},$c{'contraseña'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }
  
  function updatePersona($id,$nombre,$apellido,) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.perfil SET perfil.nombre = ?  WHERE perfil.id = ? ", array( "{$nombre}",$id));
  }  

  function deletePersona($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.perfil WHERE id= ?", array("{$id}"));
  }  



}
?>

