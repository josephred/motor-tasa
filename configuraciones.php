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
                                    <li><a href="index.php">Inicio</a></li>
                                    <li class="active"><span>Mi Perfil</span></li>
                                </ol>
                                <h1>Mi Perfil</h1>
                            </div>
                        </div>
                        <div class="row" id="user-profile">
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <h2>Claudia Menares</h2>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <div class="profile-status">
                                            <i class="fa fa-circle"></i> Online
                                        </div>
                                        <img src="img/samples/icono_mujer.png" width="98%">
                                        <div class="profile-label">
                                            <span class="label label-danger">Administrador</span>
                                        </div>
                                        <div class="profile-details">
                                            Usuario desde: 01-10-2018
                                        </div>
                                        <div class="profile-details">
                                            Última conexión : 02-10-2018 10:00:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8">
                                <div class="main-box clearfix">
                                    <div class="tabs-wrapper profile-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-datos" data-toggle="tab">Modificar
                                                    Datos</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tab-datos">
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
                                                                        <dt class="p-t-10">Nombres</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="text" class="form-control"
                                                                                       name="nombres" id="nombres"
                                                                                       value="Claudia"/>
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="p-t-10">Apellidos</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="text" class="form-control"
                                                                                       name="apellidos" id="apellidos"
                                                                                       value="Menares"/>
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="p-t-10">Teléfono Fijo</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="text" class="form-control"
                                                                                       name="fijo" id="fijo"
                                                                                       value="(+56 2) 1234 5678"
                                                                                       maxlength="17"/>
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="p-t-10">Teléfono Celular</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="text" class="form-control"
                                                                                       name="celular" id="celular"
                                                                                       value="(+56 9) 8765 4321"
                                                                                       maxlength="17">
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="p-t-10">Correo</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="email" class="form-control"
                                                                                       value="cvmenares@Falabella.cl"
                                                                                       readonly>
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="p-t-10">Ingrese Clave Nueva</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="password"
                                                                                       name="passwordNueva"
                                                                                       id="passwordNueva" value=""
                                                                                       class="form-control"
                                                                                       placeholder="Ingrese nueva clave">
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="p-t-10">Repita Clave Nueva</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="password"
                                                                                       name="passwordRepite"
                                                                                       id="passwordRepite" value=""
                                                                                       class="form-control"
                                                                                       placeholder="Repita nueva clave">
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <div class="m-t-30" style="text-align:center;">
                                                                        <div class="btn btn-primary btn-sm"
                                                                             id="btnEditar">Guardar
                                                                        </div>
                                                                        <button data-pmb-action="reset"
                                                                                class="btn btn-danger btn-sm">Cancelar
                                                                        </button>
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
                                                                <form method="post" enctype="multipart/form-data"
                                                                      action="imagen_edit.php" name="frmFoto"
                                                                      id="frmFoto">
                                                                    <div class="fileinput fileinput-new"
                                                                         data-provides="fileinput">
                                                                        <div>
                                          <span class="btn btn-info btn-file">
                                               <img src="img/samples/sin_imagen.png" width="98%">
                                            <br/>
                                            <input type="file" name="foto" id="foto" class="foto">
                                          </span>
                                                                            <br/><br/>
                                                                            <button type="button"
                                                                                    class="btn btn-primary btn_guardar btn-lg">
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
    $(function () {

        /*Mascaras de input*/
        $("#fijo").mask("(+56 2) 9999 9999");
        $("#celular").mask("(+56 9) 9999 9999");

        $('body').on('click', '#btnEditar', function () {
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
            }, function (isConfirm) {
                if (isConfirm) {
                    window.parent.location.href = "mi_perfil.php";
                }
            });
        });

        $(':file').change(function () {
            //alert('fds');
            //obtenemos un array con los datos del archivo
            var file = $(this).prop('files')[0];//$("#fileInput").prop('files')[0];
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

        $('body').on('click', '.btn_guardar', function () {
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
                        }, function (isConfirm) {
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
</script>
</body>
</html>