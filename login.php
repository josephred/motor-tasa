<?php
session_start();
$fecha_hoy = date("d-m-Y");
$era_hoy = date('Y');
$_SESSION["LoginError"] = 0;
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>La Polar - Motor de Tasa</title>

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="components/bootstrap/dist/css/bootstrap.min.css"/>

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="components/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>

    <!-- this page specific styles -->

    <!-- google font libraries -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet'
          type='text/css'>

    <!-- Favicon -->
    <link type="image/x-icon" href="img/favicon.png" rel="shortcut icon"/>

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body id="login-page-full">
<div id="login-full-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="login-box">
                    <div id="login-box-holder">
                        <div class="row">
                            <div class="col-xs-12">
                                <header id="login-header_">
                                    <div id="login-logo">
                                        <img src="img/logo-lapolar.png">
                                    </div>
                                </header>
                                <div id="login-box-inner">
                                    <form role="form" action="login.php" name="frm" id="frm" method="post">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" type="text" name="Email" id="Email"
                                                   placeholder="Usuario" required>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" type="text" name="Rut" id="Rut"
                                                   placeholder="RUT Empresa" required>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control" name="Pass" id="Pass"
                                                   placeholder="Contraseña" required>
                                        </div>
                                        <div id="remember-me-wrapper">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a href="olvida_clave.php" data-block="#l-forget-password"
                                                       id="login-forget-link" class="col-xs-6">
                                                        ¿Olvidó su contraseña?
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="Mensaje1">
                                            <div class="col-xs-12">
                                                <input type="button" id="btn_login" class="btn btn-primary col-xs-12"
                                                       value="Ingresar">
                                            </div>
                                        </div>
                                        <?php if ($_SESSION['LoginError'] == 1) { ?>
                                            <br/>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <p class="alert-danger" style="font-size:15px; text-align:center;">
                                                        El Usuario y/o contraseña ingresados no son v&aacute;lidos
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </form>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div>
                                        Usuarios <br><br>
                                        usuario : admin@gmail.com <br>
                                        rut_empresa : 88888888-8 <br>
                                        password : 123456 <br><br>

                                        usuario : monitor@gmail.com <br>
                                        rut_empresa : 88888888-8 <br>
                                        password : 123456 <br><br>

                                        usuario : auditor@gmail.com <br>
                                        rut_empresa : 88888888-8 <br>
                                        password : 123456 <br>

                                        usuario : analista@gmail.com <br>
                                        rut_empresa : 88888888-8 <br>
                                        password : 123456 <br>
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
<script src="components/jquery/dist/jquery.min.js"></script>
<script src="components/bootstrap/dist/js/bootstrap.js"></script>
<script src="components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>
<script src="js/scripts.js"></script>
<script>
    $(function () {

        let storeUsuarios = [
            {
                id: "1",
                email: "admin@gmail.com ",
                nombre: "Admin ",
                perfil: "Administrador",
                clave: "123456",
            },
            {
                id: "2",
                email: "monitor@gmail.com ",
                nombre: "Moni ",
                perfil: "Monitor",
                clave: "123456",
            },
            {
                id: "3",
                email: "auditor@gmail.com ",
                nombre: "Audi ",
                perfil: "Auditor",
                clave: "123456",
            },
        ];


        $('body').on('click', '#btn_login', function () {

            var EmailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var Email = $("#Email").val();
            if (Email == '') {
                $('#Email').css('border-color', '#FF0000');
                $("#Email_error").html('');
                $("#Mensaje1").after('<center><small class="help-block has-error" id="Email_error" style="color:#FF0000">Por favor ingrese su e-mail.</small></center>');
                return false
            }
                // else if(!EmailReg.test(Email)) {
                //   $('#Email').css('border-color','#FF0000');
                //   $("#Email_error").html('');
                //   $("#Mensaje1").after('<center><small class="help-block has-error" id="Email_error" style="color:#FF0000">Por favor ingrese un e-mail válido.</small></center>');
                //   return false
            // }
            else {
                $('#Email').css('border-color', '#ebebeb');
                $("#Email_error").html('');
            }
            var rut = $("#Rut").val();
            if (rut == '') {
                $('#Rut').css('border-color', '#FF0000');
                $("#Rut_error").html('');
                $("#Mensaje1").after('<center><small class="help-block has-error" id="Rut_error" style="color:#FF0000">Por favor ingrese su e-mail.</small></center>');
                return false
            }
                // else if(!EmailReg.test(Email)) {
                //   $('#rut').css('border-color','#FF0000');
                //   $("#rut_error").html('');
                //   $("#Mensaje1").after('<center><small class="help-block has-error" id="Email_error" style="color:#FF0000">Por favor ingrese un e-mail válido.</small></center>');
                //   return false
            // }
            else {
                $('#rut').css('border-color', '#ebebeb');
                $("#Email_error").html('');
            }

            var Pass = $("#Pass").val();
            if (Pass == '') {
                $('#Pass').css('border-color', '#FF0000');
                $("#Pass_error").html('');
                $("#Mensaje1").after('<center><small class="help-block has-error" id="Pass_error" style="color:#FF0000">Por favor ingrese su contraseña.</small></center>');
                return false
            } else {
                $('#Pass').css('border-color', '#ebebeb');
                $("#Pass_error").html('');
            }


            $.ajax({
                url: "controlador.php", type: "POST", dataType: "json",
                data: {
                    usuario: $('#Email').val(),
                    rut: $('#Rut').val(),
                    password: $('#Pass').val(),
                }
            }).done(function (rs) {
                if (rs.status == 'OK') {
                    location.href = "index.php";
                } else {
                    alert(rs.msj);
                }
            });


            // jQuery.post("controlador.php", {
            //     usuario: $('#Email').val(),
            //     rut: $('#Rut').val(),
            //     password: $('#Pass').val(),
            //   }, function(data, textStatus){
            //     console.log(data, textStatus);
            //     if(data == 1){


            //     }
            //     else
            //     {
            //       // swal("Mail no existe", "El email no existe en el sistema, favor ingrese nuevamente o comuníquese con el administrador del sistema.", "error");
            //     }
            //   });

        });

        /*INICIO VALIDO SI MAIL EXISTE COMO USUARIO*/
        // $('body').on('click', '#verificar', function(){
        //   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        //   var mailVerificar = $("#emailVerificar").val();
        //   if(mailVerificar == '') {
        //     $('#emailVerificar').css('border-color','#FF0000');
        //     $("#emailVerificar_error").html('');
        //     $("#emailVerificar").after('<label class="error" id="emailVerificar_error" style="color:#FF0000">Por favor ingrese su e-mail.</label>');
        //     return false
        //   }
        //   else if(!emailReg.test(mailVerificar)) {
        //     $('#emailVerificar').css('border-color','#FF0000');
        //     $("#emailVerificar_error").html('');
        //     $("#emailVerificar").after('<label class="error" id="emailVerificar_error" style="color:#FF0000">Por favor ingrese un e-mail válido.</label>');
        //     return false
        //   }
        //   else
        //   {
        //     $('#emailVerificar').css('border-color','#CCCCCC');
        //     $("#emailVerificar_error").html('');
        //   }		  


        //   jQuery.post("ajax_mail_verificar.php", {
        //     mailVerificar:mailVerificar
        //   }, function(data, textStatus){
        //     if(data == 1){
        //       jQuery.post("ajax_mail_envio.php", {
        //         mailVerificar:mailVerificar
        //       }, function(e){});				  
        //       swal({   
        //         title: "Envio de contraseña!",
        //         text: "Se ha envíado una nueva contraseña a su email.",
        //         type: "success",
        //         showCancelButton: false,
        //         confirmButtonColor: "#A0CE4D",
        //         confirmButtonText: "Entendido",
        //         closeOnConfirm: false,
        //         closeOnCancel: false
        //       }, function(isConfirm){
        //         if(isConfirm){
        //           window.location.href= "login.php";
        //         } 
        //       });

        //     }
        //     else 
        //     {
        //       swal("Mail no existe", "El email no existe en el sistema, favor ingrese nuevamente o comuníquese con el administrador del sistema.", "error");
        //     }
        //   });	
        // });


    });
</script>
</body>
</html>
