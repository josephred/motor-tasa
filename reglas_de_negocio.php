<?php
include('lib/support.php');
session_start();
$fecha_hoy = date("d-m-Y");
if (!array_key_exists('perfil', $_SESSION)) {
	header("Location: login.php");
}
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
										<button class="btn btn-primary pull-right " style='margin-left: 16px; ' type="button" data-toggle="modal" data-target="#ModalAdminVar"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Administración de Variables</button>
										<button class="btn btn-success pull-right" onclick='$("#collapseExample").show();' type="button" >
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva Regla
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
														<dt class="pt-15">Nombre</dt>
														<dd>
															<div class="fg-line">
																<input type="text" class="form-control" name="nombres" id="reglaNombre" value="" />
															</div>
														</dd>
													</dl>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12">
													<dl class="dl-horizontal">
														<dt class="pt-15">Vigencia</dt>
														<dd>
															<div class="row">
																<input type="text" class="form-control hasDatepicker " name="fechaVigencia" id="reglaVigencia" value="" />
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
																						<input readonly type="text" class="form-control" id="reglaVariableNombre_<?php echo $var['id']; ?>" value="<?php echo $var['nombre'] ?>" />
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
																	<button class='btn btn-success btn-sm' style="margin-top: 10px;" onclick="addVariable()"  data-toggle="collapse" data-target="#collapseExample" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Variable Opcional </button>
																</div>
															</div>
														</dd>
													</dl>
												</div>

											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12">
													<dl class="dl-horizontal">
														<dt class="pt-15">Tasa</dt>
														<dd>
															<div class="fg-line">
																<!-- <input type="text" class="form-control" name="nombre" id="nombre" value="" /> -->
																<select name="" id="cmbTasas" class="form-control"></select>
															</div>
														</dd>
													</dl>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12">
													<button class="btn btn-primary pull-right col-3" style='margin-left: 16px; ;' type="button" onclick="putRegla()"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar</button>
												</div>
											</div>
										</div>
									</div>
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
													<th>
														<div class="form-group">
															<label for="datepickerDate">Nº</label>
															<input type="text" class="form-control" id="datepickerDate" value="04-11-2014">
														</div>
													</th>
													<th>
														<div class="form-group">
															<label for="datepickerDate2">Fecha Fin</label>
															<input type="text" class="form-control" id="datepickerDate2" value="31-12-2015">
														</div>
													</th>
													<th>
														<div class="form-group">
															<label for="datepickerDate3">Fecha de Facturación</label>
															<input type="text" class="form-control" id="datepickerDate3" value="04-10-2018">
														</div>
													</th>
													<th>
														<div class="form-group">
															<label for="tags">Producto</label>
															<input id="tags">
														</div>
													</th>
													<th>
														<div class="form-group">
															<button type="button" class="form-control" onclick="window.location.href='frecuencia_gasto_administracion_detalle.php'">
																<i class="fa fa-search"></i></button>
														</div>
													</th>

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
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel">Administración de Variables</h4>
				</div>
				<div class="modal-body">
					<h4>
						Crea nueva Variable
					</h4>
					<div class="row">
						<div class="col-md-2">Nombre</div>
						<div class="col-md-8"> <input type="text" class="form-control" id="ModalVariablesNombre"> </div>
						<div class="col-md-2"> <button class="btn btn-primary btn-sm" onclick="putVariable()"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar </button> </div>
					</div>
					<div class="row">
						<div class="col-md-2">Descripción</div>
						<div class="col-md-8"> <input type="text" class="form-control" id="ModalVariablesDescripcion"> </div>
						<div class="col-md-2"></div>
					</div>
					<hr>
					<table id="tblAdmVar" class="table table-hover" style="width: 100%;">
						<thead></thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal" aria-label="Close"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar</button>
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
				format: 'yyyy-mm-dd',
				autoclose: true
			});

			$('#datepickerDate2').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true
			});

			$('#datepickerDate3').datepicker({
				format: 'yyyy-mm-dd',
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


		$('input[id="reglaVigencia"]').daterangepicker({
			opens: 'left',
			timePicker: true,
			startDate: moment().startOf('hour'),
			endDate: moment().startOf('hour').add(32, 'hour'),
			locale: {
				format: 'YYYY-MM-DD'
			}
		}, function(start, end, label) {
			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		});

		const tablaReglas = document.querySelector("#table-example-fixed");
		const tablaVariables = document.querySelector("#tblAdmVar");
		const divVariablesOpcionales = document.querySelector("#variablesOpcionales");
		const storeReglas = JSON.parse('<?php echo json_encode($_SESSION["store_reglas"]) ?>');
		const storeTasas = JSON.parse('<?php echo json_encode($_SESSION["store_tasas"]) ?>');
		const storeVariables = JSON.parse('<?php echo json_encode($_SESSION["store_variables"]) ?>');
		const storeCondciones = JSON.parse('<?php echo json_encode($_SESSION["store_condiciones"]) ?>');

		const loadCmbTasa = ()=>{
			let option = '' ;
			storeTasas.forEach((i)=>{
				option += `<option value='${i.id}'>${i.nombre}</option>`;
			});
			document.querySelector("#cmbTasas").innerHTML = option;
		}
		loadCmbTasa();

		const loadTablaVariables = () => {
			let html = ``;
			let n = 0;
			storeVariables.forEach((i) => {
				html += `<tr class='danger'>
							<td>${++n}</td>
							<td>${i.nombre}</td>
							<td>${i.descripcion}</td>
							<td> 
								<button class='btn btn-sm btn-warning' onclick='editVariable("${i.id}")' ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								<button class='btn btn-sm btn-danger' onclick='eliminarVar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							</td>
						</tr>`;
			});
			html = `<thead><tr>
							<th>Nº</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Acción</th>
						</tr></thead> <tbody>${html}<t/body> `;

			tablaVariables.innerHTML = html;
		}


		const loadTablaReglas = () => {
			// $('#table-example-fixed').DataTable().clear().destroy();
			tablaReglas.innerHTML = '';
			let htmlHead = `<thead><tr>
							<th>Nº</th>
							<th>Nombre</th>
							<th>Variables</th>
							<th>Tasas</th>
							<th>Vigencia</th>
							<th>Estado</th>
							<th>Fecha Creacion</th>
							<th>Acción</th>
						</tr></thead>`;
			let n = 0;

			let htmlBody = '';
			storeReglas.forEach((i) => {
				let html2 = '';
				i.variables.split(' ').forEach((v) => {
					for (let j = 0; j < storeVariables.length; j++) {
						if (v == storeVariables[j].id) {
							html2 += ` &nbsp; <span class="label label-info">${storeVariables[j].nombre}</span>`;
						}
					}

				});
				console.log(i.vigencia);
				let arrVigencia = i.vigencia.split(',');
				let f1 = arrVigencia[0].trim();
				let f2 = arrVigencia[1].trim();
				let estado = ( new Date(f1) < new Date() && new Date() < new Date(f2) )? 'Vigente':'Caducada';

				htmlBody += `<tr class='danger'>
							<td>${++n}</td>
							<td>${i.nombre}</td>
							<td>${html2}</td>
							<td>${i.tasa}</td>
							<td>${i.vigencia}</td>
							<td>${estado}</td>
							<td>${i.fecha_creacion}</td>
							<td> 
								<button class='btn btn-sm btn-warning' onclick='editRegla("${i.id}")'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								<button class='btn btn-sm btn-danger' onclick='eliminar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							</td>
						</tr>`;
			});
			tablaReglas.innerHTML = `${htmlHead} <tbody> ${htmlBody} </tbody>`;
		
		};



		console.log(storeVariables);
		console.log(storeCondciones);
		console.log(storeReglas);


		const eliminar = (id, nom) => {

			Swal.fire({
				title: '¡Atención!',
				text: `¿Seguro desea eliminar el registro "${nom}" ?`,
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Sí, eliminar!',
				cancelButtonText: 'Cancelar'
			}).then((result) => {
				if (result.isConfirmed) {
					let indice = -1;
					for (let i = 0; i < storeReglas.length; i++) {
						if (id == storeReglas[i].id) {
							indice = i;
						}
					}
					storeReglas.splice(indice, 1);
					Swal.fire({
						icon: 'success',
						title: '',
						text: 'Registro eliminado con exito',
						footer: '<!--<a href="">Why do I have this issue?</a>-->'
					})
					loadTablaReglas();
				}
			});


		}

		const eliminarVar = (id, nom) => {

			Swal.fire({
				title: '¡Atención!',
				text: `¿Seguro desea eliminar el registro "${nom}" ?`,
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Sí, eliminar!',
				cancelButtonText: 'Cancelar'
			}).then((result) => {
				if (result.isConfirmed) {
					let indice = -1;
					for (let i = 0; i < storeVariables.length; i++) {
						if (id == storeVariables[i].id) {
							indice = i;
						}
					}
					storeVariables.splice(indice, 1);
					Swal.fire({
						icon: 'success',
						title: '',
						text: 'Registro eliminado con exito',
						footer: '<!--<a href="">Why do I have this issue?</a>-->'
					})
					loadTablaVariables();					
				}
			});

			
			
		}


		let storeVariablesOpcionales = [];

		const addVariable = () => {
			storeVariablesOpcionales.push({
				id: 1
			});
			loadVariablesTmp();
		}

		const loadVariablesTmp = () => {
			let componente = '';
			let html = '';
			storeVariablesOpcionales.forEach((v) => {
				let optionCondiciones = '';
				storeCondciones.forEach((c) => {
					optionCondiciones += `<option value='${c.id}' >${c.nombre}</option>`;
				});
				let optionVariables = '';
				storeVariables.forEach((v) => {
					optionVariables += `<option value='${v.id}' >${v.nombre}</option>`;
				});
				componente = `
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<select id='cmbCondicion_${0}' class='form-control' >
							${optionVariables}
						</select>
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
					<div class="col-lg-1 col-md-1 col-sm-3">
						<button class='btn btn-danger btn-sm' onclick='eliminarVarTmp(${v.id})'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
					</div>
				</div>
				`;
				html += componente;
			});
			document.querySelector("#variablesOpcionales").innerHTML = html;
		}


		const eliminarVarTmp = (id, nom) => {
			if (confirm(`¿Seguro desea eliminar el registro "${nom}" ?`)) {
				let indice = -1;
				for (let i = 0; i < storeVariablesOpcionales.length; i++) {
					if (id == storeVariablesOpcionales[i].id) {
						indice = i;
					}
				}
				storeVariablesOpcionales.splice(indice, 1);
				loadVariablesTmp();
				// swal('Registro eliminado!', '', 'success');
			}
		}

		let idEditVariable = '';
		const editVariable = (id)=>{
			idEditVariable = id;
			
			storeVariables.forEach((i)=>{
				if( i.id == id ){
					document.querySelector("#ModalVariablesNombre").value = i.nombre ;
					document.querySelector("#ModalVariablesDescripcion").value = i.descripcion;
				}
			});
						
		}

		const putVariable = () => {
			let msj = '';
			if (document.querySelector("#ModalVariablesNombre").value == '') {
				msj += '<li> El nombre no puede ser vacio.</li>';
			}
			if (document.querySelector("#ModalVariablesDescripcion").value == '') {
				msj += '<li> La descripción no puede ser vacia.</li>';
			}
			if (msj != '') {
				Swal.fire({
					title: '¡Atención!',
					icon: 'error',
					html: `<div style='text-align:left;'><ul>${msj}</ul></div>`,
					showCloseButton: true,
					showCancelButton: false,
					focusConfirm: false,
					confirmButtonText: '<i class=""></i> Aceptar',
					confirmButtonColor: '#3085d6',
					confirmButtonAriaLabel: 'Thumbs up, great!',
					cancelButtonText: 'Cancelar',
					cancelButtonAriaLabel: 'Thumbs down'
				})
				return false;
			} else {
				if( idEditVariable != '' ){
					storeVariables.forEach((i)=>{
						if( i.id == idEditVariable ){
							i.nombre = document.querySelector("#ModalVariablesNombre").value ;
							i.descripcion = document.querySelector("#ModalVariablesDescripcion").value ;
						}
					});
					document.querySelector("#ModalVariablesNombre").value ='';
					document.querySelector("#ModalVariablesDescripcion").value ='' ;
						
					loadTablaVariables();
					Swal.fire({
							icon: 'success',
							title: '',
							text: 'Registro modificado con exito',
							footer: '<!--<a href="">Why do I have this issue?</a>-->'
						})
				} else {
					storeVariables.push({
						id: storeVariables.length + 1 ,
						nombre: document.querySelector("#ModalVariablesNombre").value,
						descripcion: document.querySelector("#ModalVariablesDescripcion").value,
						tipo: "OPCIONAL"
					});
					loadTablaVariables();
					document.querySelector("#ModalVariablesNombre").value = "";
					document.querySelector("#ModalVariablesDescripcion").value = "";
					Swal.fire({
							icon: 'success',
							title: '',
							text: 'Registro creado con exito',
							footer: '<!--<a href="">Why do I have this issue?</a>-->'
						})
				}
			}
			idEditVariable = '';
		}

		let idEditRegla = ''; 
		const editRegla = (id)=>{
			idEditRegla = id ;
			storeReglas.forEach((i)=>{
				if( i.id == id ){
					document.querySelector("#reglaNombre").value = i.nombre ;
					document.querySelector("#reglaVigencia").value = i.vigencia;
					document.querySelector("#txtValor_1").value = '0.1';
					document.querySelector("#txtValor_2").value = '0.5';
					document.querySelector("#cmbTasas").value = i.tasa ;
				}
			});
			$("#collapseExample").show();
		}


		const putRegla = ()=>{
			let msj = '';

			if( document.querySelector("#reglaNombre").value == '' ){
				msj += '<li> El nombre no puede ser vacío </li>';
			}
			if( document.querySelector("#reglaVigencia").value == '' ){
				msj += '<li> La vigencia no puede ser vacío </li>';
			}
			let msj2 = '';
			document.querySelectorAll("[id^=txtValor]").forEach((i)=>{
				if( i.value == '' ){
					msj2 = `<li> Existe uno o más valores vacíos, por favor verifique.</li>`;
				}
			});
			msj = msj + msj2;
			if( msj != '' ){
				Swal.fire({
					icon: 'error',
					title: '¡Atención!',
					html: `<div style='text-align:left;' ><ul>${msj}</ul></div>`,
					footer: '<!--<a href="">Why do I have this issue?</a>-->'
				})
				return false;
			} else {
				let vars = [];
				document.querySelectorAll("[id^=reglaVariableNombre_]").forEach((i)=>{ 
					vars.push(i.id.split('_')[1]);
				})
				storeReglas.push({
					id : parseInt(storeReglas.length + 1) ,
					nombre : document.querySelector("#reglaNombre").value ,
					vigencia : document.querySelector("#reglaVigencia").value.replace(' - ',',') ,
					variables : vars.join(' ') ,
					tasa : document.querySelector("#cmbTasas").value, 
					fecha_creacion: new Date().toISOString().split("T")[0]
				});
				loadTablaReglas();

				document.querySelector("#reglaNombre").value = '';
				document.querySelectorAll("[id^=reglaVariableNombre_]").forEach((i)=>{ 
					//i.value = '';
				});
				document.querySelectorAll("[id^=cmbCondicion_]").forEach((i)=>{ 
					i.value = '1';
				});
				document.querySelectorAll("[id^=txtValor_]").forEach((i)=>{ 
					i.value = '';
				});
				document.querySelector("#cmbTasas").value = '1';

				$("#collapseExample").hide();

				Swal.fire({
						icon: 'success',
						title: '',
						text: 'Registro creado con exito',
						footer: '<!--<a href="">Why do I have this issue?</a>-->'
					})

			}
		}

		loadTablaVariables();
		loadTablaReglas();
	</script>
</body>

</html>