<?php
session_start();
$fecha_hoy = date("d-m-Y");
$era_hoy = date('Y');
// echo "<pre>";
// print_r($_SESSION);
?>
<style type="text/css">
  .ocultar {
    display: none;
    visibility: hidden;
  }

  .mostrar {
    display: block;
    visibility: visible;
  }
</style>
<!DOCTYPE html>
<html>
<?php include('head.php') ?>

<body>
  <div id="theme-wrapper">
    <?php include('menu_horizontal.php') ?>
    <div id="page-wrapper" class="container">
      <div class="row">
        <?php include('menu_vertical.php') ?>
        <div id="content-wrapper">
          <div class="row">

            <div class="col-lg-12">

              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <ol class="breadcrumb">
                      <li class="active"><a href="index.php">Panel</a></li>
                      <!-- <li class="active"><span>Administración de Tasas</span></li> -->
                    </ol>
                    <h1></h1>
                  </div>
                </div>
              </div>







              <div class="row">

                <!-- <div class="col-lg-4 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored orange-bg graficos_click" id="post_facturacion">
                    <i class="fa fa-desktop"></i>
                    <span class="headline">Canal Web</span>
                    </br>
                    <span></span><br />
                    <span>Usuarios afectados: 350</span>
                    <span></span><br />
                    <span>&nbsp;</span>
                  </div>
                </div> -->

                <div class="col-lg-4 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored orange-bg graficos_click" id="estadisticas">
                  <i class="fa fa-desktop fa-lg"></i>
                    <span class="headline">Canal WEB &nbsp; &nbsp; &nbsp; &nbsp; </span>
                    <span style="font-size: 48px; text-align: right; "> &nbsp; &nbsp; &nbsp; &nbsp;  49</span><br />
                    <span style="float: right;">Usuarios conectados &nbsp; &nbsp; </span>
                    <span></span>
                    <span>&nbsp;</span>
                  </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored green-bg graficos_click" id="estadisticas">
                    <i class="fa fa-mobile"></i>
                    <span class="headline">Canal APP Móvil &nbsp; &nbsp; </span>
                    <span style="font-size: 48px; text-align: right; "> &nbsp; &nbsp; &nbsp; &nbsp;  64</span><br />
                    <span style="float: right;">Usuarios conectados &nbsp; &nbsp; </span>
                    <span></span>
                    <span>&nbsp;</span>
                  </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored red-bg  graficos_click" id="alertas">
                    <i class="fa fa-bell"></i>
                    <span class="headline">Alertas y Diferencias</span>
                    </br>
                    <span>Fecha de Facturación: 04-11-2018</span>
                    <span>Total EECC: $160.383</span><br />
                    <span>Horario Término Malla: 09:00 hrs.</span>
                  </div>
                </div>
              </div>



              <table class="table table-hover">
                <tr>
                  <td>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="main-box">
                          <header class="main-box-header clearfix">
                            <h2 class="pull-left">Tasas más usadas</h2>
                          </header>
                          <div class="main-box-body clearfix">
                            <div class="row">
                              <div class="col-md-12">
                                <div id="donut-total-eecc" class="table-responsive"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="main-box">
                          <header class="main-box-header clearfix">
                            <h2 class="pull-left">Gráfico Barras - Total EECC</h2>
                          </header>
                          <div class="main-box-body clearfix">
                            <div class="row">
                              <div class="col-md-12">
                                <div id="bar-total-eecc" class="table-responsive"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="main-box">
                          <header class="main-box-header clearfix">
                            <h2 class="pull-left">Trasacciones últimos meses</h2>
                          </header>
                          <div class="main-box-body clearfix">
                            <div class="row">
                              <div class="col-md-12">
                                <div id="line-total-eecc" class="table-responsive"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </table>

            </div>
          </div>
          <?php include('footer.php'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php include('personalizacion.php'); ?>
  <a href="" class="hidden fancybox fancybox.iframe" id="popup">popup</a>
  <div class="md-overlay"></div>
  <script src="js/demo-skin-changer.js"></script>

  <script src="components/jquery/dist/jquery.min.js"></script>
  <script src="components/bootstrap/dist/js/bootstrap.js"></script>
  <script src="components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

  <script src="js/demo.js"></script>

  <script src="components/jquery-knob/dist/jquery.knob.min.js"></script>
  <script src="components/raphael/raphael.min.js"></script>
  <script src="components/morrisjs/morris.min.js"></script>

  <script src="components-custom/modal-animations/modernizr.custom.js"></script>
  <script src="components-custom/modal-animations//classie.js"></script>
  <script src="components-custom/modal-animations//modalEffects.js"></script>
  <script src="components/select2/dist/js/select2.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <!-- theme scripts -->
  <script src="js/scripts.js"></script>
  <script src="components/PACE/pace.min.js"></script>

  <script>
    $(document).ready(function() {

      $('body').on('click', '#alertas', function() {
        window.location = "alertas_diferencias.php";
      });

      $('body').on('click', '#post_facturacion', function() {
        window.location = "post_facturacion.php";
      });

      $('body').on('click', '#estadisticas', function() {
        window.location = "estadisticas.php";
      });


      $(".fancybox").fancybox({
        'modal': false,
        'type': 'iframe',
        'width': 1200,
        'height': 600,
        'transitionIn': 'none',
        'transitionOut': 'none',
        'overlayShow': true,
        'hideOnOverlayClick': 'true',
        'hideOnContentClick': 'false',
        'enableEscapeButton': true,
        'showCloseButton': true
      });



      //CHARTS
      graphBar = Morris.Bar({
        element: 'bar-total-eecc',
        data: [{
            y: '04-09',
            a: 159382,
            b: 158889,
            c: 493
          },
          {
            y: '04-10',
            a: 159032,
            b: 158319,
            c: 713
          },
          {
            y: '04-11',
            a: 160383,
            b: 159625,
            c: 758
          }
        ],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['SATIF', 'EECC', 'Diferencia'],
        formatter: function(y) {
          return y
        },
        resize: true
      });

      graphBar2 = Morris.Line({
        element: 'line-total-eecc',
        data: [{
            y: '04-09',
            a: 493
          },
          {
            y: '04-10',
            a: 713
          },
          {
            y: '04-11',
            a: 758
          }
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Promedio de conexiones diarias'],
        formatter: function(y) {
          return y
        },
        resize: true
      });

      graphBar3 = Morris.Donut({
        element: 'donut-total-eecc',
        data: [{
            label: "Tasas Base ",
            value: 10.31
          },
          {
            label: "Tasa Navidad",
            value: 69.69
          },
          {
            label: "Tasa 3",
            value: 20.00
          },
        ],

        colors: ['#e84e40', '#03a9f4', '#63b9a4'],
        formatter: function(y) {
          return y
        },
        resize: true
      });


      graphBar4 = Morris.Bar({
        element: 'bar-cargos-mes',
        data: [{
            y: '2018-09-04',
            a: 27086238279,
            b: 27070941551,
            c: 15296728
          },
          {
            y: '2018-10-04',
            a: 26501542896,
            b: 26490563442,
            c: 10979454
          },
          {
            y: '2018-11-04',
            a: 27477999994,
            b: 27471084137,
            c: 6915857
          }
        ],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['SATIF', 'EECC', 'Diferencia']
      });

      graphBar5 = Morris.Line({
        element: 'line-cargos-mes',
        data: [{
            y: '2018-09-04',
            a: 15296728
          },
          {
            y: '2018-10-04',
            a: 10979454
          },
          {
            y: '2018-11-04',
            a: 6915857
          }
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Diferencia SATIF v/s EECC']
      });


    });
  </script>
</body>

</html>