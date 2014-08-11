<?php
echo <<< HERE
	<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
     
      <div class="row">
        <div class="col-sm-8">

		 <div class="well">
        
        <p><img src="images/port1.jpg"/ align="left"> Grupo de Matematica
        <ul>
        <li><a href="#" type="submit" name="comentar"><img src="iconos/calendar68.png"/>Eventos</a><span class="badge">  2</span> </li>
       <li> <a href="#" type="submit" name="megusta"><img src="iconos/books8.png"/>Recursos</a><span class="badge">  2</span></li>
       </ul>
                    </p>
       </div>
       

         <div class="well">
     
        <form class="form-signin" role="form">
        <p>Publicacion</p>
        <input type="textarea" class="form-control" >
         <button type="button" class="btn btn-sm btn-primary"  type="submit" name="publicar">Publicar</button>
        
       </form></div>
       
        <div class="well">
     
        <p><a href="perfil.php">Maria Mjeia</a></p>
        
        <p><img src="images/port3.jpg"/ align="left">   En el lab 403CB se extravio un pendrive de color amarillo , favor de comunicarme si alguien ha encontrado mi pendrive comunicarse.</p>
       <a href="#" type="submit" name="comentar"><img src="iconos/comentar.png"/></a><span class="badge">  2</span> 
        <a href="#" type="submit" name="megusta"><img src="iconos/like3.png"/></a><span class="badge">  2</span>
       </div>
       
        <div class="well">
     
        <p><a href="perfil.php">Estefano Garcia</a></p>
        
        <p><img src="images/port2.jpg"/ align="left"> Chicos pilas!! que la proxima clase el profesor resolveras los ejercicios para la resolucion del examen.....</p>
      <a href="#" type="submit" name="comentar"><img src="iconos/comentar.png"/></a><span class="badge">  2</span> 
        <a href="#" type="submit" name="megusta"><img src="iconos/like3.png"/></a><span class="badge">  2</span>
        </div>
       
        </div><!-- /.col-sm-4 -->
        
        <div class="col-sm-4">
       

          <!--CHAT-->
          <div class="panel panel-primary">
            <div class="panel-heading">
         
            <h2 class="panel-title" type="submit" name="chat"><a href="perfil.php"><img src="iconos/chat.png"/>Chat <span class="badge">   10</span></a></h2>
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
