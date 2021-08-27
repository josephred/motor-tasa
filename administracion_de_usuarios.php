<?php
include('lib/support.php');
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
                                        <li class="active"><span>Administración de usuarios</span></li>
                                    </ol>

                                    <h1>Administración de usuarios</h1>
                                </div>
                            </div>


                            <div class="panel panel">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-15">Nombres</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input type="text" class="form-control" name="nombres" id="nombres" value="" placeholder="Ingrese nombre" />
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-15">Rut</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input type="text" class="form-control hasDatepicker " name="rut" id="rut" value="" placeholder="11.111.111-1" />
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-15">Apellidos</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="" placeholder="Ingrese Apellido" />
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-10">
                                                <dl class="dl-horizontal">
                                                    <dt class="pt-10">Fecha Nacimiento</dt>
                                                    <dd>
                                                        <div class="fg-line">
                                                            <input type="date" class="form-control" name="fechana" id="fechana" value="" placeholder="opcional" />
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-10">Cargo</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input type="text" class="form-control" name="cargo" id="cargo" value="" placeholder="opcional" />
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-15">Perfil</dt>
                                                <dd>

                                                    <select class="form-control" id="inputGroupSelect01">
                                                        <option selected>Elija una opción</option>
                                                        <option value="1">Administrador</option>
                                                        <option value="2">Auditor</option>
                                                        <option value="3">Monitor</option>
                                                    </select>

                                                </dd>
                                            </dl>
                                        </div>

                                    </div>
                                    <div class="row " style="align-content: center">
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-10">Correo</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input type="text" class="form-control" name="correo" id="correo" value="" placeholder="Ingrese correo" />
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-15">Teléfono</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input type="text" class="form-control hasDatepicker " name="telefono" id="telefono" value="" placeholder="(9) 64728833">
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-10">Contraseña</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input type="password" class="form-control" name="contraseña" id="contraseña" value="" placeholder=" Ingrese una contraseña">
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-10">
                                            <dl class="dl-horizontal">
                                                <dt class="pt-15">Repita la contraseña</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input type="password" class="form-control hasDatepicker " name="rpcontraseña" id="rpcontraseña" value="" placeholder=" Repita la contraseña">
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>


                                        </dd>
                                        </dl>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">

                                    </div>

                                </div>
                                <div class="panel panel">
                                    <div class="panel-body">
                                        <div class="row">

                                            <div class="m-t-30" style="text-align:center;">
                                                <button class="btn btn-primary btn-sm pull-right col-lg-2 col-md-3" style="margin-right: 150px;" id="btn_guardar"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar</button>
                                                <button data-pmb-action="reset" style="margin-left: 150px;" class="btn btn-danger btn-sm pull-left"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="">
                        <div class="main-box clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table id="table-example-fixed" class="table table-hover">
                                        <thead>

                                            <tr class="">
                                                <th>N°</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Rut</th>
                                                <th>Perfil</th>
                                                <th>Correo</th>
                                                <th>Teléfono</th>
                                                <th>Contraseña</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="danger">
                                                <td>1</td>
                                                <td>Maria Paula</td>
                                                <td>Pino</td>
                                                <td>18.223.456-2</td>
                                                <td>Administrador</td>
                                                <td>Mpino@gmail.com</td>
                                                <td>(9)76892344</td>
                                                <td>*********</td>
                                                <td>
                                                    <button class='btn btn-sm btn-warning'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                    </button>
                                                    <button class='btn btn-sm btn-danger' onclick='eliminar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </button>
                                                </td>

                                            </tr>
                                            <tr class="danger">
                                                <td>1</td>
                                                <td>Maria Paula</td>
                                                <td>Pino</td>
                                                <td>18.223.456-2</td>
                                                <td>Administrador</td>
                                                <td>Mpino@gmail.com</td>
                                                <td>(9)76892344</td>
                                                <td>*********</td>
                                                <td>
                                                    <button class='btn btn-sm btn-warning'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                    </button>
                                                    <button class='btn btn-sm btn-danger' onclick='eliminar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </button>
                                                </td>

                                            </tr>
                                            <tr class="danger">
                                                <td>1</td>
                                                <td>Maria Paula</td>
                                                <td>Pino</td>
                                                <td>18.223.456-2</td>
                                                <td>Administrador</td>
                                                <td>Mpino@gmail.com</td>
                                                <td>(9)76892344</td>
                                                <td>*********</td>
                                                <td>
                                                    <button class='btn btn-sm btn-warning'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                    </button>
                                                    <button class='btn btn-sm btn-danger' onclick='eliminar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
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


    <?php //include('footer.php');
    ?>
    </div>
    </div>
    </div>
    </div>
    <!-- global scripts -->
    <script src="js/demo-skin-changer.js"></script>

    <script src="components/jquery/dist/jquery.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

    <!-- this page specific scripts -->
    <script src="components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="components/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="components/datatables.net-rowgroup/js/dataTables.rowGroup.min.js"></script>
    <script src="components/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="components/datatables.net-select/js/dataTables.select.min.js"></script>

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

    <script src="components/PACE/pace.min.js"></script>
    <script src="components/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="components/jquery-ui-1.12.1/jquery-ui.css">

    <!-- this page specific inline scripts -->
    <script type="text/javascript">
        $(function() {

            var tableFixed = $('#table-example-fixed').dataTable({
                // info: false,
                pageLength: 10,
                fixedHeader: {
                    header: true,
                    headerOffset: $('body.fixed-header #header-navbar').height()
                }
            });

            var data = [];
            for (var i = 0; i < 50000; i++) {
                data.push([i, i, i, i, i]);
            }

            $('#datepickerDate').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true
            });

            $('#datepickerDate2').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true
            });

            $('#datepickerDate3').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true
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
                if (fileExtension == 'orf' || fileExtension == 'ORF') {
                    if (fileSize > fileMax) {
                        swal("Supera el máximo", "El archivo no debe superar 5MB como máximo", "error");
                    } else {
                        var estado = 0;
                        if (file != '') {
                            estado = 1;
                        } else {
                            estado = 0;
                        }
                        if (estado == 1) {
                            swal({
                                title: "Archivo Cargado",
                                text: "Los datos se han cargado exitosamente!!",
                                type: "success",
                                showCancelButton: false,
                                confirmButtonColor: "#7ac144",
                                confirmButtonText: "Ok",
                                closeOnConfirm: true
                            }, function(isConfirm) {
                                if (isConfirm) {
                                    $("#preview").removeClass("ocultar_formato").addClass('mostrar');
                                }
                            });
                        } else {
                            swal("ERROR", "No hay archivo para guardar", "error");
                        }
                    }
                } else {
                    swal("La extensión no es permitida", "La carga permite las siguientes extensiones: orf", "error");
                }
            });

            $('body').on('click', '.btn_preview', function() {
                $("#tabla").removeClass("ocultar_formato").addClass('mostrar');
            });

            var availableTags = [
                "T1",
                "T2",
                "T3",
                "T4",
                "T5"

            ];
            $("#tags").autocomplete({
                source: availableTags
            });

        });
    </script>
</body>

</html>