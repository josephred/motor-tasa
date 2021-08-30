<?php
session_start();
$fecha_hoy = date("d-m-Y");
$era_hoy = date('Y');
if( !array_key_exists('perfil', $_SESSION) ){  header("Location: login.php");}
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
                                            <li><a href="index.php">Panel</a></li>
                                            <li class="active"><span>Monitoreo</span></li>
                                        </ol>
                                        <h1>Monitoreo</h1>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: 20px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-lg-6 col-lg-6">
                                    <div class="main-box infographic-box colored red-bg graficos_click" id="">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <span style="font-size: 48px; text-align: right; "> &nbsp; &nbsp; &nbsp; &nbsp; 139.8 MB</span>

                                        <span></span><br />
                                        <span>Ancho de banda ahorrado</span>
                                        <span></span><br />
                                        <span>&nbsp;</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-lg-6">
                                    <div class="main-box infographic-box colored red-bg graficos_click">
                                        <i class="fa fa-desktop" aria-hidden="true"></i>
                                        <span style="font-size: 48px; text-align: right; "> &nbsp; &nbsp; &nbsp; &nbsp; 80% </span>

                                        <span></span><br />
                                        <span>CPU utilizado</span>
                                        <span></span><br />
                                        <span>&nbsp;</span>
                                    </div>
                                </div>
                            </div>


                            <table class="table table-hover table-responsive">
                                <tr >
                                <td class=" col-lg-6 col-lg-6">
                                    <div class="row">
                                        <div>
                                            <div class="main-box">
                                                <header class="main-box-header clearfix">
                                                    <h2 class="pull-left">Variación Tasa</h2>
                                                </header>
                                                <div class="main-box-body clearfix">
                                                    <div class="row">
                                                        <div>
                                                            <div id="line-total" class="table-responsive"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                        <td>
                                            <div class="row" >
                                                <div>
                                                    <div class="main-box">
                                                        <header class="main-box-header clearfix">
                                                            <h2 class="pull-left">Variación canal de conexión</h2>
                                                        </header>
                                                        <div class="main-box-body clearfix">
                                                            <div class="row">
                                                                <div>
                                                                    <div id="area-chart" class="table-responsive"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                </tr>

                            </table>
                            <table class="table table-hover table-responsive">
                                <tr>
                                    <td class="col-lg-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="main-box">
                                                    <header class="main-box-header clearfix">
                                                        <h2 class="pull-left">Usuarios conectados actualmente</h2>
                                                    </header>
                                                    <div class="main-box-body clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id="donut-total" class="table-responsive"></div>
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
                                                        <h2 class="pull-left">Reglas de negocio más utilizadas
                                                        </h2>
                                                        <header>
                                                    <div class="main-box-body clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id="bar-total" class="table-responsive"></div>
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
                element: 'bar-total',
                data: [{
                        y: '04-09',
                        a: 152,
                        b: 189,
                        c: 493
                    },
                    {
                        y: '04-10',
                        a: 132,
                        b: 159,
                        c: 713
                    },
                    {
                        y: '04-11',
                        a: 183,
                        b: 155,
                        c: 758
                    }
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['aniversario 2021', 'día del niño 2021', 'navidad 2020'],
                lineColors: ['#800404', '#ff3321', '#f36c6c'],

                formatter: function(y) {
                    return y
                },
                resize: true
            });


            graphBar1 = Morris.Area({
                element: 'area-chart',
                data: [{

                        y: '2018',
                        a: 75,
                        b: 65,
                        c: 70
                    },
                    {
                        y: '2019',
                        a: 50,
                        b: 40,
                        c: 76
                    },
                    {
                        y: '2020',
                        a: 75,
                        b: 65,
                        c: 90
                    },
                    {
                        y: '2021',
                        a: 100,
                        b: 90,
                        c: 95
                    }
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Computador', 'Celular', 'Tablet'],
                lineColors: ['#800404', '#ff3321', '#f36c6c'],
                lineWidth: '3px',
                resize: true,
                redraw: true
            });


            graphBar2 = Morris.Line({
                element: 'line-total',
                data: [

                    {
                        y: '2019',
                        a: 193
                    },
                    {
                        y: '2020',
                        a: 413
                    },
                    {
                        y: '2021',
                        a: 358
                    }
                ],
                xkey: 'y',
                ykeys: ['a'],
                labels: ['Diferencia tasa'],
                formatter: function(y) {
                    return y
                },
                resize: true
            });

            graphBar3 = Morris.Donut({
                element: 'donut-total',
                data: [{
                        label: "WEB",
                        value: 73.31
                    },
                    {
                        label: "APP",
                        value: 26.69
                    },
                ],

                colors: ['#800404', '#f36c6c'],
                formatter: function(y) {
                    return y
                },
                resize: true
            });


        });
    </script>
</body>

</html>