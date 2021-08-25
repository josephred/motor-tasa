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

$storeReglas = [
    ['id' => 1, 'nombre' => 'Día del niño 2021', 'variables' => "1 2 3", 'tasa' => 1, 'vigencia' => ['2021-08-01', '2021-08-15'], 'fecha_creacion' => '2021-07-25'],
    ['id' => 2, 'nombre' => 'Día madre 2020', 'variables' => "1", 'tasa' => 2, 'vigencia' => ['2021-08-01', '2021-08-15'], 'fecha_creacion' => '2021-07-25'],
    ['id' => 3, 'nombre' => 'Navidad 2021', 'variables' => "1 2", 'tasa' => 3, 'vigencia' => ['2021-12-01', '2021-12-31'], 'fecha_creacion' => '2021-11-28'],
];
$storeTasas = [
    ['id' => 1, 'nombre' => 'Tasa 1', 'valor' => '0.3', 'vigencia' => ['2021-08-01', '2021-08-15'], 'fecha' => '2021-08-15', 'origen' => 'SAT'],
    ['id' => 2, 'nombre' => 'Tasa 2', 'valor' => '4.5', 'vigencia' => ['2021-08-01', '2021-08-15'], 'fecha' => '2021-08-15', 'origen' => 'LOCAL'],
    ['id' => 3, 'nombre' => 'Tasa 3', 'valor' => '7.8', 'vigencia' => ['2021-08-01', '2021-08-15'], 'fecha' => '2021-08-15', 'origen' => 'SAT'],
    ['id' => 4, 'nombre' => 'Tasa 4', 'valor' => '1.1', 'vigencia' => ['2021-08-01', '2021-08-15'], 'fecha' => '2021-08-15', 'origen' => 'LOCAL'],
];
$storeVariables = [
    ['id' => 1, 'nombre' => 'Sueldo', 'descripcion' => 'Sueldo del cliente', 'tipo' => 'OBLIGATORIA'],
    ['id' => 2, 'nombre' => 'Edad Minima', 'descripcion' => 'Edad cliente', 'tipo' => 'OBLIGATORIA'],
    ['id' => 3, 'nombre' => 'Zona Sur', 'descripcion' => 'Zona de Chile', 'tipo' => 'OPCIONAL'],
    ['id' => 4, 'nombre' => 'Comuna Excluida', 'descripcion' => 'Excluir', 'tipo' => 'OPCIONAL'],
];
$storeCondiciones = [
    ['id' => 1, 'nombre' => 'IGUAL QUE'],
    ['id' => 2, 'nombre' => 'DISTINTO QUE'],
    ['id' => 3, 'nombre' => 'MAYOR QUE'],
    ['id' => 4, 'nombre' => 'MAYOR O IGUAL QUE'],
    ['id' => 5, 'nombre' => 'MENOR QUE'],
    ['id' => 6, 'nombre' => 'MENOR O IGUAL QUE'],
];


$usuario = $_REQUEST['usuario'];
$rut = $_REQUEST['rut'];
$password = $_REQUEST['password'];
foreach ($storeUsuarios as $u) {
    if (
        $u['email'] == $usuario &&
        $u['rut_empresa'] == $rut &&
        $u['password'] == $password
    ) {
        $_SESSION['email'] = $u['email'];
        $_SESSION['nombre'] = $u['nombre'];
        $_SESSION['rut'] = $u['rut'];
        $_SESSION['rut_empresa'] = $u['rut_empresa'];
        $_SESSION['perfil'] = $u['perfil'];
        $_SESSION['store_reglas'] = $storeReglas;
        $_SESSION['store_tasas'] = $storeTasas;
        $_SESSION['store_variables'] = $storeVariables;
        $_SESSION['store_condiciones'] = $storeCondiciones;
        break;
    }
}

if (array_key_exists('rut_empresa', $_SESSION)) {
    echo json_encode(['status' => 'OK', 'msj' => 'Usuario encontrado']);
} else {
    echo json_encode(['status' => 'NOK', 'msj' => 'Usuario no existe']);
    session_destroy();
}
