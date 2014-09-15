<?php
include_once('perfilObjeto.php');
include_once('Collector.php');

class PerfilCollector extends Collector
{
	//Muestra el contenido de la tabla perfil
	function showPerfil($id) {
		$rows = self::$db->getRows("SELECT * FROM perfil WHERE id= '".$id."'");        
		$arrayPerfil= array();        
		foreach ($rows as $c){
		$aux = new perfil($c{'id'},$c{'nombre'},$c{'apellido'},$c{'ciudad'}
      	,$c{'colegio'},$c{'profesion'},$c{'correo'},$c{'contrasena'},$c{'imagen_id'},$c{'amigo_id'});
		array_push($arrayPerfil, $aux);
		}
    return $arrayPerfil;        
	}

	//Permite crear un perfil
	function crearPerfil($nombre, $apellido, $ciudad, $colegio, $profesion, $correo, $contrasena,$imagen_id,$amigo_id) { 
	$insertrow = self::$db->insertRow("INSERT INTO proyecto.perfil (id, nombre, apellido, ciudad, colegio, profesion, correo, contrasena, imagen_id,amigo_id) 
	VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)", array(null, "{$nombre}", "{$apellido}", "{$ciudad}", "{$colegio}", "{$profesion}", "{$correo}", "{$contrasena}", "{$imagen_id}", "{$amigo_id}"));        
	}

	//Lee los datos correspondiente a la tabla perfil
	function readPerfil() {
		$rows = self::$db->getRows("SELECT * FROM perfil ");        
		$arrayPerfil= array();        
		foreach ($rows as $c){
		$aux = new perfil($c{'id'},$c{'nombre'},$c{'apellido'},$c{'ciudad'}
      	,$c{'colegio'},$c{'profesion'},$c{'correo'},$c{'contrasena'},$c{'imagen_id'},$c{'amigo_id'});
		array_push($arrayPerfil, $aux);
		}
    return $arrayPerfil;        
	}
  
  	//Actualiza los datos de la tabla perfil
	function updatePerfil($id,$nombre,$apellido,$ciudad,$colegio,$profesion,$correo,$contrasena,$imagen_id,$amigo_id) {    
		$insertrow = self::$db->updateRow("UPDATE proyecto.perfil SET perfil.nombre = ?,perfil.apellido = ? ,perfil.ciudad = ?,perfil.colegio = ?,
         perfil.profesion = ?, perfil.correo = ?, perfil.contrasena = ?, perfil.imagen_id = ?, perfil.amigo_id = ? WHERE perfil.id = ? ", array( "{$nombre}","{$apellido}","{$ciudad}","{$colegio}",
            "{$profesion}","{$correo}","{$contrasena}","{$imagen_id}","{$amigo_id}",$id));
	}  

	//Elimina un regidtro de la tabla mediante el id
	function deletePerfil($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM proyecto.perfil WHERE id= ?", array("{$id}"));
	}  
	
	//Valida el correo y contraseña al ingresar sesion
  	function session($correo,$contrasena){
	$conex = $conex = mysql_connect("localhost", "root", "root")
			or die("No se pudo realizar la conexion");
		mysql_select_db("proyecto",$conex)
			or die("ERROR con la base de datos");

	//Realiza la consulta de correo y contraseña y verifica que el usuario este registrado en la base de datos
	if (!isset($_SESSION)) {
	  session_start();
	}
	$consulta= "SELECT * FROM perfil WHERE correo='".$correo."' AND contrasena='".$contrasena."'"; 
	$resultado= mysql_query($consulta,$conex) or die (mysql_error());
	$fila=mysql_fetch_array($resultado);


	if (!$fila[0]) 
	{
		echo '<script language = javascript>
		alert("Usuario o Password errados, por favor verifique.")
		self.location = "index.php"
		</script>';
	}
	else //opcion2: Usuario logueado correctamente
	{
		//Definimos las variables de sesión y redirigimos a la página de usuario
		$_SESSION['id'] = $fila['id'];
		$_SESSION['nombre'] = $fila['nombre'];
		header("Location: inicio.php");
	}
  	}

  	//Permite visualizar la imagen correspondiente al perfil
  	 function mostrarDatos($id){
		    $conexion=mysql_connect('localhost','root','root');
		 mysql_select_db('proyecto',$conexion);
		  
		 $consulta_mysql="select perfil.nombre,imagenes.imagen_id
		                     from perfil
		                         inner join imagenes on perfil.imagen_id=imagenes.imagen_id and imagenes.imagen_id !='$id'";
		 $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
		  
		 while($fila=mysql_fetch_array($resultado_consulta_mysql)){
		 	include_once("imagenCollector.php");
								$ImagenCollectorObj = new imagenCollector();
							
		  echo "Usuario: ".$fila['nombre']."<br>"."<br>".$ImagenCollectorObj->ver($fila['imagen_id'])."<br>"."<br>";
		 }
		  }  

		  //Presenta los respectivos amigos que tiene dicho perfil
		 function mostrarAmigos($id){
		    $conexion=mysql_connect('localhost','root','root');
		 mysql_select_db('proyecto',$conexion);
		  
		 //  Consulta Mysql donde aplicamos INNER JOIN
		 $consulta_mysql="select nombre,imagen_id
		                     from perfil
		                         where amigo_id like'$id'";
		 $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
		  
		 //  Navegamos cada fila que devuelve la consulta mysql y la imprimimos en pantalla
		 while($fila=mysql_fetch_array($resultado_consulta_mysql)){
		 	include_once("imagenCollector.php");
								$ImagenCollectorObj = new imagenCollector();
							
		  echo "Usuario: "."<a href=perfil.php>".$fila['nombre']."</a>"
		  ."<br>".$ImagenCollectorObj->ver($fila['imagen_id'])
		  ."<br><br><br><br>";
		 }
		  }  
		  	
  	}
?>