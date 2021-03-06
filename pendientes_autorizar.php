<?php
include('lib/support.php');
session_start();
$fecha_hoy = date("d-m-Y");
if( !array_key_exists('perfil', $_SESSION) ){  header("Location: login.php");}
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
                                        <li class="active"><span>Pendientes de autorizar</span></li>
                                    </ol>
                                    <h1>Pendientes de autorizar</h1>
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
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="">
                                    <div class="main-box clearfix">
                                        <div class="main-box-body clearfix">
                                            <h2>Solicitudes pendientes</h2>
                                            <div class="table-responsive">
                                                <table id="table-example-fixed" class="table table-hover">
                                                    <thead>

                                                        <tr class "">

                                                            <th>Nombre</th>
                                                            <th>Perfil</th>
                                                            <th>Evento</th>
                                                            <th>Fecha Creaci??n</th>
                                                            <th>Detalle</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="danger" id="rev01">

                                                            <td>Maria Paula</td>
                                                            <td>Analista</td>
                                                            <td>Crear nueva regla</td>
                                                            <td>21-08-2021 08:21:23</td>
                                                            <td>
                                                                <button class="btn btn-primary" 
                                                                        style='margin-left: 16px; ' type="button" 
                                                                        data-toggle="modal" data-target="#ModalAdminVar"
                                                                        onclick="arrBajar=['rev01','rev011'] "
                                                                        ><i class="fa fa-eye" aria-hidden="true"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="danger" id="rev02">
                                                            <td>Maria Paula</td>
                                                            <td>Analista</td>
                                                            <td>Crear nueva tasa</td>
                                                            <td>21-08-2021 18:21:23</td>
                                                            <td>
                                                                <button class="btn btn-primary" 
                                                                        style='margin-left: 16px; ' type="button" 
                                                                        data-toggle="modal" data-target="#ModalAdminVar"
                                                                        onclick="arrBajar=['rev02','rev022'] "
                                                                        ><i class="fa fa-eye" aria-hidden="true"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="danger" id="rev03">
                                                            <td>Maria Paula</td>
                                                            <td>Analista</td>
                                                            <td>Crear nueva tasa</td>
                                                            <td>24-08-2021 15:21:23</td>
                                                            <td>
                                                                <button class="btn btn-primary" 
                                                                        style='margin-left: 16px; ' type="button" 
                                                                        data-toggle="modal" data-target="#ModalAdminVar"
                                                                        onclick="arrBajar=['rev03','rev033'] "
                                                                        ><i class="fa fa-eye" aria-hidden="true"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        <tr class="danger" id="rev1">
                                                                <td>Maria Paula</td>
                                                                <td>Administrador</td>
                                                                <td>Creo nueva tasa</td>
                                                                <td>2021-08-21 18:21:23</td>
                                                                <td>
                                                                    <button class="btn btn-primary" style='margin-left: 16px; ' type="button" data-toggle="modal" data-target="#ModalAdminVar"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr class="danger" id="rev2">
                                                                <td>Maria Paula</td>
                                                                <td>Administrador</td>
                                                                <td>Creo nueva tasa</td>
                                                                <td>2021-08-21 18:21:23</td>
                                                                <td>
                                                                    <button class="btn btn-primary" style='margin-left: 16px; ' type="button" data-toggle="modal" data-target="#ModalAdminVar"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr class="danger" id="rev3">
                                                                <td>Maria Paula</td>
                                                                <td>Administrador</td>
                                                                <td>Creo nueva tasa</td>
                                                                <td>2021-08-21 18:21:23</td>
                                                                <td>
                                                                    <button class="btn btn-primary" style='margin-left: 16px; ' type="button" data-toggle="modal" data-target="#ModalAdminVar"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                </td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-lg-12" id="">
                                        <div class="main-box clearfix">

                                            <div class="row">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" id="">
                                        <div class="main-box clearfix">
                                            <div class="main-box-body clearfix">
                                                <h2>Solicitudes revisadas</h2>
                                                <div class="table-responsive">
                                                    <table class="table table-hover" id="table-example-fixed2">
                                                        <thead>
                                                            <!-- <tr>
                                                                <td colspan="9">
                                                                    <h2>Solicitudes revisadas</h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-right">
                                                                    <div class="form-group">


                                                                    </div>
                                                                </td>

                                                            </tr> -->
                                                            <tr class "">

                                                                <th>Nombre</th>
                                                                <th>Perfil</th>
                                                                <th>Evento</th>
                                                                <th>Fecha Creaci??n</th>
                                                                <th>Estado</th>
                                                                <th>Revertir</th>
                                                                <th>Observaci??n</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr class="danger" id="rev011">

                                                            <td>Maria Paula</td>
                                                            <td>Analista</td>
                                                            <td>Crear nueva regla</td>
                                                            <td>21-08-2021 08:21:23</td>
                                                            <td>Rechazada</td>
                                                            <td>
                                                                <button onclick='swap("rev011","rev01")' class="btn btn-danger" style='margin-left: 16px; ' type="button" data-toggle="modal" ><i class="fa fa-refresh" aria-hidden="true"></i>
                                                                </button>
                                                            </td>
                                                            <td>No cumple con las normas b??sicas </td>
                                                        </tr>
                                                        <tr class="danger" id="rev022">
                                                            <td>Maria Paula</td>
                                                            <td>Analista</td>
                                                            <td>Crear nueva tasa</td>
                                                            <td>21-08-2021 18:21:23</td>
                                                            <td>Autorizada</td>
                                                            <td>
                                                                <button onclick='swap("rev022","rev02")' class="btn btn-danger" style='margin-left: 16px; ' type="button" data-toggle="modal" ><i class="fa fa-refresh" aria-hidden="true"></i>
                                                                </button>
                                                            </td>
                                                            <td>No cumple con las normas b??sicas </td>
                                                        </tr>
                                                        <tr class="danger" id="rev033">
                                                            <td>Maria Paula</td>
                                                            <td>Analista</td>
                                                            <td>Crear nueva tasa</td>
                                                            <td>24-08-2021 15:21:23</td>
                                                            <td>Autorizada</td>
                                                            <td>
                                                                <button onclick='swap("rev033","rev03")' class="btn btn-danger" style='margin-left: 16px; ' type="button" data-toggle="modal" ><i class="fa fa-refresh" aria-hidden="true"></i>
                                                                </button>
                                                            </td>
                                                            <td>No cumple con las normas b??sicas </td>
                                                        </tr>




                                                            <tr class="danger" id="rev11">
                                                                <td>Maria Paula</td>
                                                                <td>Analista</td>
                                                                <td>Crear nueva regla</td>
                                                                <td>24-08-2021 19:21:23</td>
                                                                <td>Rechazada</td>
                                                                <td>
                                                                    <button onclick='swap("rev11","rev1")' class="btn btn-danger" style='margin-left: 16px; ' type="button" data-toggle="modal"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                                                </td>
                                                                <td>No cumple con las normas b??sicas </td>
                                                            </tr>
                                                            <tr class="danger" id="rev22">
                                                                <td>Maria Paula</td>
                                                                <td>Analista</td>
                                                                <td>Crear nueva tasa</td>
                                                                <td>24-08-2021 18:21:23</td>
                                                                <td>Autorizada</td>
                                                                <td>
                                                                    <button onclick='swap("rev22","rev2")' class="btn btn-danger" style='margin-left: 16px; ' type="button" data-toggle="modal"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                                                </td>
                                                                <td>cumple con las normas b??sicas </td>
                                                            </tr>
                                                            <tr class="danger" id="rev33">
                                                                <td>Maria Paula</td>
                                                                <td>Administrador</td>
                                                                <td>Crear nueva tasa</td>
                                                                <td>24-08-2021 15:26:23</td>
                                                                <td>Autorizada</td>
                                                                <td>
                                                                    <button onclick='swap("rev33","rev3")' class="btn btn-danger" style='margin-left: 16px; ' type="button" data-toggle="modal"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                                                </td>
                                                                <td>No cumple con las normas b??sicas </td>
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
                        <?php //include('footer.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="ModalAdminVar">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Detalle</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-2">Descripci??n</div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" readonly>
                      Nombre regla: Aniversario
                      Variables: Zona sur
                      Tasa: tasa 1
                      Vigencia: 2021-08-01,2021-08-15
                        </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="text-align: center;">Se??ale si desea autorizar o rechazar</div>

                            <br>
                        </div>
                        <div class="row" style="text-align: center">

                            <div class="col-md-3"></div>
                            <div class="col-md-3"><input type="radio" name="auto"> &nbsp; Autorizar</div>
                            <div class="col-md-3"><input type="radio" name="auto"> &nbsp; Rechazar</div>
                            <div class="col-md-3"></div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-2">Observaci??n</div>
                            <div class="col-md-10"><input type="text" class="form-control"></div>

                        </div>
                        <hr>
                        <table id="tblAdmVar" class="table" style="width: 100%;">
                            <thead></thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm pull-right col-lg-3" data-dismiss="modal" aria-label="Close"
                                onclick="bajar()"  > <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar</button>

                        <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal" aria-label="Close"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar </button>
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
                var tableFixed = $('#table-example-fixed2').dataTable({
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

                $('#datetickerDate').datepicker({
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
                    //obtenemos la extensi??n del archivo
                    fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
                    //alert(fileExtension);
                    //obtenemos el tama??o del archivo
                    fileSize = file.size;
                    //obtenemos el tipo de archivo image/png ejemplo
                    fileType = file.type;
                    //mensaje con la informaci??n del archivo
                    //showMessage("<span class='info'>Archivo para subir: "+fileName+", peso total: "+fileSize+" bytes.</span>");
                    //alert(fileSize);
                });

                $('body').on('click', '.btn_guardar', function() {
                    var file = $('#foto').val();
                    fileMax = 5000000;
                    if (fileExtension == 'orf' || fileExtension == 'ORF') {
                        if (fileSize > fileMax) {
                            swal("Supera el m??ximo", "El archivo no debe superar 5MB como m??ximo", "error");
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
                        swal("La extensi??n no es permitida", "La carga permite las siguientes extensiones: orf", "error");
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
            const swap = (idOcultar, idMostrar, reversa=true)=>{
                $(`#${idOcultar}`).hide();
                $(`#${idMostrar}`).show();
                let m = '';
                if( reversa ){
                    m = 'Registro reversada con ??xito.';
                }else{
                    m = 'Registro gestionado con ??xito.';
                }
                Swal.fire({
						icon: 'success',
						title: '??Perfecto!',
						text: m,
						footer: '<!--<a href="">Why do I have this issue?</a>-->'
					})
            }
            $("#rev1").hide();
            $("#rev2").hide();
            $("#rev3").hide();
            $("#rev011").hide();
            $("#rev022").hide();
            $("#rev033").hide();

            let arrBajar = [];

            const bajar = ()=>{
                swap(arrBajar[0],arrBajar[1],false);
            }
        </script>
</body>

</html>