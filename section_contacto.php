<?php
include_once("session.php");
  $sesion= new session();
  $id = $sesion->conectar();
  $apellidos = $sesion->devolverApellido();
  $nombre = $sesion->devolverNombre();
  
?>
	<div class="container theme-showcase" role="main">
  <div class="jumbotron">
     
      <div class="row">
        <div class="col-sm-8">
        	<p>Amigos</p>
			<div class="well">
	        	<?php
          include_once("PerfilCollector.php");
                $PerfilCollectorObj = new PerfilCollector();
      
          echo $PerfilCollectorObj->mostrarAmigos($id); 
          
          ?><br>    		
	       	</div>

	       


	</div>

    </div>

    </div>
	</div>
       
     

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

