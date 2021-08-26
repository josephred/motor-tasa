<?php
session_start();
$fecha_hoy = date("d-m-Y");
?>
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
                                    <ol class="breadcrumb">
                                        <li><a href="index.php">Panel</a></li>
                                        <li class="active"><span>Configuraciones</span></li>
                                    </ol>
                                    <h1>Configuraciones</h1>
                                </div>
                            </div>
                            <div class="row" id="user-profile">
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="main-box clearfix">
                                        <header class="main-box-header clearfix">
                                            <h2><?php echo $_SESSION["nombre"]; ?></h2>
                                        </header>
                                        <div class="main-box-body clearfix">
                                            <div class="profile-status">
                                                <i class="fa fa-circle"></i> Online
                                            </div>
                                            <img src="img/samples/icono_mujer.png" width="98%">
                                            <div class="profile-label">
                                                <span class="label label-danger"><?php echo $_SESSION['cargo']; ?> </span> <br>
                                                <span class="label label-default"><?php echo $_SESSION['perfil']; ?></span>
                                            </div>
                                            <div class="profile-details">
                                                Usuario desde: 01-07-<?php echo date('Y')?>
                                            </div>
                                            <div class="profile-details">
                                                Última conexión : 
                                                <?php 
                                                    $n = rand(1,date('d')) ;
                                                    echo (strlen($n)==1 ? '0'.$n:$n ).'-'. date('m-Y H:i:s');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8">
                                    <div class="main-box clearfix">
                                        <div class="tabs-wrapper profile-tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab-datos-ap" data-toggle="tab">Apariencia</a></li>
                                                <li class=""><a href="#tab-datos-op" data-toggle="tab">Operacional</a></li>
                                                <li class=""><a href="#tab-datos-pe" data-toggle="tab">Perfil</a></li>
                                            </ul>
                                            <div class="tab-content">



                                                <!-- Apariencia  -->
                                                <div class="tab-pane fade in " id="tab-datos-op">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            Modo de carga de Tasas :
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <input type="radio" checked name="modoCarga" id="radioMonoOnline" aria-label="...">
                                                                        </span>
                                                                        <input readonly type="text" class="form-control" onfocus="$('#radioMonoOnline').click()" onclick="$('#radioMonoOnline').click()" aria-label="..." value='Online'>
                                                                    </div><!-- /input-group -->
                                                                </div><!-- /.col-lg-6 -->

                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <input type="radio" name="modoCarga" id="modoMonoBatch" aria-label="...">
                                                                        </span>
                                                                        <input readonly type="text" class="form-control" onfocus="$('#modoMonoBatch').click()" onclick="$('#modoMonoBatch').click()" aria-label="..." value='Batch'>
                                                                    </div><!-- /input-group -->
                                                                </div><!-- /.col-lg-6 -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            Fijar Tasas :
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            Superior
                                                                        </span>
                                                                        <input type="text" class="form-control" aria-label="..." placeholder="2.5 %" value=''>
                                                                    </div><!-- /input-group -->
                                                                </div><!-- /.col-lg-6 -->

                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            Inferior
                                                                        </span>
                                                                        <input type="text" class="form-control" aria-label="..." placeholder="-0.5 %" value=''>
                                                                    </div><!-- /input-group -->
                                                                </div><!-- /.col-lg-6 -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            Correos para Notificaciones :
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            Administrador
                                                                        </span>
                                                                        <input type="text" class="form-control" aria-label="..." placeholder="administrador@gmail.com" value=''>
                                                                    </div><!-- /input-group -->
                                                                </div><!-- /.col-lg-6 -->

                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            Monitor
                                                                        </span>
                                                                        <input type="text" class="form-control" aria-label="..." placeholder="monitor@gmail.com" value=''>
                                                                    </div><!-- /input-group -->
                                                                </div><!-- /.col-lg-6 -->
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            Auditor
                                                                        </span>
                                                                        <input type="text" class="form-control" aria-label="..." placeholder="auditor@gmail.com" value=''>
                                                                    </div><!-- /input-group -->
                                                                </div><!-- /.col-lg-6 -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <button class="btn btn-primary btn-sm pull-right col-lg-3 col-md-3 col-sm-6">Guardar</button>
                                                    </div>

                                                </div>




                                                <!-- Apariencia  -->
                                                <div class="tab-pane fade in active" id="tab-datos-ap">
                                                    <div class="row">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="col-gl-6 col-md-6 col-sm-12">
                                                                    Seleccione Logo Ingreso: <input type="file" class="form-control">
                                                                    <br>
                                                                    <button class="btn btn-primary btn-sm pull-right  col-lg-4 col-md-4">Subir</button>
                                                                </div>
                                                                <div class="col-gl-6 col-md-6 col-sm-12">
                                                                    Previsualizar:
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-body" style="text-align: center;">
                                                                            <img src="img/logo-lapolar.png" alt="">
                                                                            <button class="btn btn-sm btn-danger pull-right" onclick="eliminarLogo()"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="col-gl-6 col-md-6 col-sm-12">
                                                                    Seleccione Logo Menu: <input type="file" class="form-control">
                                                                    <br>
                                                                    <button class="btn btn-primary btn-sm pull-right col-lg-4 col-md-4">Subir</button>
                                                                </div>
                                                                <div class="col-gl-6 col-md-6 col-sm-12">
                                                                    Previsualizar:
                                                                    <div class="panel panel-default" style="text-align: center;">
                                                                        <div class="panel-body">
                                                                            <img src="img/logo-lapolar-menu.png" alt="">
                                                                            <button class="btn btn-sm btn-danger pull-right" onclick="eliminarLogo()"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="col-gl-6 col-md-6 col-sm-12">
                                                                    Temas:
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <input type="radio" checked name="tema" id="radioClaro" aria-label="...">
                                                                                </span>
                                                                                <input readonly type="text" class="form-control" onfocus="$('#radioClaro').click()" onclick="$('#radioClaro').click()" aria-label="..." value='Claro'>
                                                                            </div><!-- /input-group -->
                                                                        </div><!-- /.col-lg-6 -->
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <input type="radio" name="tema" id="radioOscuro" aria-label="...">
                                                                                </span>
                                                                                <input readonly type="text" class="form-control" onfocus="$('#radioClaro').click()" onclick="$('#radioOscuro').click()" aria-label="..." value='Oscuro'>
                                                                            </div><!-- /input-group -->
                                                                        </div><!-- /.col-lg-6 -->
                                                                    </div>
                                                                </div>


                                                                <div class="col-gl-6 col-md-6 col-sm-12">
                                                                    Cambiar tamaño de interface :
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <input type="radio" checked name="zoom" id="zoom75" onclick="document.body.style.zoom = '75%';" aria-label="...">
                                                                                </span>
                                                                                <input readonly type="text" class="form-control" onfocus="$('#zoom75').click()" onclick="$('#zoom75').click()" aria-label="..." value='75%'>
                                                                            </div><!-- /input-group -->
                                                                        </div><!-- /.col-lg-6 -->
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <input type="radio" name="zoom" id="zoom87" onclick="document.body.style.zoom = '87%';" aria-label="...">
                                                                                </span>
                                                                                <input readonly type="text" class="form-control" onfocus="$('#zoom87').click()" onclick="$('#zoom87').click()" aria-label="..." value='87%'>
                                                                            </div><!-- /input-group -->
                                                                        </div><!-- /.col-lg-6 -->
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <input type="radio" name="zoom" id="zoom100" onclick="document.body.style.zoom = '100%';" aria-label="...">
                                                                                </span>
                                                                                <input readonly type="text" class="form-control" onfocus="$('#zoom100').click()" onclick="$('#zoom100').click()" aria-label="..." value='100%'>
                                                                            </div><!-- /input-group -->
                                                                        </div><!-- /.col-lg-6 -->
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <input type="radio" name="zoom" id="zoom125" onclick="document.body.style.zoom = '125%';" aria-label="...">
                                                                                </span>
                                                                                <input readonly type="text" class="form-control" onfocus="$('#zoom125').click()" onclick="$('#zoom125').click()" aria-label="..." value='125%'>
                                                                            </div><!-- /input-group -->
                                                                        </div><!-- /.col-lg-6 -->
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <input type="radio" name="zoom" id="zoon150" onclick="document.body.style.zoom = '150%';" aria-label="...">
                                                                                </span>
                                                                                <input readonly type="text" class="form-control" onfocus="$('#zoon150').click()" onclick="$('#zoon150').click()" aria-label="..." value='150%'>
                                                                            </div><!-- /input-group -->
                                                                        </div><!-- /.col-lg-6 -->
                                                                    </div>
                                                                    <div class="row">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-lg-12">
                                                        <button class="btn btn-sm btn-primary pull-right col-md-3">Guardar</button>
                                                        <button class="btn btn-sm btn-default pull-left">Restablecer</button>
                                                    </div>
                                                    <br>
                                                </div>




                                                <!-- Perfil  -->
                                                <div class="tab-pane fade in " id="tab-datos-pe">
                                                    <div id="newsfeed">
                                                        <div class="story">
                                                            <div class="story-user">
                                                                <a href="#">
                                                                    <img src="img/samples/icono_mujer.png" width="98%">
                                                                </a>
                                                            </div>
                                                            <div class="story-content">
                                                                <form role="form" method="post" name="frm" id="frm">
                                                                    <div class="pmbb-edit">
                                                                        <dl class="dl-horizontal">
                                                                            <dt class="p-t-10">Nombre</dt>
                                                                            <dd>
                                                                                <div class="fg-line">
                                                                                    <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo explode(' ', $_SESSION['nombre'])[0] ?>" />
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                        <dl class="dl-horizontal">
                                                                            <dt class="p-t-10">Apellidos</dt>
                                                                            <dd>
                                                                                <div class="fg-line">
                                                                                    <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo explode(' ', $_SESSION['nombre'])[1] ?>" />
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                        <dl class="dl-horizontal">
                                                                            <dt class="p-t-10">Teléfono Fijo</dt>
                                                                            <dd>
                                                                                <div class="fg-line">
                                                                                    <input type="text" class="form-control" name="fijo" id="fijo" value="(+56 2) 1234 5678" maxlength="17" />
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                        <dl class="dl-horizontal">
                                                                            <dt class="p-t-10">Teléfono Celular</dt>
                                                                            <dd>
                                                                                <div class="fg-line">
                                                                                    <input type="text" class="form-control" name="celular" id="celular" value="(+56 9) 8765 4321" maxlength="17">
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                        <dl class="dl-horizontal">
                                                                            <dt class="p-t-10">Correo</dt>
                                                                            <dd>
                                                                                <div class="fg-line">
                                                                                    <input type="email" class="form-control" value="<?php echo $_SESSION['email'] ?>" readonly>
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                        <dl class="dl-horizontal">
                                                                            <dt class="p-t-10">Ingrese Clave Nueva</dt>
                                                                            <dd>
                                                                                <div class="fg-line">
                                                                                    <input type="password" name="passwordNueva" id="passwordNueva" value="" class="form-control" placeholder="Ingrese nueva clave">
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                        <dl class="dl-horizontal">
                                                                            <dt class="p-t-10">Repita Clave Nueva</dt>
                                                                            <dd>
                                                                                <div class="fg-line">
                                                                                    <input type="password" name="passwordRepite" id="passwordRepite" value="" class="form-control" placeholder="Repita nueva clave">
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                        <div class="m-t-30" style="text-align:center;">
                                                                            <button class="btn btn-primary btn-sm pull-right col-lg-3" id="btnEditar">Guardar</button>
                                                                            <button data-pmb-action="reset" class="btn btn-danger btn-sm pull-left">Cancelar</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-imagen">
                                                    <div id="newsfeed">
                                                        <div class="story">
                                                            <div class="story-content">
                                                                <div class="p-l-30">
                                                                    <form method="post" enctype="multipart/form-data" action="imagen_edit.php" name="frmFoto" id="frmFoto">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <div>
                                                                                <span class="btn btn-info btn-file">
                                                                                    <img src="img/samples/sin_imagen.png" width="98%">
                                                                                    <br />
                                                                                    <input type="file" name="foto" id="foto" class="foto">
                                                                                </span>
                                                                                <br /><br />
                                                                                <button type="button" class="btn btn-primary btn_guardar btn-lg">
                                                                                    Guardar
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include('footer.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- global scripts -->
    <script src="js/demo-skin-changer.js"></script> <!-- only for demo -->

    <script src="components/jquery/dist/jquery.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

    <!-- this page specific scripts -->
    <script src="components/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>
    <script src="components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="components/moment/min/moment.min.js"></script>
    <script src="components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="components/pw-bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="components/select2/dist/js/select2.min.js"></script>
    <script src="components/hogan/web/builds/3.0.2/hogan-3.0.2.min.js"></script>
    <script src="components/typeahead.js/dist/typeahead.js"></script>
    <script src="components/jquery.pwstrength/jquery.pwstrength.min.js"></script>
    <script src="components/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js"></script>
    <script src="components/va-clockpicker/dist/bootstrap-clockpicker.min.js"></script>

    <script src="components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

    <!-- theme scripts -->
    <script src="js/scripts.js"></script>
    <script src="components/PACE/pace.min.js"></script>

    <!-- this page specific inline scripts -->
    <script type="text/javascript">
        $(function() {

            /*Mascaras de input*/
            $("#fijo").mask("(+56 2) 9999 9999");
            $("#celular").mask("(+56 9) 9999 9999");

            $('body').on('click', '#btnEditar', function() {
                var IdUsuario = $("#IdUsuario").val();

                var nombres = $("#nombres").val();
                if (nombres == '') {
                    $('#nombres').css('border-color', '#FF0000');
                    $("#nombres_error").html('');
                    $("#nombres").after('<label class="error" id="nombres_error" style="color:#FF0000">Por favor ingrese el/los nombre/s.</label>');
                    return false
                } else {
                    $('#nombres').css('border-color', '#ebebeb');
                    $("#nombres_error").html('');
                }

                var apellidos = $("#apellidos").val();
                if (apellidos == '') {
                    $('#apellidos').css('border-color', '#FF0000');
                    $("#apellidos_error").html('');
                    $("#apellidos").after('<label class="error" id="apellidos_error" style="color:#FF0000">Por favor ingrese el/los apellido/s.</label>');
                    return false
                } else {
                    $('#apellidos').css('border-color', '#ebebeb');
                    $("#apellidos_error").html('');
                }

                var fijo = $("#fijo").val();
                if (fijo == '') {
                    $('#fijo').css('border-color', '#FF0000');
                    $("#fijo_error").html('');
                    $("#fijo").after('<label class="error" id="fijo_error" style="color:#FF0000">Por favor ingrese el número de teléfono.</label>');
                    return false
                } else if ($('#fijo').val().length < 16) {
                    $('#fijo').css('border-color', '#FF0000');
                    $("#fijo_error").html('');
                    $("#fijo").after('<label class="error" id="fijo_error" style="color:#FF0000">El número de teléfono debe tener 8 números.</label>');
                    return false;
                } else {
                    $('#fijo').css('border-color', '#ebebeb');
                    $("#fijo_error").html('');
                }

                var celular = $("#celular").val();
                if (celular == '') {
                    $('#celular').css('border-color', '#FF0000');
                    $("#celular_error").html('');
                    $("#celular").after('<label class="error" id="celular_error" style="color:#FF0000">Por favor ingrese el número de celular.</label>');
                    return false
                } else if ($('#celular').val().length < 12) {
                    $('#celular').css('border-color', '#FF0000');
                    $("#celular_error").html('');
                    $("#celular").after('<label class="error" id="celular_error" style="color:#FF0000">El número de celular debe tener 8 números.</label>');
                    return false;
                } else {
                    $('#celular').css('border-color', '#ebebeb');
                    $("#celular_error").html('');
                }

                /*PREGUNTO SI HAY DATOS EN LA CONTRASEÑA NUEVA, PARA VALIDAR LA MODIFICACIÓN, SINO NO EVÁLIDO PORQUE NO LA MODIFICARÁ*/
                if ($("#passwordNueva").val() != '') {

                    var passwordNueva = $("#passwordNueva").val();
                    if (passwordNueva == '') {
                        $('#passwordNueva').css('border-color', '#FF0000');
                        $("#passwordNueva_error").html('');
                        $("#passwordNueva").after('<label class="error" id="passwordNueva_error" style="color:#FF0000">Por favor ingrese su nueva contraseña.</label>');
                        return false
                    } else if ($('#passwordNueva').val().length < 8) {
                        $('#passwordNueva').css('border-color', '#FF0000');
                        $("#passwordNueva_error").html('');
                        $("#passwordNueva").after('<label class="error" style="color:#FF0000" id="passwordNueva_error">La contraseña debe tener al menos 8 caracteres.</label>');
                        return false;
                    } else {
                        $('#passwordNueva').css('border-color', '#CCCCCC');
                        $("#passwordNueva_error").html('');
                    }

                    var passwordRepite = $("#passwordRepite").val();
                    if (passwordRepite == '') {
                        $('#passwordRepite').css('border-color', '#FF0000');
                        $("#passwordRepite_error").html('');
                        $("#passwordRepite").after('<label class="error" id="passwordRepite_error" style="color:#FF0000">Por favor repita su nueva contraseña.</label>');
                        return false
                    } else if ($("#passwordNueva").val() != $('#passwordRepite').val()) {
                        $('#passwordRepite').css('border-color', '#FF0000');
                        $("#passwordRepite_error").html('');
                        $("#passwordRepite").after('<label class="error" id="passwordRepite_error" style="color:#FF0000">Las contraseñas no son iguales.</label>');
                        return false;
                    } else {
                        $('#passwordRepite').css('border-color', '#CCCCCC');
                        $("#passwordRepite_error").html('');
                    }

                }

                swal({
                    title: "Modificación exitosa",
                    text: "Ha modificado los datos exitosamente!!",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#7ac144",
                    confirmButtonText: "Ok",
                    closeOnConfirm: false
                }, function(isConfirm) {
                    if (isConfirm) {
                        window.parent.location.href = "mi_perfil.php";
                    }
                });
            });

            $(':file').change(function() {
                //alert('fds');
                //obtenemos un array con los datos del archivo
                var file = $(this).prop('files')[0]; //$("#fileInput").prop('files')[0];
                //obtenemos el nombre del archivo
                fileName = file.name;
                //obtenemos la extensión del archivo
                fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
                //alert(fileExtension);
                //obtenemos el tamaño del archivo
                fileSize = file.size;
                //obtenemos el tipo de archivo image/png ejemplo
                fileType = file.type;
                //mensaje con la información del archivo
                //showMessage("<span class='info'>Archivo para subir: "+fileName+", peso total: "+fileSize+" bytes.</span>");
                //alert(fileSize);
            });

            $('body').on('click', '.btn_guardar', function() {
                var file = $('#foto').val();
                fileMax = 5000000;
                if (fileExtension == 'jpg' || fileExtension == 'JPG' || fileExtension == 'jpeg' || fileExtension == 'JPEG' || fileExtension == 'png' || fileExtension == 'PNG') {
                    if (fileSize > fileMax) {
                        swal("Supera el máximo", "La imagen no debe superar 5MB como máximo", "error");
                    } else {
                        var estado = 0;
                        if (file != '') {
                            estado = 1;
                        } else {
                            estado = 0;
                        }
                        if (estado == 1) {
                            swal({
                                title: "Modificación exitosa",
                                text: "Ha modificado los datos exitosamente!!",
                                type: "success",
                                showCancelButton: false,
                                confirmButtonColor: "#7ac144",
                                confirmButtonText: "Ok",
                                closeOnConfirm: false
                            }, function(isConfirm) {
                                if (isConfirm) {
                                    $('#frmFoto').submit();
                                }
                            });
                        } else {
                            swal("ERROR", "No hay imagen para guardar", "error");
                        }
                    }
                } else {
                    swal("La extensión no es permitida", "La imagen permite las siguientes extensiones: jpg, jpeg, png", "error");
                }
            });
        });


        const eliminarLogo = ()=>{
            swal({
                title: '¿Eliminar registro?',
                text: "!No se podrá deshacer esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function() {
                swal(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }, function(dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })

        }
    </script>
</body>

</html>