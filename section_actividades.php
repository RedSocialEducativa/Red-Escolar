<?php
echo <<< HERE
  <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
     
      <div class="row">
        <div class="col-sm-8">
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#">Mis archivos</a></li>
        <li><a href="#">Archivos Compartidos</a></li>
        <li><a href="#">Eliminados</a></li>
      </ul>
         <div class="well">

          <p><img src="PNG/upload.png"/>Subir Archivo  <img src="PNG/folder.png"/>Subir Carpeta</p>
          
          <ul >
          <li ><p>-------------------------------------------------------------------------------</p></li>
        <li ><p><img src="PNG/chart.png"/>Estudios de mercado</p></li>
        <li><p><img src="PNG/document.png"/>Encuesta</p></li>
        <li><p><img src="PNG/video.png"/>Tutorial de quimica</p></li>
         <li ><p><img src="PNG/photo.png"/>Grupo Vocal</p></li>
        <li><p><img src="PNG/box.png"/>Deber.rar</p></li>
        <li><p><img src="PNG/music.png"/>Grabacion de clase.mp3</p></li>
      
      </ul>

         </div>



        </div><!-- /.col-sm-4 -->
        
        <div class="col-sm-4">
        
          <!--CHAT-->
          <div class="panel panel-primary">
            <div class="panel-heading">
         
             <h2 class="panel-title" type="submit" name="chat"><a href="perfil.php">Chat <span class="badge">   10</span></a></h2>
            </div>
            <div class="panel-body">
           
              <ul >
          <li><a href="perfil.php"><img src="images/thumb1.jpg"/>Luis Mendez</a></li>
            <br><li><a href="perfil.php"><img src="images/thumb2.jpg"/>Mateo Vera</a></li>
            <br><li><a href="perfil.php"><img src="images/thumb3.jpg"/>Daniel Calderon</a></li>
            <br><li><a href="perfil.php"><img src="images/thumb1.jpg"/>Daniel Calderon</a></li>
            <br><li><a href="perfil.php"><img src="images/thumb3.jpg"/>Daniel Calderon</a></li>
            
        </ul>
            </div>
          </div>

        </div><!-- /.col-sm-4 -->
      </div>

      </div>
</div>
       
     

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
HERE;
?>
