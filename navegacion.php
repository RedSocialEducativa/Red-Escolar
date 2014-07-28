<?php
echo <<< HERE
   <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#">Keepin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="mensajes.php">Mensaje</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actividades <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="grupos.php">Grupos</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="contactos.php">Contactos</a></li>
                 <li><a href="actividades.php">Mis archivos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">Cuenta<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="configuracion.php">Configuracion de Cuenta</a></li>
                <li><a href="editar.php">Editar Perfil</a></li>
                <li class="divider"></li>
                <li><a href="index.php">Desactivar Cuenta</a></li>
              </ul>
            </li> 
            <li><a href="notificacion.php">Notificacion</a></li> 
            <li><a href="index.php">Salir</a></li>
            <li><a href="#contact"><input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}"></a></li>
             <li><a href="#contact"> <div id="search"></a></li>
            <li><a href="#contact"> <div class="button-search"></div></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/container -->
    </div>
HERE;
?>
