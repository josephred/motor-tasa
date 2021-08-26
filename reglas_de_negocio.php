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
											<li class="active"><span>Administración de Reglas de Negocio</span></li>
										</ol>
										<h1>Administración de Reglas de Negocio</h1>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: 20px;">
										<button class="btn btn-primary pull-right " style='margin-left: 16px; ' type="button" data-toggle="modal" data-target="#ModalAdminVar"> Administración de Variables</button>
										<button class="btn btn-success pull-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
											Nueva Regla
										</button>
									</div>
								</div>
							</div>

							<div class="collapse" id="collapseExample">
								<div class="well">

									<div class="panel panel-default">
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12">
													<dl class="dl-horizontal">
														<dt class="pt-15">Nombres</dt>
														<dd>
															<div class="fg-line">
																<input type="text" class="form-control" name="nombres" id="nombres" value="" />
															</div>
														</dd>
													</dl>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12">
													<dl class="dl-horizontal">
														<dt class="pt-15">Vigencia</dt>
														<dd>
															<div class="row">
																<input type="text" class="form-control hasDatepicker " name="fechaVigencia" id="fechaVigencia" value="" />
															</div>
														</dd>
													</dl>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12">
													<dl class="dl-horizontal">
														<dt class="pt-15">Variables</dt>
														<dd>
															<div class="panel panel-default">
																<div class="panel-body">
																	<div>
																		<?php
																		foreach ($_SESSION["store_variables"] as $var) {
																			if ($var['tipo'] == 'OBLIGATORIA') {
																		?>
																				<div class="row">

																					<div class="col-lg-3 col-md-3 col-sm-3">
																						<input readonly type="text" class="form-control" id="<?php echo $var['id'] ?>" value="<?php echo $var['nombre'] ?>" />
																					</div>

																					<div class="col-lg-3 col-md-3 col-sm-3">
																						<?php
																						$html = "<select id='cmbCondicion_" . $var['id'] . "' class='form-control' >";
																						foreach ($_SESSION["store_condiciones"] as $con) {
																							$html .= "<option value='" . $con['id'] . "' >" . $con['nombre'] . "</option>";
																						}
																						$html .= "</select>";
																						echo $html;
																						?>
																					</div>

																					<div class="col-lg-1 col-md-1 col-sm-3">
																						<span style="float: right; margin-top: 8px;">valor</span>
																					</div>
																					<div class="col-lg-1 col-md-1 col-sm-3">
																						<input type='text' class="form-control" id="txtValor_<?php echo $var['id']; ?>" value='' />
																					</div>
																				</div>
																		<?php }
																		} ?>
																	</div>
																	<div id="variablesOpcionales">

																	</div>
																</div>
															</div>
														</dd>
													</dl>
												</div>
												
											</div>
											<button class="btn btn-primary pull-right col-3" style='margin-left: 16px; ;' type="button">Guardar</button>
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
												<tr>
													<td>
														<div class="form-group">
															<label for="datepickerDate">Nº</label>
															<input type="text" class="form-control" id="datepickerDate" value="04-11-2014">
														</div>
													</td>
													<td>
														<div class="form-group">
															<label for="datepickerDate2">Fecha Fin</label>
															<input type="text" class="form-control" id="datepickerDate2" value="31-12-2015">
														</div>
													</td>
													<td>
														<div class="form-group">
															<label for="datepickerDate3">Fecha de Facturación</label>
															<input type="text" class="form-control" id="datepickerDate3" value="04-10-2018">
														</div>
													</td>
													</td>
													<td>
														<div class="form-group">
															<label for="tags">Producto</label>
															<input id="tags">
														</div>
													</td>
													<td>
														<div class="form-group">
															<button type="button" class="form-control" onclick="window.location.href='frecuencia_gasto_administracion_detalle.php'">
																<i class="fa fa-search"></i></button>
														</div>
													</td>

												</tr>


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
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel">Administración de Variables</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-2">Nombre</div>
						<div class="col-md-4"> <input type="text" class="form-control"> </div>
						<div class="col-md-2"> <button class="btn btn-primary btn-sm"> Guardar </button> </div>
					</div>
					<div class="row">
						<div class="col-md-2">Descripción</div>
						<div class="col-md-4"> <input type="text" class="form-control"> </div>
						<div class="col-md-2"></div>
					</div>
					<hr>
					<table id="tblAdmVar" class="table" style="width: 100%;">
						<thead></thead>
						<tbody>

						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal" aria-label="Close">Cerrar</button>
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
			var tableFixed2 = $('#tblAdmVar').dataTable({
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
		const tablaVariables = document.querySelector("#tblAdmVar");
		const divVariablesOpcionales = document.querySelector("#variablesOpcionales");
		const storeReglas = JSON.parse('<?php echo json_encode($_SESSION["store_reglas"]) ?>');
		const storeVariables = JSON.parse('<?php echo json_encode($_SESSION["store_variables"]) ?>');
		const storeCondciones = JSON.parse('<?php echo json_encode($_SESSION["store_condiciones"]) ?>');

		const loadTablaVariables = ()=>{
			let html = `<thead><tr>
							<td>Nº</td>
							<td>Nombre</td>
							<td>Descripción</td>
							<td>Acción</td>
						</tr></thead>`;
			let n = 0;
			storeVariables.forEach((i) => {
				html += `<tbody><tr>
							<td>${++n}</td>
							<td>${i.nombre}</td>
							<td>${i.descripcion}</td>
							<td> 
								<button class='btn btn-sm btn-warning'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								<button class='btn btn-sm btn-danger' onclick='eliminarVar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							</td>
						</tr></tbody>`;
			});
			tablaVariables.innerHTML = html;
		}


		const loadTablaReglas = () => {
			// $('#table-example-fixed').DataTable().clear().destroy();
			tablaReglas.innerHTML = '';
			let html = `<thead><tr>
							<td>Nº</td>
							<td>Nombre</td>
							<td>Variables</td>
							<td>Tasas</td>
							<td>Vigencia</td>
							<td>Estado</td>
							<td>Fecha Creacion</td>
							<td>Acción</td>
						</tr></thead>`;
			let n = 0;

			storeReglas.forEach((i) => {
				let html2 = '';
				i.variables.split(' ').forEach((v) => {
					for (let j = 0; j < storeVariables.length; j++) {
						if (v == storeVariables[j].id) {
							html2 += ` &nbsp; <span class="label label-info">${storeVariables[j].nombre}</span>`;
						}
					}

				});

				html += `<tbody><tr>
							<td>${++n}</td>
							<td>${i.nombre}</td>
							<td>${html2}</td>
							<td>${i.tasa}</td>
							<td>${i.vigencia}</td>
							<td> - </td>
							<td>${i.fecha_creacion}</td>
							<td> 
								<button class='btn btn-sm btn-warning'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								<button class='btn btn-sm btn-danger' onclick='eliminar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							</td>
						</tr></tbody>`;
			});
			tablaReglas.innerHTML = html;

			// var tableFixed = $('#table-example-fixed').dataTable({
			// 	// info: false,
			// 	pageLength: 10,
			// 	fixedHeader: {
			// 		header: true,
			// 		headerOffset: $('body.fixed-header #header-navbar').height()
			// 	}
			// });
		};



		console.log(storeVariables);
		console.log(storeCondciones);
		console.log(storeReglas);


		const eliminar = (id, nom) => {
			if (confirm(`¿Seguro desea eliminar el registro "${nom}" ?`)) {
				let indice = -1;
				for (let i = 0; i < storeReglas.length; i++) {
					if (id == storeReglas[i].id) {
						indice = i;
					}
				}
				storeReglas.splice(indice, 1);
				swal('Registro eliminado!', '', 'success');
				loadTablaReglas();
			}
		}

		const eliminarVar = (id, nom) => {
			if (confirm(`¿Seguro desea eliminar el registro "${nom}" ?`)) {
				let indice = -1;
				for (let i = 0; i < storeVariables.length; i++) {
					if (id == storeVariables[i].id) {
						indice = i;
					}
				}
				storeVariables.splice(indice, 1);
				swal('Registro eliminado!', '', 'success');
				loadTablaVariables();
			}
		}

		let storeVariablesOpcionales = [];

		const addVariable = ()=>{

			let optionCondiciones = '';
			storeCondciones.forEach((c)=>{
				optionCondiciones += `<option value='${c.id}' >${c.nombre}</option>`;
			});

			let componente = `
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<input readonly type="text" class="form-control" id="${0}" value="" />
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<select id='cmbCondicion_${0}' class='form-control' >
						${optionCondiciones}
					</select>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-3">
					<span style="float: right; margin-top: 8px;">valor</span>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-3">
					<input type='text' class="form-control" id="txtValor_${0}" value='' />
				</div>
			</div>
			`;
		}


		
		loadTablaVariables();
		loadTablaReglas();
	</script>
</body>

</html>
<?php echo "<pre>";
print_r($_SESSION); ?>