	<?php
include_once("session.php");
  $sesion= new session();
  $id = $sesion->conectar();
  $apellidos = $sesion->devolverApellido();
  $ciudad = $sesion->devolverCiudad();
  $colegio = $sesion->devolverColegio();
  $profesion = $sesion->devolverProfesion();
?>

  <div class="container theme-showcase" role="main">

    <div class="jumbotron">
     
      <div class="row">
        <div class="col-sm-8">

      		 <div class="well">
              
              <p> 
                <?php
                include("imagenCollector.php");
                      $ImagenCollectorObj = new imagenCollector();
                      $ImagenCollectorObj->ver($id);

                echo $_SESSION['nombre']. "<br>";
                 echo $apellidos. "<br>". "<br>";
                echo "Vivo en: ". $ciudad . "<br>"; 
                echo "Unidad Educativa: ".$colegio. "<br>";
                 echo "Profesion: ". $profesion. "<br>";
                ?>
                  
                          </p>
            </div>
       

         <div class="well">
      <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form">
                <p>
                 Publicación: <input type="text" name="texto"  />
                </p><input type="submit" value="Publicar" />

               </form>  
            <?php
            
            $valor=$_POST["texto"];
             $valor1=$nombre;
            include_once("PublicacionCollector.php");
                $PublicacionCollectorObj = new PublicacionCollector();
               
            $PublicacionCollectorObj->createPublicacion($valor,$valor1);
            echo $PublicacionCollectorObj->mostrarDatos($nombre);
            
            
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
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
