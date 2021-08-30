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
											<li class="active"><span>Administración de Tasas</span></li>
										</ol>
										<h1>Administración de Tasas</h1>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: 20px;">
									</div>
								</div>
							</div>



							<div class="panel panel-default">
								<div class="panel-body">
									<div class="row">
										<h4> &nbsp; Importación de tasas</h4>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<input type="file">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#ModalTasaImportar" style='margin-left: 16px; ;' type="button"> <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Importar</button>
										</div>
									</div>
									<br />
									<div class="row ">
										<div class="alert alert-warning " style="color:black;" role="alert" id="infoImportar">
											Última carga realizada
											<br>
											<br>
											Archivo : archivo.csv
											<br>
											Nº registros : 980
											<br>
											<br>
											Cargados : 978
											<br>
											<span class="text-red" style="color: red; font-weight:  bolder;">Erroneos : 2</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="#" data-toggle="modal" data-target="#ModalTasaVer">
												<span class="label label-info">
													<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver</span></a>
											<br>
											Lineas con Error: 12, 114
											<br>


										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<button class="btn btn-success pull-left" type="button" aria-expanded="false" aria-controls="collapseExample" style="margin: 10px;" onclick="$('#collapseExample').show()">
												<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva Tasa</button>
										</div>
										<div class="collapse" id="collapseExample">
											<div class="well">

												<div class="row">
													<div class="col-lg-4">
														Nombre <input type="text" class="form-control" id="txtTasaNombre">
													</div>
													<div class="col-lg-2">
														Valor <input type="text" class="form-control" id="txtTasaValor">
													</div>
													<div class="col-lg-4">
														Vigencia <input readonly type="text" class="form-control" id="txtTasaVigencia">
													</div>
													<div class="col-lg-2">
														&nbsp; <br>
														<button class="btn btn-primary pull-right col-3" style='margin-left: 16px; margin-bottom: 3px;' type="button" onclick="guardaNuevaTasa(); ">
															<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar </button>
													</div>
												</div>

												<br>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-12" id="">
							<div class="row">
							</div>
							<div class="row">
								<div class="main-box clearfix">
									<div class="main-box-body clearfix">
										<div class="table-responsive">
											<table id="table-example-fixed" class="table table-hover">
												<thead></thead>
												<tbody></tbody>
											</table>
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





	<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="ModalTasaVer">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel">Información de Importación</h4>
				</div>
				<div class="modal-body" style="overflow-y: scroll;">
					<div class="row">
						<div class="col-md-2">
							Linea 12
						</div>
						<div class="col-md-10">
							Tasa_1 ; 0.32 ; 20210810 ; 12333444-5
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							Linea 114
						</div>
						<div class="col-md-10">
							Tasa_21 ; 1.21 ; 20210810 ; 12333444-5
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal" aria-label="Close"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="ModalTasaImportar">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel">Información de Importación</h4>
				</div>
				<div class="modal-body" style="overflow-y: scroll;">
					<h4 class="text-center">
						El proceso de carga informa de algunos errores. <br>
						¿Desea guardar los datos de todas formas?
					</h4>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-2">
									Linea 12
								</div>
								<div class="col-md-10">
									Tasa_1 ; 0.32 ; 20210810 ; 12333444-5
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									Linea 114
								</div>
								<div class="col-md-10">
									Tasa_21 ; 1.21 ; 20210810 ; 12333444-5
								</div>
							</div>
						</div>
					</div>
					Ingrese el origen de datos: <input type="text" class="form-control">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary btn-sm pull-right col-lg-3 col-md-3" data-dismiss="modal" aria-label="Close" onclick="ConfirmImportarSi()"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar</button>
					<button type="button" class="btn btn-danger btn-sm pull-left" data-dismiss="modal" aria-label="Close"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cancelar</button>
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
			$('#infoImportar').toggle();

			$('input[id="txtTasaVigencia"]').daterangepicker({
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

							Swal.fire({
								title: 'Archivo Cargado',
								text: `Los datos se han cargado exitosamente!!`,
								icon: 'success',
								showCancelButton: true,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'Sí, eliminar!',
								cancelButtonText: 'Cancelar'
							}).then((result) => {
								if (result.isConfirmed) {
									$("#preview").removeClass("ocultar_formato").addClass('mostrar');
								}
							});

							// swal.fire({
							// 	title: "Archivo Cargado",
							// 	text: "Los datos se han cargado exitosamente!!",
							// 	type: "success",
							// 	showCancelButton: false,
							// 	confirmButtonColor: "#7ac144",
							// 	confirmButtonText: "Ok",
							// 	closeOnConfirm: true
							// }, function(isConfirm) {
							// 	if (isConfirm) {
							// 	}
							// });
						} else {
							// swal("ERROR", "No hay archivo para guardar", "error");
							Swal.fire({
								icon: 'error',
								title: 'ERROR',
								text: 'No hay archivo para guardar',
								footer: '<!--<a href="">Why do I have this issue?</a>-->'
							})
						}
					}
				} else {
					Swal.fire({
						icon: 'error',
						title: 'La extensión no es permitida',
						text: 'La carga permite las siguientes extensiones: orf',
						footer: '<!--<a href="">Why do I have this issue?</a>-->'
					})
					// swal("La extensión no es permitida", "La carga permite las siguientes extensiones: orf", "error");
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
			let htmlHead = `<thead>
								<tr>
									<th>Nº</th>
									<th>Nombre</th>
									<th>Valor</th>
									<th>Vigencia</th>
									<th>Estado</th>
									<th>Fecha Creacion</th>
									<th>Origen</th>
									<th>Acción</th>
								</tr></thead>`;
			let n = 0;

			let html = '';
			storeTasas.forEach((i) => {
				let arrVigencia = i.vigencia.split(',');
				let f1 = new Date(arrVigencia[0]);
				let f2 = new Date(arrVigencia[1]);
				let ahora = new Date();
				let estado = (f1 < ahora && f2 > ahora) ? 'Vigente' : 'Caducado';
				html += `<tr class='danger'>
							<td>${++n}</td>
							<td>${i.nombre}</td>
							<td>${i.valor}</td>
							<td>${i.vigencia}</td>
							<td> ${estado} </td>
							<td>${i.fecha}</td>
							<td>${i.origen}</td>
							<td> 
								<button class='btn btn-sm btn-warning' onclick='editarTasa("${i.id}")'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								<button class='btn btn-sm btn-danger' onclick='eliminar("${i.id}","${i.nombre}")'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							</td>
						</tr>`;
			});
			tablaReglas.innerHTML = htmlHead + `<tbody> ${html} <tbody>`;

		};





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
					for (let i = 0; i < storeTasas.length; i++) {
						if (id == storeTasas[i].id) {
							indice = i;
						}
					}
					storeTasas.splice(indice, 1);
					Swal.fire({
						icon: 'success',
						title: '',
						text: 'Registro eliminado con exito',
						footer: '<!--<a href="">Why do I have this issue?</a>-->'
					})
					// swal('Registro eliminado!', '', 'success');
					loadTablaReglas();
				}
			});

		}

		const guardaNuevaTasa = () => {
			let msj = '';
			if (document.querySelector("#txtTasaNombre").value == '') {
				msj += ' El nombre no puede ser vacío ;  ';
			}
			if (document.querySelector("#txtTasaValor").value == '') {
				msj += ' El valor no puede ser vacío ;  ';
			}
			if (document.querySelector("#txtTasaVigencia").value == '') {
				msj += ' El valor no puede ser vacío ;  ';
			}
			if (msj != '') {
				swal('Atención', 'Por favor verifique:  ' + msj, 'danger');
				return false;
			}
			let txt = '';
			if (idEditado != '') {
				txt = 'Registro modificado con exito.';
				storeTasas.forEach((i) => {
					if (idEditado == i.id) {
						i.nombre = document.querySelector("#txtTasaNombre").value;
						i.valor = document.querySelector("#txtTasaValor").value;
						i.vigencia = document.querySelector("#txtTasaVigencia").value;
					}
				});
				idEditado = '';
			} else {
				txt = 'Guardado con exito.';
				storeTasas.push({
					id: parseInt(storeTasas.length + 1),
					fecha: new Date().toISOString().split('T')[0],
					nombre: document.querySelector("#txtTasaNombre").value,
					origen: "LOCAL",
					valor: document.querySelector("#txtTasaValor").value,
					vigencia: document.querySelector("#txtTasaVigencia").value,
				});
			}

			// swal('¡Perfecto!', txt, 'success');

			Swal.fire({
				icon: 'success',
				title: '¡Perfecto!',
				text: txt,
				footer: '<!--<a href="">Why do I have this issue?</a>-->'
			})

			loadTablaReglas();
			document.querySelector("#txtTasaNombre").value = '';
			document.querySelector("#txtTasaValor").value = '';
			document.querySelector("#txtTasaVigencia").value = '8/26 06:00 PM - 8/28 02:00 AM';
			$("#collapseExample").hide();
		}

		let idEditado = '';
		const editarTasa = (id) => {
			for (let i = 0; i < storeTasas.length; i++) {
				if (id == storeTasas[i].id) {
					idEditado = id;
					document.querySelector("#txtTasaNombre").value = storeTasas[i].nombre;
					document.querySelector("#txtTasaValor").value = storeTasas[i].valor;
					document.querySelector("#txtTasaVigencia").value = storeTasas[i].vigencia;
					$("#collapseExample").show();
					break;
				}
			}
		}



		const ConfirmImportarSi = () => {
			$('#infoImportar').show();
			Swal.fire({
				icon: 'success',
				title: '¡Perfecto!',
				text: 'Importado con exito',
				footer: '<!--<a href="">Why do I have this issue?</a>-->'
			})
			// swal('','Importado con exito','success') ;
		}



		loadTablaReglas();
	</script>
</body>

</html>