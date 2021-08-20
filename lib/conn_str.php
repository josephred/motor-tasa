<?php
require_once('adodb/adodb.inc.php');

// Reporte de errores
error_reporting(E_ALL ^ E_NOTICE);
// Time Zone
date_default_timezone_set('America/Santiago');

// Inicio de sesion HTTPOnly
$session_name = session_name();
if (session_start()) {
  setcookie($session_name, session_id(), null, '/', null, null, true);
}

define('CONN_DRIVER', 'mysqli');
define('CONN_HOST', 'localhost');
define('CONN_DATABASE', 'denadase_conacer');
define('CONN_HOST', 'mysql.conacer.cl'); 
define('CONN_USER', 'denadase_UsrCona');
define('CONN_PASS', 'y5b%haUdfwGJ');
 
define('CONN_DSN', CONN_DRIVER . '://' . CONN_USER . ':' . CONN_PASS . '@' . CONN_HOST . '/' . CONN_DATABASE . '');
define('CHARSET', 'utf-8');
define('SITENAME', 'conacer.cl');
define('WEBROOT', "/");
define('SERVERROOT', "http://".$_SERVER["HTTP_HOST"] . WEBROOT);

$cnnDB = ADONewConnection(CONN_DSN);
if (!$cnnDB) {?>
  <p class="error"><strong>No pudo conectarse a la base de datos:</strong><?php echo $cnnDB->ErrorMsg(); ?>.</p>
<?php
  exit();
}
$cnnDB->SetFetchMode(ADODB_FETCH_ASSOC);
$cnnDB->Execute("SET NAMES 'UTF8'");
?>