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

          <!--
          <li class="<?php //echo $pagina == 'cuadraturas.php' ? 'active' : ('#' ? 'active' : '');
                      ?>">
            <a href="alertas_diferencias.php" class="dropdown-toggle">
              <i class="fa fa-bell"></i>
              <span>Alertas y Diferencias</span>
              <i class="fa fa-angle-right drop-icon"></i>
            </a>
            <ul class="submenu">
			        <li>
                <a href="alertas_acumuladas.php" class="<?php //echo $pagina == 'alertas_acumuladas.php' ? 'active' : '';
                                                        ?>">
                  Acumuladas
                </a>
              </li>
			        <li>
                <a href="alertas_diferencias.php" class="<?php //echo $pagina == 'alertas_diferencias.php' ? 'active' : '';
                                                          ?>">
                  SATIF VS EECC
                </a>
              </li>
			        <li>
                <a href="graficos_periodos.php" class="<?php //echo $pagina == 'graficos_periodos.php' ? 'active' : '';
                                                        ?>">
                  Gráficos Períodos
                </a>
              </li>			  
            </ul>
          </li>
        -->
          <?php if( $_SESSION["perfil"]=="Administrador"  ){?>
          <li class="<?php echo $pagina == 'post_facturacion.php' ? 'active' : ''; ?>">
            <a href="administracion_reglas.php">
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

          <?php if( $_SESSION["perfil"]=="Administrador" ||  $_SESSION["perfil"]=="Auditor"  ){?>
          <li class="<?php echo $pagina == 'estadisticas.php' ? 'active' : ''; ?>">
            <a href="auditoria.php">
              <i class="fa fa-line-chart"></i>
              <div style="margin-left: 30px;">Auditoría</div>
            </a>
          </li>
          <? } ?>
          
          <?php if( $_SESSION["perfil"]=="Administrador" || $_SESSION["perfil"] == "Monitor" ){?>
            <li class="<?php echo $pagina == 'estadisticas.php' ? 'active' : ''; ?>">
              <a href="monitoreo.php">
                <i class="fa fa-pie-chart"></i>
                <div style="margin-left: 30px;">Monitoreo</div>
              </a>
            </li>
          <? } ?>
          
          <?php if( $_SESSION["perfil"]=="Administrador" ||  $_SESSION["perfil"]=="Auditor" || $_SESSION["perfil"] == "Monitor" ){?>
            <li class="<?php echo $pagina == 'estadisticas.php' ? 'active' : ''; ?>">
              <a href="configuraciones.php">
                <i class="fa fa-cog"></i>
                <div style="margin-left: 30px;">Configuraciones</div>
              </a>
            </li>
          <? } ?>

          <?php if( $_SESSION["perfil"]=="Administrador"  ){?>
          <li class="<?php echo $pagina == 'estadisticas.php' ? 'active' : ''; ?>">
            <a href="estadisticas.php">              
              <i class="fa fa-users"></i>
              <div style="margin-left: 30px;">Administración de <br>Usuarios</div>
            </a>
          </li>
          <? } ?>

          <li>
            <a href="salir.php">
              <i class="fa fa-power-off"></i>
              <span>Cerrar Sesión</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <div id="nav-col-submenu"></div>
</div>