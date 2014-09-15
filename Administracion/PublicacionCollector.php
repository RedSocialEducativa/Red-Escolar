<?php

include_once('publicacion.php');
include_once('Collector.php');

class PublicacionCollector extends Collector
{
  
  function showPublicacion($id) {
    $rows = self::$db->getRows("SELECT * FROM publicacion WHERE id= '".$id."'");        
    $arrayPublicacion= array();        
    foreach ($rows as $c){
      $aux = new publicacion($c{'id'},$c{'texto'},$c{'nombrePerfilFK'});
      array_push($arrayPublicacion, $aux);
    }
    return $arrayPublicacion;        
  }

  function createPublicacion($texto,$nombrePerfilFK) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.publicacion (id, texto, nombrePerfilFK) VALUES (?, ?, ?)", 
      array(null, "{$texto}", "{$nombrePerfilFK}"));
  }  

  function readPublicacion($p1,$p2) {
    $rows = self::$db->getRows("SELECT * FROM publicacion  LIMIT $p1,$p1");        
    $arrayPublicacion= array();        
    foreach ($rows as $c){
      $aux = new publicacion($c{'id'},$c{'texto'},$c{'nombrePerfilFK'});
      array_push($arrayPublicacion, $aux);
    }
    return $arrayPublicacion;        
  }
   function readPublicacion2() {
    $rows = self::$db->getRows("SELECT * FROM publicacion ");        
    $arrayPublicacion= array();        
    foreach ($rows as $c){
      $aux = new publicacion($c{'id'},$c{'texto'},$c{'nombrePerfilFK'});
      array_push($arrayPublicacion, $aux);
    }
    return $arrayPublicacion;        
  }
  
  function updatePublicacion($id,$texto,$status) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.publicacion SET publicacion.texto = ?, publicacion.nombrePerfilFK = ? WHERE publicacion.id = ? ",
     array( "{$texto}", "{$nombrePerfilFK}",$id));
    }

  function deletePublicacion($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.publicacion WHERE id= ?", array("{$id}"));
  }

  function mostrarDatos($nombre){
    $conexion=mysql_connect('localhost','root','root');
 mysql_select_db('proyecto',$conexion);
  
  $consulta_mysql="select publicacion.texto,perfil.nombre
                     from publicacion
                         inner join perfil on publicacion.nombrePerfilFK=perfil.nombre and publicacion.nombrePerfilFK !='$nombre'";
 $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
  
  while($fila=mysql_fetch_array($resultado_consulta_mysql)){
   echo "Usuario: ".$fila['nombre']."<br>"." Mensajes: ".$fila['texto']."<br>"."<br>";
        
 }
  }  
}
?>