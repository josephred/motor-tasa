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
									<div class="col-lg-6 col-md-6 col-sm-12">
										<ol class="breadcrumb">
											<li><a href="index.php">Panel</a></li>
											<li class="active"><span>Administración de Tasas</span></li>
										</ol>
										<h1>Administración de Tasas</h1>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: 20px;">

										<!-- <button class="btn btn-success pull-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
											Nueva Regla
										</button> -->
									</div>
								</div>
							</div>



							<div class="panel panel-default">
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<input type="file">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<button class="btn btn-primary btn-sm " style='margin-left: 16px; ;' type="button"> Importar</button>
										</div>
									</div>
									<br />
									<div class="row ">
										<div class="alert alert-success" role="alert">
											información
											<br>
											<br>
											Archivo : archivo.csv
											<br>
											Nº registros : 980
											<br>
											<br>
											Cargados : 978
											<br>
											Erroneos : 2 &nbsp; &nbsp; &nbsp; &nbsp; <a href="#"><span class="label label-info">Ver</span></a>
											<br>
											Lineas con Error: 12, 114
											<br>


										</div>
									</div>
								</div>
							</div>




							<!--
                                                        <div class="story-content">
                                                            <form role="form" method="post" name="frm" id="frm">
                                                                <div class="pmbb-edit">
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="p-t-10">Nombres</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="text" class="form-control" name="nombres" id="nombres" value="Claudia" />
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="p-t-10">Apellidos</dt>
                                                                        <dd>
                                                                            <div class="fg-line">
                                                                                <input type="text" class="form-control" name="apellidos" id="apellidos" value="Menares" />
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
                                                                                <input type="email" class="form-control" value="cvmenares@Falabella.cl" readonly>
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
                                                                        <div class="btn btn-primary btn-sm" id="btnEditar">Guardar</div>
                                                                        <button data-pmb-action="reset" class="btn btn-danger btn-sm">Cancelar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div> -->


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


		$('input[id="fechaVigencia"]').daterangepicker({
			opens: 'left',
			timePicker: true,
			startDate: moment().startOf('hour'),
			endDate: moment().startOf('hour').add(32, 'hour'),
			locale: {
				format: 'M/DD hh:mm A'
			}
		}, function(start, end, label) {
			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		});

		const tablaReglas = document.querySelector("#table-example-fixed");
		const divVariablesOpcionales = document.querySelector("#variablesOpcionales");
		const storeReglas = JSON.parse('<?php echo json_encode($_SESSION["store_reglas"]) ?>');
		const storeTasas = JSON.parse('<?php echo json_encode($_SESSION["store_tasas"]) ?>');
		const storeVariables = JSON.parse('<?php echo json_encode($_SESSION["store_variables"]) ?>');
		const storeCondciones = JSON.parse('<?php echo json_encode($_SESSION["store_condiciones"]) ?>');



		const loadTablaReglas = () => {
			tablaReglas.innerHTML = '';
			let html = `<thead><tr>
							<td>Nº</td>
							<td>Nombre</td>
							<td>Valor</td>
							<td>Vigencia</td>
							<td>Estado</td>
							<td>Fecha Creacion</td>
							<td>Origen</td>
							<td>Acción</td>
						</tr></thead>`;
			let n = 0;

			storeTasas.forEach((i) => {
				// let html2 = '';
				// i.variables.split(' ').forEach((v) => {
				// 	for (let j = 0; j < storeVariables.length; j++) {
				// 		if (v == storeVariables[j].id) {
				// 			html2 += ` &nbsp; <span class="label label-info">${storeVariables[j].nombre}</span>`;
				// 		}
				// 	}

				// });
				console.log(i);
				html += `<tbody><tr>
							<td>${++n}</td>
							<td>${i.nombre}</td>
							<td>${i.valor}</td>
							<td>${i.vigencia}</td>
							<td> - </td>
							<td>${i.fecha}</td>
							<td>${i.origen}</td>
							<td> 
								<button class='btn btn-sm btn-warning'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								<button class='btn btn-sm btn-danger' onclick='eliminar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							</td>
						</tr></tbody>`;
			});
			tablaReglas.innerHTML = html;

			// $('#table-example-fixed').dataTable().fnClearTable();
			// $('#table-example-fixed').dataTable().fnDestroy();
			// var tableFixed = $('#table-example-fixed').dataTable();
			// $('#table-example-fixed').DataTable().clear().destroy();

		};



		console.log(storeVariables);
		console.log(storeCondciones);
		console.log(storeReglas);


		const eliminar = (id, nom) => {
			if (confirm(`¿Seguro desea eliminar el registro "${nom}" ?`)) {
				let indice = -1;
				for (let i = 0; i < storeTasas.length; i++) {
					if (id == storeTasas[i].id) {
						indice = i;
					}
				}
				storeTasas.splice(indice, 1);
				swal('Registro eliminado!', '', 'success');
				loadTablaReglas();
			}
		}


		loadTablaReglas();
	</script>
</body>

</html>
<?php echo "<pre>";
print_r($_SESSION); ?>