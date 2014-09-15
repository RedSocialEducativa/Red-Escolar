<?php 
class session{
	function conectar(){
		
	$conex = mysql_connect("localhost", "root", "root") or die("No se pudo realizar la conexion");
		  mysql_select_db("proyecto",$conex)or die("ERROR con la base de datos");
		//Iniciar Sesión
		@session_start();
		//Validar si se está ingresando con sesión correctamente
		if (!$_SESSION){
		echo '<script language = javascript>
		alert("usuario no autenticado")
		self.location = "index.php"
		</script>';
		}

		$id = $_SESSION['id'];
		return $id;
	}

	function devolverApellido(){
		$conex = mysql_connect("localhost", "root", "root") or die("No se pudo realizar la conexion");
		  mysql_select_db("proyecto",$conex)or die("ERROR con la base de datos");
	//iniciar Sesión
		@session_start();
		//Validar si se está ingresando con sesión correctamente
		if (!$_SESSION){
		echo '<script language = javascript>
		alert("usuario no autenticado")
		self.location = "index.php"
		</script>';
		}

		$id = $_SESSION['id'];

		$consulta= "SELECT apellido FROM perfil WHERE id='".$id."'"; 
		$resultado= mysql_query($consulta,$conex) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
		$apellidos = $fila['apellido'];
		return $apellidos;
	}
	function devolverCiudad(){
		$conex = mysql_connect("localhost", "root", "root") or die("No se pudo realizar la conexion");
		  mysql_select_db("proyecto",$conex)or die("ERROR con la base de datos");
	
		//Iniciar Sesión
		@session_start();
		//Validar si se está ingresando con sesión correctamente
		if (!$_SESSION){
		echo '<script language = javascript>
		alert("usuario no autenticado")
		self.location = "index.php"
		</script>';
		}

		$id = $_SESSION['id'];

		$consulta= "SELECT ciudad FROM perfil WHERE id='".$id."'"; 
		$resultado= mysql_query($consulta,$conex) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
		$ciudad = $fila['ciudad'];
		return $ciudad;
	}
	function devolverColegio(){
		$conex = mysql_connect("localhost", "root", "root") or die("No se pudo realizar la conexion");
		  mysql_select_db("proyecto",$conex)or die("ERROR con la base de datos");
		//Iniciar Sesión
		@session_start();
		//Validar si se está ingresando con sesión correctamente
		if (!$_SESSION){
		echo '<script language = javascript>
		alert("usuario no autenticado")
		self.location = "index.php"
		</script>';
		}

		$id = $_SESSION['id'];

		$consulta= "SELECT colegio FROM perfil WHERE id='".$id."'"; 
		$resultado= mysql_query($consulta,$conex) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
		$colegio = $fila['colegio'];
		return $colegio;
	}
	function devolverProfesion(){
		$conex = mysql_connect("localhost", "root", "root") or die("No se pudo realizar la conexion");
		  mysql_select_db("proyecto",$conex)or die("ERROR con la base de datos");
	
		@session_start();
		//Validar si se está ingresando con sesión correctamente
		if (!$_SESSION){
		echo '<script language = javascript>
		alert("usuario no autenticado")
		self.location = "index.php"
		</script>';
		}

		$id = $_SESSION['id'];

		$consulta= "SELECT profesion FROM perfil WHERE id='".$id."'"; 
		$resultado= mysql_query($consulta,$conex) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
		$profesion = $fila['profesion'];
		return $profesion;
	}
	function devolverNombre(){
		$conex = mysql_connect("localhost", "root", "root") or die("No se pudo realizar la conexion");
		  mysql_select_db("proyecto",$conex)or die("ERROR con la base de datos");
	//Iniciar Sesión
		@session_start();
		//Validar si se está ingresando con sesión correctamente
		if (!$_SESSION){
		echo '<script language = javascript>
		alert("usuario no autenticado")
		self.location = "index.php"
		</script>';
		}

		$id = $_SESSION['id'];

		$consulta= "SELECT nombre FROM perfil WHERE id='".$id."'"; 
		$resultado= mysql_query($consulta,$conex) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
		$nombre = $fila['nombre'];
		return $nombre;
	}
}
?>	