<?php
$url = $_SERVER["REQUEST_URI"];
$pagina = str_replace("/", "", $url);
?>
<div id="nav-col">
  <section id="col-left" class="col-left-nano">
    <div id="col-left-inner" class="col-left-nano-content">
      <div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown hidden">
        <img src="img/samples/icono_mujer.png" width="">
        <div class="user-box">
          <span class="status">
            <i class="fa fa-circle"></i> Online
          </span>
        </div>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
        <ul class="nav nav-pills nav-stacked">
          <li class="nav-header nav-header-first hidden-sm hidden-xs">
            Menú de navegación
          </li>

          <li class="<?php echo $pagina == 'index.php' ? 'active' : ''; ?>">
            <a href="index.php">
              <i class="fa fa-home"></i>
              <span>Panel</span>
            </a>
          </li>


          <?php if( $_SESSION["perfil"]=="Administrador"  ){?>
          <li class="<?php echo $pagina == 'post_facturacion.php' ? 'active' : ''; ?>">
            <a href="reglas_de_negocio.php">
              <i class="fa fa-user"></i>
              <div style="margin-left: 30px;">Administración de Reglas de Negocio<br></div>
            </a>
          </li>
          <?php }?>

          <?php if( $_SESSION["perfil"]=="Administrador"  ){?>
          <li class="<?php echo $pagina == 'frecuencia_gasto_administracion.php' ? 'active' : ''; ?>">
            <a href="administracion_tasas.php">
              <i class="fa fa-money"></i>
              <div style="margin-left: 30px;">Administración de Tasas</div>
            </a>
          </li>
          <?php } ?>



         
        </ul>
      </div>
    </div>
  </section>
  <div id="nav-col-submenu"></div>
</div>
