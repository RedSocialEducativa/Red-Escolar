<?php

include_once('imagenObjeto.php');
include_once('Collector.php');

class ImagenCollector extends Collector
{
  
  function showImagen() {
    $rows = self::$db->getRows("SELECT * FROM imagenes");        
    $arrayImagen= array();        
    foreach ($rows as $c){
      $aux = new imagen($c{'imagen_id'},$c{'imagen'});
      array_push($arrayImagen, $aux);
    }
    return $arrayImagen;        
  }

  function createImagen($imagen) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.imagenes (imagen_id, imagen) VALUES (?, ?)", array(null, "{$imagen}"));
  } 

  function insertar(){
     $insertrow = self::$db->insertRow("INSERT INTO proyecto.imagenes (imagen) VALUES ('$nombre')") ;
        
  } 

  function readImagen($p1,$p2) {
    $rows = self::$db->getRows("SELECT * FROM imagenes  LIMIT $p1,$p1");        
    $arrayImagen= array();        
    foreach ($rows as $c){
      $aux = new imagen($c{'imagen_id'},$c{'imagen'});
      array_push($arrayImagen, $aux);
    }
    return $arrayImagen;        
  }
   function readImagen2() {
    $rows = self::$db->getRows("SELECT * FROM imagenes ");        
    $arrayImagen= array();        
    foreach ($rows as $c){
      $aux = new imagen($c{'imagen_id'},$c{'imagen'});
      array_push($arrayImagen, $aux);
    }
    return $arrayImagen;        
  }
   function updateImagen($imagen_id,$imagen) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.imagenes SET imagenes.imagen = ? WHERE mensaje.imagen_id = ? ", array( "{$imagen_id}",$id));
    }

  function deleteImagen($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.perfil WHERE id= ?", array("{$id}"));
  } 

  function ver($id){
     
    mysql_connect("localhost", "root", "root") or die(mysql_error()) ;
      mysql_select_db("proyecto") or die(mysql_error()) ;

    
     $consulta = "SELECT imagen FROM imagenes WHERE imagen_id = $id";
     $resultado= @mysql_query($consulta) or die(mysql_error());

     $datos = @mysql_fetch_assoc($resultado);
     $ruta = "imagenes/" . $datos['imagen'];

    echo "<img src='$ruta' / width=30%, heigth=30% align=left>";   
  }

   function ver_todas(){
    
      mysql_connect("localhost", "root", "root") or die(mysql_error()) ;
      mysql_select_db("proyecto") or die(mysql_error()) ;

      $consulta = "SELECT imagen FROM imagenes";
      $resultado= @mysql_query($consulta) or die(mysql_error());
      while ($datos = @mysql_fetch_assoc($resultado) ){
        $ruta = "imagenes/" . $datos['imagen'];
       echo "<img src='$ruta' / width=30%, heigth=30%>";
      } 
  }

  
}
?>
  