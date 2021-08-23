<?php
session_start();
$storeUsuarios = [
    [
        'id' => "1",
        'email' => "admin@gmail.com",
        'nombre' => "Patricio Arroyo",
        'rut' => "11111111-1",
        'rut_empresa' => "88888888-8",
        'perfil' => "Administrador",
        'password' => "123456",
    ],
    [
        'id' => "2",
        'email' => "monitor@gmail.com",
        'nombre' => "Grace Hopper",
        'rut' => "22222222-2",
        'rut_empresa' => "88888888-8",
        'perfil' => "Monitor",
        'password' => "123456",
    ],
    [
        'id' => "3",
        'email' => "auditor@gmail.com",
        'nombre' => "Joan Clark",
        'rut' => "33333333-3",
        'rut_empresa' => "88888888-8",
        'perfil' => "Auditor",
        'password' => "123456",
    ]
];



$usuario  = $_REQUEST['usuario'];
$rut      = $_REQUEST['rut'];
$password = $_REQUEST['password'];
foreach ($storeUsuarios as $u) {    
    if (
        $u['email'] == $usuario &&
        $u['rut_empresa'] == $rut &&
        $u['password'] == $password
    ) {
        $_SESSION['email']      = $u['email'];
        $_SESSION['nombre']     = $u['nombre'];
        $_SESSION['rut']        = $u['rut'];
        $_SESSION['rut_empresa'] = $u['rut_empresa'];
        $_SESSION['perfil']     = $u['perfil'];
        break;
    }
}

if (array_key_exists('rut_empresa', $_SESSION)) {
    echo json_encode(['status' => 'OK', 'msj' => 'Usuario encontrado']);
} else {
    echo json_encode(['status' => 'NOK', 'msj' => 'Usuario no existe']);
    session_destroy();
}
