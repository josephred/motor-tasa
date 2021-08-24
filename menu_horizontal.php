<header class="navbar" id="header-navbar">
  <div class="container"><div>
    <a href="index.php" id="logo" class="navbar-brand">
    <img src="img/logo-lapolar.png" style="" align="left"> 
    <p style="font-size:28; margin-top: 5px;">La Polar</p></a></div>
    <div class="clearfix">
      <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="fa fa-bars"></span>
      </button>
      <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
        <ul class="nav navbar-nav pull-left">
          <li>
            <a class="btn" id="make-small-nav">
              <i class="fa fa-bars"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="nav-no-collapse pull-right" id="header-nav">
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown profile-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  <img src="img/samples/icono_mujer.png" width="">
              <span class="hidden-xs"><?php echo $_SESSION['nombre'] ?> / <?php echo $_SESSION['perfil'] ?></span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="mi_perfil.php"><i class="fa fa-address-card-o"></i>Mi Perfil</a></li>
            </ul>
          </li>
          <li class="hidden-xxs">
            <a class="btn" href="salir.php">
              <i class="fa fa-power-off"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
