<? php
echo <<< HERE

<nav id="navegacion">
           <div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <form class="navbar-form navbar-left">
      <input type="text" class="form-control col-lg-8" placeholder="Search">
    </form>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
	<li class="active"><a class="navbar-brand" href="#">Inicio</a></li>
      <li><a href="#"><img src="images/noticias.png"/></a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><img src="images/perfil.png"/></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuraciones<b class="caret"></b></a>
      </li>
    </ul>
  </div>
</div>
</nav>   

HERE;
?>