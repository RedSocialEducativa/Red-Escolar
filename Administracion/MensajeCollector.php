<?php

include_once('mensaje.php');
include_once('Collector.php');

class MensajeCollector extends Collector
{
  
  function showMensaje($id) {
    $rows = self::$db->getRows("SELECT * FROM mensaje WHERE id= '".$id."'");        
    $arrayMensaje= array();        
    foreach ($rows as $c){
      $aux = new mensaje($c{'id'},$c{'texto'},$c{'nombrePerfilFK'});
      array_push($arrayMensaje, $aux);
    }
    return $arrayMensaje;        
  }

  function createMensaje($texto,$nombrePerfilFK) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.mensaje (id, texto, nombrePerfilFK) VALUES (?, ?, ?)", array(null, "{$texto}", "{$nombrePerfilFK}"));
  }  

  function readMensaje($p1,$p2) {
    $rows = self::$db->getRows("SELECT * FROM mensaje  LIMIT $p1,$p1");        
    $arrayMensaje= array();        
    foreach ($rows as $c){
      $aux = new mensaje($c{'id'},$c{'texto'},$c{'nombrePerfilFK'});
      array_push($arrayMensaje, $aux);
    }
    return $arrayMensaje;        
  }
   function readMensaje2() {
    $rows = self::$db->getRows("SELECT * FROM mensaje ");        
    $arrayMensaje= array();        
    foreach ($rows as $c){
      $aux = new mensaje($c{'id'},$c{'texto'},$c{'nombrePerfilFK'},$c{'idImagenFK'});
      array_push($arrayMensaje, $aux);
    }
    return $arrayMensaje;        
  }
  
  function updateMensaje($id,$texto,$status) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.mensaje SET mensaje.texto = ?, mensaje.nombrePerfilFK = ?, mensaje.idImagenFK = ?  WHERE mensaje.id = ? ",
     array( "{$texto}", "{$nombrePerfilFK}","{$idImagenFK}",$id));
    }

  function deleteMensaje($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.mensaje WHERE id= ?", array("{$id}"));
  }

  function mostrarDatos($nombre){
  

    $conexion=mysql_connect('localhost','root','root');
 mysql_select_db('proyecto',$conexion);
  
 $consulta_mysql="select mensaje.texto,perfil.nombre
                     from mensaje
                         inner join perfil on mensaje.nombrePerfilFK=perfil.nombre and mensaje.nombrePerfilFK !='$nombre'";
 $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
  
 while($fila=mysql_fetch_array($resultado_consulta_mysql)){
   echo "Usuario: ".$fila['nombre']."<br>"." Mensajes: ".$fila['texto']."<br>"."<br>";
 }
  }  
}
?>