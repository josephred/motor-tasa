<?php
require_once('lib/conn_str.php');
require_once('lib/adodb/adodb.inc.php');
require_once('lib/support.php');
require_once('seguridad.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['IdUsuario'] > 0) {
        $recDB['IdUsuario'] = $_POST['IdUsuario'];
    }

    $recDB['Nombres'] = $cnnDB->qstr(rtrim($_POST['nombres']), get_magic_quotes_gpc());
    $recDB['Apellidos'] = $cnnDB->qstr(rtrim($_POST['apellidos']), get_magic_quotes_gpc());
    $recDB['FonoFijo'] = $cnnDB->qstr($_POST['fijo'], get_magic_quotes_gpc());
    $recDB['FonoCelular'] = $cnnDB->qstr($_POST['celular'], get_magic_quotes_gpc());

    if ($_POST['passwordNueva'] != '') {
        $recDB['Clave'] = $cnnDB->qstr(md5($_POST['passwordNueva']), get_magic_quotes_gpc());
    }

    //$cnnDB->debug=true;
    $resultado = $cnnDB->Replace('usuarios', $recDB, 'IdUsuario');
    //exit();
    unset($recDB);
    //replace = Regresa 0 si falla, 1 si efectuo el update y 2 si no se encontro el registro y el insert fue con exito
    //$_SESSION['resultado'] = $resultado;
//exit();
    if ($resultado == 1) {
        $_SESSION['NombreCompleto'] = rtrim($_POST['nombres']) . ' ' . rtrim($_POST['apellidos']);
        echo 1;
    } else {
        echo 2;
    }
} else {
    echo 2;
}
?>