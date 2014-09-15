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
		        	<p></p>
					<div class="well">
			        	<p><br> 
				        	<?php
								include_once("MensajeCollector.php");
								$MensajeCollectorObj = new MensajeCollector();
								include_once("imagenCollector.php");
								$ImagenCollectorObj = new imagenCollector();
								$ImagenCollectorObj->ver($id);
		
							?>
						</p>
			        	
					       <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form">
							
								<p>
								<?php echo $_SESSION['nombre']. "<br>";
						           echo $apellidos. "<br>". "<br>". "<br>"; ?>    
								
								Para: <input type="text" name="nombrePerfilFK"  /><br><br>
								
								Mensaje: <input type="text" name="texto"  />
								</p><input type="submit" value="Enviar" />

							 </form>	
					  <?php
					  
					  $valor=$_POST["texto"];
					   $valor1=$_POST["nombrePerfilFK"];
					  
					  $MensajeCollectorObj->createMensaje($valor,$valor1);
					  echo $MensajeCollectorObj->mostrarDatos($nombre);
					  
					  
						?>
			       	</div>

			    </div>   
		 <div class="col-sm-4">
       

          <!--CHAT-->
          <div class="panel panel-primary">
            <div class="panel-heading">
         
             <h2 class="panel-title" type="submit" name="chat"><a href="perfil.php"><img src="iconos/chat.png"/>Chat </a></h2>
            </div>
            <div class="panel-body">
           
              <ul >
          <?php
          include_once("PerfilCollector.php");
                $PerfilCollectorObj = new PerfilCollector();
      
          echo $PerfilCollectorObj->mostrarAmigos($id); ?>
            
        </ul>
            </div>
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

