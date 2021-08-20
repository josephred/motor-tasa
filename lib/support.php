<?php
// Cambia el tiempo de cerrado automatico de sesion a 45 minutos
ini_set('session.gc_maxlifetime', 45*60);

// Time Zone
//putenv('TZ=America/Santiago');
define('SOPORTEWEB', 'Emergencias: 06-68466109');

//ESTADOS ORDENES COMPRA
define('PENDIENTE',0);
define('FINALIZADA_OK',1);

define('MAXREGSPERPAGE', 10); // Numero de registros por pagina en el administrador
define('MAXREGSPERPAGEMSG', 10); // Numero de registros por pagina en el administrador

define('MAXNOVEDADESINDEX', 3); // Numero de novedades en la portada del sitio
define('MAXNOVEDADESPERPAGE', 10); // Numero de novedades por pagina en el archivo

define('MAXPRODUCTOSPERPAGE' , 10);//Numero de productos por página

define('MAXPRACTICASINDEX', 8); // Numero de practicas en portada
define('MAXPRACTICASPERPAGE', 10); // Numero de practicas por pagina en el archivo

define('MAXEVENTOSINDEX', 8); // Numero de eventos en portada
define('MAXEVENTOSPERPAGE', 10); // Numero de eventos por pagina en el archivo

define('MAXFOTOGALERIASINDEX', 7); // Numero de fotos de galerias destacadas en la portada del sitio

define('MAXANCHOBANNERS', 180); // Ancho máximo al que deben ser redimensionados los banners

define('MAXANCHOADMINISTRADORES', 64); // Ancho de foto administradores


define('MENSAJE_LEIDO', 1);
define('MENSAJE_NO_LEIDO', 0);
define('MENSAJE_BORRADO', 1);
define('MENSAJE_NO_BORRADO', 0);

//TIPO DE ACTIVIDADES
define('ACTIVIDAD_VIDEO',1);
define('ACTIVIDAD_FOTO',2);
define('ACTIVIDAD_CONTENIDO',3);
define('ACTIVIDAD_EVALUACION',4);
define('ACTIVIDAD_SUBIR_TAREA',5);
define('ACTIVIDAD_FORO',6);

//tipos de correo
define('CORREO_ENTRADA',1);
define('CORREO_NO_LEIDOS',2);
define('CORREO_ENVIADOS',3);
define('CORREO_BORRADOS',4);




/*
// Tipos de comprobantes de depositos
$arrTIPOSDECOMPROBANTESACEPTADOS = array('gif','jpg','jpeg','png','doc','docx','xls', 'xlsx','pdf');
// Tipos de imgenes aceptadas para subir
$arrTIPOSDEIMAGENESSACEPTADAS = array('gif','jpg','jpeg','png','doc','docx','xls', 'xlsx','pdf');
// Tipos de multimedia aceptadas para subir
$arrTIPOSDEMULTIMEDIASACEPTADAS = array('mp3','wma','wav','wmv','mov');
$arrTIPOSDEAUDIOACEPTADOS = array('mp3', 'wma', 'wav');
$arrTIPOSDEVIDEOACEPTADOS = array('avi', 'wmv', 'mov', 'avi', 'm4v', 'mp4', 'flv');
*/
$arrTIPOSMIME = array(
  // archivos comprimidos
  'zip' => 'application/zip',
  'rar' => 'application/rar',

  // documentos
  'pdf' => 'application/pdf',
  'doc' => 'application/msword',
  'xls' => 'application/vnd.ms-excel',
  'ppt' => 'application/vnd.ms-powerpoint',
  'pps' => 'application/vnd.ms-powerpoint',
  'rtf' => 'application/rtf',
  'txt' => 'text/plain',

  // ejecutables
  'exe' => 'application/octet-stream',

  // imgenes
  'bmp' => 'image/bmp',
  'gif' => 'image/gif',
  'png' => 'image/png',
  'jpg' => 'image/jpeg',
  'jpeg' => 'image/jpeg',
  'tif' => 'image/tiff',
  'tiff' => 'image/tiff',
  'fh8' => 'application/octet-stream',
  'fh11' => 'application/octet-stream',

  // audio
  'mp3' => 'audio/mpeg',
  'wav' => 'audio/x-wav',
  'wma' => 'audio/x-ms-wma',

  // video
  'avi' => 'video/x-msvideo',
  'mpeg' => 'video/mpeg',
  'mpg' => 'video/mpeg',
  'mpe' => 'video/mpeg',
  'mov' => 'video/quicktime',
  'wmv' => 'video/x-ms-wmv'
);

// Ruta de directorios donde se subiran archivos de cada seccion
define('UPLOAD_DIR_GALERIAS_PRODUCTO', 'upfiles/productos/img');
define('UPLOAD_DIR_GALERIAS_CATEGORIA', 'upfiles/categorias/img');
define('UPLOAD_DIR_GALERIAS_SUBCATEGORIA', 'upfiles/subcategorias/img');
define('UPLOAD_DIR_PLANTILLA', 'upfiles/plantilla');
define('UPLOAD_DIR_GALERIA_PORTADA', 'upfiles/portada');
define('UPLOAD_DIR_ADMINISTRADORES', 'upfiles/administradores');

$arrRutasArchivos = array(
 UPLOAD_DIR_GALERIAS_PRODUCTO,
 UPLOAD_DIR_GALERIAS_CATEGORIA,
 UPLOAD_DIR_GALERIAS_SUBCATEGORIA,
 UPLOAD_DIR_PLANTILLA,
 UPLOAD_DIR_ADMINISTRADORES
);




//FUNCION CREADA SOLO PARA CARGAR LAS FOTOS DEL SISTEMA PARA COLEGIOS
function SubirFotoCol($strCampo, $strCarpeta, $arrTiposAceptados, $idUsr) {
  $lngResultado = SUBIRARCHIVO_ERROR;
  $strMensaje = '';
  $strArchivo = '';
  $lngPeso = 0;

  if ($strCarpeta == '') {
    $lngResultado = SUBIRARCHIVO_ERROR;
	$strMensaje = 'No está autorizado a cargar archivos a esta carpeta';
  } else {

    if((int)$_FILES[$strCampo]['size'] == 0){
	  $lngResultado = SUBIRARCHIVO_ERROR;
	  $strMensaje = 'El archivo no puede superar los 2MB de peso.';
	  $strArchivo = '';
	  $lngPeso = 0;
	} else if (isset($_POST[$strCampo . 'a']) && $_POST[$strCampo . 'a'] != '' && isset($_POST[$strCampo . 'b']) && $_POST[$strCampo . 'b'] != '') {
	  // Si exista un archivo previo y fue marcado para borrar
      // Borrar el archivo existente
      @unlink(realpath($strCarpeta . '/' . $_POST[$strCampo . 'a']));
      $strArchivo = '';
      $lngPeso = 0;
      $lngResultado = SUBIRARCHIVO_ELIMINADO;
    } else {
      // Conserva el nombre del archivo existente
      $strArchivo = isset($_POST[$strCampo . 'a']) ? $_POST[$strCampo . 'a']: '';
      $lngPeso = isset($_POST[$strCampo . 'c']) ? $_POST[$strCampo . 'c']: '';
      $lngResultado = SUBIRARCHIVO_MANTENIDO;
    }

    // Si se subio un nuevo archivo
    if (is_uploaded_file($_FILES[$strCampo]['tmp_name'])) {
      $strArchivo = $_FILES[$strCampo]['name'];

      // Si existia antes un archivo, este ser eliminado
      if (isset($_POST[$strCampo . 'a']) && $_POST[$strCampo . 'a'] != '' && isset($_POST[$strCampo . 'b']) && $_POST[$strCampo . 'b'] == '') {
        // Borrar el archivo existente
        @unlink(realpath($strCarpeta . '/' . $_POST[$strCampo . 'a']));
        $lngResultado = SUBIRARCHIVO_ACTUALIZADO;
      }

	  if (!in_array(CExtension($strArchivo), $arrTiposAceptados)) {
        $lngResultado = SUBIRARCHIVO_ERROR;
        $strMensaje = 'Tipo de archivo incorrecto. Sólo puede cargar archivos de tipo: ' . join(', ' , $arrTiposAceptados);
        $strArchivo = '';
		$lngPeso = 0;
	  } elseif ($_FILES[$strCampo]['size'] == 0) {
        $lngResultado = SUBIRARCHIVO_ERROR;
        $strMensaje = 'El nuevo archivo esta vacio (0 bytes)';
        $strArchivo = '';
		$lngPeso = 0;
	  } else {
        $unique_id = uniqid('');
	    //$strArchivo = $unique_id . '_' . LimpiarNombreArchivo($_FILES[$strCampo]['name']);
        $arrExtension = explode('.', $_FILES[$strCampo]['name']);
		$extension = $arrExtension[count($arrExtension)-1];
		$strArchivo = $idUsr.'.'.$extension;
		$result = move_uploaded_file($_FILES[$strCampo]['tmp_name'], $strCarpeta . '/' . $strArchivo);
	    if ($result == 0) {
	      $lngResultado = SUBIRARCHIVO_ERROR;
	      $strMensaje = 'No pudo moverse el archivo a su ubicación final';
	      $strArchivo = '';
	      $lngPeso = 0;
	    } else {
          $lngResultado = $lngResultado != SUBIRARCHIVO_ACTUALIZADO ? SUBIRARCHIVO_NUEVO : SUBIRARCHIVO_ACTUALIZADO;
	      @chmod($strCarpeta . '/' . $strArchivo, 0744 );
	      $lngPeso = $_FILES[$strCampo]['size'];
	    }
	  }
    }
  }

  return array('archivo' => $strArchivo, 'peso' => $lngPeso, 'resultado' => $lngResultado, 'mensaje' => $strMensaje);
}


function crearThumbnailRecortado($nombreImagen, $nombreThumbnail, $nuevoAncho, $nuevoAlto){
	// Obtiene las dimensiones de la imagen.
    list($ancho, $alto) = getimagesize($nombreImagen);
    // Si la division del ancho de la imagen entre el ancho del thumbnail es mayor
    // que el alto de la imagen entre el alto del thumbnail entoces igulamos el 
    // alto de la imagen  con el alto del thumbnail y calculamos cual deberia ser
    // el ancho para la imagen (Seria mayor que el ancho del thumbnail). 
    // Si la relacion entre los altos fuese mayor entonces el altoImagen seria
    // mayor que el alto del thumbnail.
    if ($ancho/$nuevoAncho > $alto/$nuevoAlto){
        $altoImagen = $nuevoAlto;
        $factorReduccion = $alto / $nuevoAlto;
        $anchoImagen = $ancho / $factorReduccion;      
    } else {
        $anchoImagen = $nuevoAncho;
        $factorReduccion = $ancho / $nuevoAncho;
        $altoImagen = $alto / $factorReduccion;
    }   

    // Abre la imagen original.
    list($imagen, $tipo)= abrirImagen($nombreImagen);
    // Crea la nueva imagen (el thumbnail).
    $thumbnail = imagecreatetruecolor($nuevoAncho, $nuevoAlto);  
    // Si la relacion entre los anchos es mayor que la relacion entre los altos
    // entonces el ancho de la imagen que se esta creando sera mayor que el del
    // thumbnail porlo que se centrara para que se corte por la derecha y por la 
    // izquierda. Si el alto fuese mayor lo mismo se cortaria la imagen por arriba
    // y por abajo.
    if ($ancho/$nuevoAncho > $alto/$nuevoAlto){
        imagecopyresampled($thumbnail , $imagen, ($nuevoAncho-$anchoImagen)/2, 0, 0, 0, $anchoImagen, $altoImagen, $ancho, $alto);
    }  else {
        imagecopyresampled($thumbnail , $imagen, 0, ($nuevoAlto-$altoImagen)/2, 0, 0, $anchoImagen, $altoImagen, $ancho, $alto);
    }    

    // Guarda la imagen.
    guardarImagen($thumbnail, $nombreThumbnail, $tipo);
}

function abrirImagen($nombre){
    $info = getimagesize($nombre);
    switch ($info["mime"]){
        case "image/jpeg":
            $imagen = imagecreatefromjpeg($nombre);
            break;
        case "image/gif":
            $imagen = imagecreatefromgif($nombre);
            break;
        case "image/png":
            $imagen = imagecreatefrompng($nombre);
            break;
        default :
            echo "Error: No es un tipo de imagen permitido.";
    }

    $resultado[0]= $imagen;
    $resultado[1]= $info["mime"];
    return $resultado;
}

function guardarImagen($imagen, $nombre, $tipo){
    switch ($tipo){
        case "image/jpeg":
            imagejpeg($imagen, $nombre, 100); // El 100 es la calidade de la imagen (entre 1 y 100. Con 100 sin compresion ni perdida de calidad.).
            break;
        case "image/gif":
            imagegif($imagen, $nombre);
            break;
        case "image/png":
            imagepng($imagen, $nombre, 9); // El 9 es grado de compresion de la imagen (entre 0 y 9. Con 9 maxima compresion pero igual calidad.).
            break;
        default :
            echo "Error: Tipo de imagen no permitido.";
    }
}   

function getExtension($str){
  $i = strrpos($str,".");
  if (!$i) { return ""; }
  $l = strlen($str) - $i;
  $ext = substr($str,$i+1,$l);
  return $ext;
}

//MODIFICAR EL TAMAÑA DE LA FOTO
function img($carpeta, $foto, $max_ancho, $max_alto){
/*************************************
 * 
 ************************************/
	//Ruta de la imagen original
	//$foto = $arrArchivo['archivo'];
	$rutaImagenOriginal= $carpeta.'/'.$foto;
	$extension = explode('.',$rutaImagenOriginal);
	$extension = $extension[count($extension)-1];
	
	if((strtoupper($extension) == 'JPG') || (strtoupper($extension) == 'JPEG')){
	  //Creamos una variable imagen a partir de la imagen original
	  $img_original = imagecreatefromjpeg($rutaImagenOriginal);
	} else if(strtoupper($extension) == 'PNG'){
	  //Creamos una variable imagen a partir de la imagen original
	  $img_original = imagecreatefrompng($rutaImagenOriginal);
	} else if(strtoupper($extension) == 'GIF'){
	  //Creamos una variable imagen a partir de la imagen original
	  $img_original = imagecreatefromgif($rutaImagenOriginal);
	}	 
	
	
	//Se define el maximo ancho o alto que tendra la imagen final
	//$max_ancho = 150;
	//$max_alto = 150;
	
	//Ancho y alto de la imagen original
	list($ancho,$alto)=getimagesize($rutaImagenOriginal);
	
	//Se calcula ancho y alto de la imagen final
	$x_ratio = $max_ancho / $ancho;
	$y_ratio = $max_alto / $alto;
	
	//Si el ancho y el alto de la imagen no superan los maximos, 
	//ancho final y alto final son los que tiene actualmente
	if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
		$ancho_final = $ancho;
		$alto_final = $alto;
	}
	/*
	 * si proporcion horizontal*alto mayor que el alto maximo,
	 * alto final es alto por la proporcion horizontal
	 * es decir, le quitamos al alto, la misma proporcion que 
	 * le quitamos al alto
	 * 
	*/
	elseif (($x_ratio * $alto) < $max_alto){
		$alto_final = ceil($x_ratio * $alto);
		$ancho_final = $max_ancho;
	}
	/*
	 * Igual que antes pero a la inversa
	*/
	else{
		$ancho_final = ceil($y_ratio * $ancho);
		$alto_final = $max_alto;
	}
	
	//Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
	$tmp=imagecreatetruecolor($ancho_final,$alto_final);	
	
	//Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
	imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
	
	//Se destruye variable $img_original para liberar memoria
	imagedestroy($img_original);	
	
	if((strtoupper($extension) == 'JPG') || (strtoupper($extension) == 'JPEG')){
	  //Definimos la calidad de la imagen final
	  $calidad=95;
	  //Se crea la imagen final en el directorio indicado
	  imagejpeg($tmp, $carpeta."/".$foto,$calidad);
	} else if(strtoupper($extension) == 'PNG'){
	  //Definimos la calidad de la imagen final
	  $calidad=9;
	  //Se crea la imagen final en el directorio indicado
	  imagepng($tmp, $carpeta."/".$foto,$calidad);
	} else if(strtoupper($extension) == 'GIF'){
	  //Se crea la imagen final en el directorio indicado
	  imagegif($tmp, $carpeta."/".$foto);
	}  	
}


//MODIFICAR EL TAMAÑA DE LA FOTO
function imgSocial($foto, $max_ancho, $max_alto){
/*************************************
 * 
 ************************************/
	//Ruta de la imagen original
	//$foto = $arrArchivo['archivo'];
	$rutaImagenOriginal= $foto;
	$extension = explode('.',$rutaImagenOriginal);
	$extension = $extension[count($extension)-1];
	
	if((strtoupper($extension) == 'JPG') || (strtoupper($extension) == 'JPEG')){
	  //Creamos una variable imagen a partir de la imagen original
	  $img_original = imagecreatefromjpeg($rutaImagenOriginal);
	} else if(strtoupper($extension) == 'PNG'){
	  //Creamos una variable imagen a partir de la imagen original
	  $img_original = imagecreatefrompng($rutaImagenOriginal);
	} else if(strtoupper($extension) == 'GIF'){
	  //Creamos una variable imagen a partir de la imagen original
	  $img_original = imagecreatefromgif($rutaImagenOriginal);
	}	 
	
	
	//Se define el maximo ancho o alto que tendra la imagen final
	//$max_ancho = 150;
	//$max_alto = 150;
	
	//Ancho y alto de la imagen original
	list($ancho,$alto)=getimagesize($rutaImagenOriginal);
	
	//Se calcula ancho y alto de la imagen final
	$x_ratio = $max_ancho / $ancho;
	$y_ratio = $max_alto / $alto;
	
	//Si el ancho y el alto de la imagen no superan los maximos, 
	//ancho final y alto final son los que tiene actualmente
	if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
		$ancho_final = $ancho;
		$alto_final = $alto;
	}
	/*
	 * si proporcion horizontal*alto mayor que el alto maximo,
	 * alto final es alto por la proporcion horizontal
	 * es decir, le quitamos al alto, la misma proporcion que 
	 * le quitamos al alto
	 * 
	*/
	elseif (($x_ratio * $alto) < $max_alto){
		$alto_final = ceil($x_ratio * $alto);
		$ancho_final = $max_ancho;
	}
	/*
	 * Igual que antes pero a la inversa
	*/
	else{
		$ancho_final = ceil($y_ratio * $ancho);
		$alto_final = $max_alto;
	}
	
	//Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
	$tmp=imagecreatetruecolor($ancho_final,$alto_final);	
	
	//Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
	imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
	
	//Se destruye variable $img_original para liberar memoria
	imagedestroy($img_original);	
	
	if((strtoupper($extension) == 'JPG') || (strtoupper($extension) == 'JPEG')){
	  //Definimos la calidad de la imagen final
	  $calidad=95;
	  //Se crea la imagen final en el directorio indicado
	  imagejpeg($tmp, $foto,$calidad);
	} else if(strtoupper($extension) == 'PNG'){
	  //Definimos la calidad de la imagen final
	  $calidad=9;
	  //Se crea la imagen final en el directorio indicado
	  imagepng($tmp, $foto,$calidad);
	} else if(strtoupper($extension) == 'GIF'){
	  //Se crea la imagen final en el directorio indicado
	  imagegif($tmp, $foto);
	}  	
}



//CORRIJO LA ACENTUACION DE LA PALABRA
function code($x){
  return utf8_encode($x);
}

//pasar a mayusculas
function upper($str){
  return mb_convert_case($str, MB_CASE_UPPER, "UTF-8");
}

//CUENTA LA CANTIDAD DE DIAS DE DIFERENCIA ENTRE FECHAS
//(Se deben enviar los MKTIME)
function dias_transcurridos($fecha_i,$fecha_f)
{
  $dias	= ($fecha_i - $fecha_f);
  $dias = $dias / (60 * 60 * 24);
  $dias = abs($dias); 
  $dias = floor($dias);		
  return $dias;
}


// Genero código único.
function myUniqId($numStr,$strPrx){
  srand((double)microtime()*rand(1000000,9999999));
  $arrChar=array();
  $uId=$strPrx;
  for($i=65;$i<90;$i++) {
	array_push($arrChar,chr($i));
	array_push($arrChar,strtolower(chr($i)));
  }
  
  for($i=48;$i<57;$i++) {
	array_push($arrChar,chr($i));
  }
  
  for($i=0;$i<$numStr;$i++) {
	$uId.=$arrChar[rand(0,count($arrChar))];
  } 
  return $uId;
}

function fomrmaPago($x){
  switch($x){
	case 1:
	return 'Efectivo';
	case 2:
	return 'T. Credito';
	case 3:
	return 'Red Compra';
	case 4:
	return 'Cheque';
	}
}

// Valida la combinacion de login/password con la base de datos
function ValidarLogin($u, $p, $cnnDB) {
  $strSQLWhere = 'WHERE Email = ' . $cnnDB->qstr($u, get_magic_quotes_gpc()) . ' '
   . 'AND Clave = ' . $cnnDB->qstr(md5($p), get_magic_quotes_gpc()) . ' ';
  
  /* Verifica User / Pass */
  $strSQL = 'SELECT ID_Usuario, Activo, Nombres, Apellidos, Email '
   . 'FROM tbUsuarios '
   . $strSQLWhere;
  $rstDB = $cnnDB->Execute($strSQL);
  unset($_SESSION['Usr_ID_Usuario']);
  unset($_SESSION['UsrNombre']);
  if (($rstDB->RecordCount() == 1) && ($rstDB->fields['Activo'] == 1)) {
	$_SESSION['Usr_ID_Usuario'] = $rstDB->fields['ID_Usuario'];
	if ($rstDB->fields['Nombres'] != ''){
	  $_SESSION['UsrNombre'] = '¡Hola, ' . $rstDB->fields['Nombres'] . '!';
	} else {
	  $_SESSION['UsrNombre'] = '¡Hola!';
	}
	
	//$vaciarCarroSQL = $cnnDB->Execute('DELETE FROM tbCarroCompras WHERE ID_Usuario = ' . $_SESSION['Usr_ID_Usuario']);
	$updateCarro = $cnnDB->Execute('UPDATE tbCarroCompras SET ID_Usuario = ' . $_SESSION['Usr_ID_Usuario'] . ', '
	. 'SessionID = ' . $cnnDB->qstr('', get_magic_quotes_gpc()) . ' WHERE SessionID = ' . $cnnDB->qstr(session_id(), get_magic_quotes_gpc()));
	$_SESSION['mi-carro'] = (int) $cnnDB->GetOne('SELECT COUNT(ID_Producto) FROM '
	  . 'tbCarroCompras WHERE ID_Usuario = ' . $_SESSION['Usr_ID_Usuario']);
	return true;
  } else if(($rstDB->fields['Activo'] == 0) && ($rstDB->RecordCount() == 1)){
    $_SESSION['Inactivo'] = 1;
	return false;
  } else{
	$_SESSION['Inactivo'] = 0;
	return false;
  }
}

//VALIDA RUT
function ValidaRut($r = false){
    if((!$r) or (is_array($r)))
        return false; /* Hace falta el rut */
 
    if(!$r = preg_replace('|[^0-9kK]|i', '', $r))
        return false; /* Era código basura */
 
    if(!((strlen($r) == 8) or (strlen($r) == 9)))
        return false; /* La cantidad de carácteres no es válida. */
 
    $v = strtoupper(substr($r, -1));
    if(!$r = substr($r, 0, -1))
        return false;
 
    if(!((int)$r > 0))
        return false; /* No es un valor numérico */
 
    $x = 2; $s = 0;
    for($i = (strlen($r) - 1); $i >= 0; $i--){
        if($x > 7)
            $x = 2;
        $s += ($r[$i] * $x);
        $x++;
    }
    $dv=11-($s % 11);
    if($dv == 10)
        $dv = 'K';
    if($dv == 11)
        $dv = '0';
    if($dv == $v)
    return number_format($r, 0, '', '').'-'.$v; /* Formatea el RUT */
    return false;
}


// Verificar RUT
function EsRUTValido($r) {
  $r = strtoupper( ereg_replace( '\.|,|-', '', $r ) );
  $sub_rut = substr( $r, 0, strlen( $r ) -1 );
  $sub_dv = substr( $r, -1 );

  $x=2;
  $s=0;

  for ( $i=strlen($sub_rut)-1;$i>=0;$i-- ) {
	if ( $x >7 ) {
	  $x=2;
	}
	$s += $sub_rut[$i]*$x;
	$x++;
  }

  $dv = 11-($s%11);

  if ( $dv == 10 ) $dv = 'K';
  if ( $dv == 11 ) $dv = '0';

  if ( $dv == $sub_dv ) {
	return true;
  } else {
	return false;
  }
}

function fechaVencimiento($fecha){
  //Fecha now
  $dateNow = mktime(0,0,0,date('m'), date('d'),date('Y'));
  if($dateNow > $fecha){
    return true;
  } else {
    return false;
  }
}

define('PROFESOR', 1);
define('ALUMNO', 2);

function CTipoUsuario($tipo){
  switch($tipo){
    case 1:
	return 'Profesor';
	break;
	case 2:
	return 'Alumno';
	break;
  }
}

function getBreadcrums($arrBreadcrums = array(), $strRef = '') {
  $lngBreadcrumsCount = count($arrBreadcrums);
  if (is_array($arrBreadcrums) && $lngBreadcrumsCount > 0) {
    $i = 0;
    foreach ($arrBreadcrums as $key => $value) {
	  $i++;
	  if ($value != '') {
	    if ($i == $lngBreadcrumsCount) {
		  if ($strRef != '') {
		    $value .= $strRef;
		  }
		}
        $arrResultado[] = '<a href="' . $value . '">' . $key . '</a> ';
	  } else {
	    $arrResultado[] = $key . ' ';
	  }
    }
  } else {
    $arrResultado[] = '<a href="' . WEBROOT . '/">Inicio</a> ';
  }
  return join('&raquo; ', $arrResultado);
}


function subNavPaginacion($lngPageCurrent = 1, $lngPageCount = 1, $lngDelta = 10, $strQuery = '', $strBaseURL = '') {
  $strPager = '<div class="PagNav">';
  
  if ($lngDelta > $lngPageCount) {
    $lngDelta = $lngPageCount;
  }
  
  if ($lngPageCount - $lngPageCurrent < ceil($lngDelta / 2)) {
    $lngDesde = $lngPageCount - $lngDelta + 1;
  } elseif ($lngPageCurrent > floor($lngDelta / 2)) {
    $lngDesde = $lngPageCurrent - floor($lngDelta / 2);
  } else {
    $lngDesde = 1;
  }

  if ($lngPageCurrent < ceil($lngDelta / 2)) {
    $lngHasta = $lngDelta;
  } elseif ($lngPageCount > ceil($lngDelta / 2) + $lngPageCurrent - 1) {
    $lngHasta = $lngDesde + $lngDelta - 1;
  } else {
    $lngHasta = $lngPageCount;
  }

  if ($lngPageCurrent > 1) {
    $strPager .= '<a href="' . $_SERVER['PHP_SELF'] . '?pag=' . ($lngPageCurrent - 1) . ($strQuery != '' ? '&amp;' . $strQuery : '') . '" class="PagNav">&laquo;</a> ';
  }
  
  for ($i = $lngDesde; $i <= $lngHasta; $i++) {
    if ($i == $lngPageCurrent) {
       $strPager .= ' <strong class=\"PagNavActive\">' . $i . '</strong> ';
    } else {
      $strPager .= ' <a href="' . $_SERVER['PHP_SELF'] . '?pag=' . $i . ($strQuery != '' ? '&amp;' . $strQuery : '') . '" class="PagNav">' . $i . '</a> ';
    }
  }
  
  if ($lngPageCurrent < $lngPageCount) {
    $strPager .= " <a href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . ($lngPageCurrent + 1) . ($strQuery != '' ? '&amp;' . $strQuery : '') . "\" class=\"PagNav\">&raquo;</a>";
  }
  
  $strPager .= "</div>";
  return $strPager;
}

function subNavPaginacion2($lngPageCurrent = 1, $lngPageCount = 1, $lngDelta = 10, $strQuery = '', $strBaseURL = '', $f1, $f2, $f3) {
  $strPager = '<div class="PagNav">';
  
  if ($lngDelta > $lngPageCount) {
    $lngDelta = $lngPageCount;
  }
  
  if ($lngPageCount - $lngPageCurrent < ceil($lngDelta / 2)) {
    $lngDesde = $lngPageCount - $lngDelta + 1;
  } elseif ($lngPageCurrent > floor($lngDelta / 2)) {
    $lngDesde = $lngPageCurrent - floor($lngDelta / 2);
  } else {
    $lngDesde = 1;
  }

  if ($lngPageCurrent < ceil($lngDelta / 2)) {
    $lngHasta = $lngDelta;
  } elseif ($lngPageCount > ceil($lngDelta / 2) + $lngPageCurrent - 1) {
    $lngHasta = $lngDesde + $lngDelta - 1;
  } else {
    $lngHasta = $lngPageCount;
  }

  if ($lngPageCurrent > 1) {
    $strPager .= '<a href="' . $_SERVER['PHP_SELF'] . '?f1=' . $f1 . '&f2=' . $f2 . '&f3=' . $f3 . '&pag=' . ($lngPageCurrent - 1) . ($strQuery != '' ? '&amp;' . $strQuery : '') . '" class="PagNav">&laquo;</a> ';
  }
  
  for ($i = $lngDesde; $i <= $lngHasta; $i++) {
    if ($i == $lngPageCurrent) {
       $strPager .= ' <strong class=\"PagNavActive\">' . $i . '</strong> ';
    } else {
      $strPager .= ' <a href="' . $_SERVER['PHP_SELF'] . '?f1=' . $f1 . '&f2=' . $f2 . '&f3=' . $f3 . '&pag=' . $i . ($strQuery != '' ? '&amp;' . $strQuery : '') . '" class="PagNav">' . $i . '</a> ';
    }
  }
  
  if ($lngPageCurrent < $lngPageCount) {
    $strPager .= " <a href=\"" . $_SERVER['PHP_SELF'] . "?f1=" . $f1 . "&f2=" . $f2 . "&f3=" . $f3 . "&pag=" . ($lngPageCurrent + 1) . ($strQuery != '' ? '&amp;' . $strQuery : '') . "\" class=\"PagNav\">&raquo;</a>";
  }
  
  $strPager .= "</div>";
  return $strPager;
}

// Funcion para generar el paginador
function Paginador($lngPageCurrent = 1, $lngPageCount = 1, $lngDelta = 10, $strQuery = '') {
  $strPager = '<div class="pagination lv-pagination">';
  if ($lngDelta > $lngPageCount) {
    $lngDelta = $lngPageCount;
  }
  if ($lngPageCount - $lngPageCurrent < ceil($lngDelta / 2)) {
    $lngDesde = $lngPageCount - $lngDelta + 1;
  } elseif ($lngPageCurrent > floor($lngDelta / 2)) {
    $lngDesde = $lngPageCurrent - floor($lngDelta / 2);
  } else {
    $lngDesde = 1;
  }
  if ($lngPageCurrent < ceil($lngDelta / 2)) {
    $lngHasta = $lngDelta;
  } elseif ($lngPageCount > ceil($lngDelta / 2) + $lngPageCurrent - 1) {
    $lngHasta = $lngDesde + $lngDelta - 1;
  } else {
    $lngHasta = $lngPageCount;
  }

  if ($lngPageCurrent > 1) {
    $strPager .= '<li>
	  <a title="Primera página" href="'. $_SERVER['SCRIPT_NAME'] . '?pag=1' . $strQuery . '" aria-label="Previous">
	    <i class="zmdi zmdi-chevron-left"></i>
		<i class="zmdi zmdi-chevron-left"></i>
      </a>	  
	</li>
	<li>	  
	  <a title="Página anterior" href="'. $_SERVER['SCRIPT_NAME'] . '?pag=' . ($lngPageCurrent - 1) . $strQuery. '" aria-label="Previous">
	    <i class="zmdi zmdi-chevron-left"></i>
      </a>  
	</li>';
  }
  
  if ($lngHasta < $lngPageCount) {
    $lngHasta = $lngHasta;
  } elseif ($lngDesde > 1) {
    $lngDesde = $lngDesde;
  }

  for ($i = $lngDesde; $i <= $lngHasta; $i++) {
    if ($i == $lngPageCurrent) {
      $strPager .= '<li><a title="'.$lngPageCurrent.'" href="' . $_SERVER['SCRIPT_NAME'] . '?pag=' . $lngPageCurrent . $strQuery . '" style="background-color:#09C; color:#fff"><strong>' . $lngPageCurrent . '</strong></a></li>';
    } else {
      $strPager .= '<li><a title="' . $lngPageCurrent . '" href="' . $_SERVER['SCRIPT_NAME'] . '?pag=' . $i . $strQuery . '" >' . $i . '</a></li>';
    }
  }
  
  if ($lngPageCurrent < $lngPageCount) {
    $strPager .= '<li>
	<a title="Página siguiente" href="'. $_SERVER['SCRIPT_NAME'] . '?pag=' . ($lngPageCurrent + 1) . $strQuery.'" aria-label="Next"><i class="zmdi zmdi-chevron-right"></i></a>
	<a title="Última página" href="'. $_SERVER['SCRIPT_NAME'] . '?pag=' . $lngPageCount . $strQuery . '" aria-label="Next">
	  <i class="zmdi zmdi-chevron-right"></i>
	  <i class="zmdi zmdi-chevron-right"></i>
	</a>
	</li>';
  }

  $strPager .= '</div>';
  return $strPager;
}

// Funcion para generar el paginador
function Paginador2($lngPageCurrent = 1, $lngPageCount = 1, $lngDelta = 10, $strQuery = '', $instalacion, $empresa, $contrato) {
  $strPager = '<div class="pagination">';
  if ($lngDelta > $lngPageCount) {
    $lngDelta = $lngPageCount;
  }
  if ($lngPageCount - $lngPageCurrent < ceil($lngDelta / 2)) {
    $lngDesde = $lngPageCount - $lngDelta + 1;
  } elseif ($lngPageCurrent > floor($lngDelta / 2)) {
    $lngDesde = $lngPageCurrent - floor($lngDelta / 2);
  } else {
    $lngDesde = 1;
  }
  if ($lngPageCurrent < ceil($lngDelta / 2)) {
    $lngHasta = $lngDelta;
  } elseif ($lngPageCount > ceil($lngDelta / 2) + $lngPageCurrent - 1) {
    $lngHasta = $lngDesde + $lngDelta - 1;
  } else {
    $lngHasta = $lngPageCount;
  }

  if ($lngPageCurrent > 1) {
    $strPager .= '<li><a title="Primera página" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=1' . $strQuery . '"><span>Primera</span></a></li>'
     . '<li><a title="Página anterior" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . ($lngPageCurrent - 1) . $strQuery
	 . '">Anterior</a></li>';
  }
  
  if ($lngHasta < $lngPageCount) {
    $lngHasta = $lngHasta;
  } elseif ($lngDesde > 1) {
    $lngDesde = $lngDesde;
  }

  for ($i = $lngDesde; $i <= $lngHasta; $i++) {
    if ($i == $lngPageCurrent) {
      $strPager .= '<li><a title="'.$lngPageCurrent.'" href="' . $_SERVER['SCRIPT_NAME'] . '?sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . $lngPageCurrent . $strQuery . '" style="background-color:#09C; color:#fff">' . $lngPageCurrent . '</a></li>';
    } else {
      $strPager .= '<li><a title="' . $lngPageCurrent . '" href="' . $_SERVER['SCRIPT_NAME'] . '?sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . $i . $strQuery . '" >' . $i . '</a></li>';
    }
  }
  
  if ($lngPageCurrent < $lngPageCount) {
    $strPager .= '<li><a title="Página siguiente" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . ($lngPageCurrent + 1) . $strQuery
	 . '">Siguiente</a><a title="Última página" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . $lngPageCount . $strQuery . '">Última</a></li>';
  }

  $strPager .= '</div>';
  return $strPager;
}

function Paginador3($lngPageCurrent = 1, $lngPageCount = 1, $lngDelta = 10, $strQuery = '', $estado, $instalacion, $empresa, $contrato) {
  $strPager = '<div class="pagination">';
  if ($lngDelta > $lngPageCount) {
    $lngDelta = $lngPageCount;
  }
  if ($lngPageCount - $lngPageCurrent < ceil($lngDelta / 2)) {
    $lngDesde = $lngPageCount - $lngDelta + 1;
  } elseif ($lngPageCurrent > floor($lngDelta / 2)) {
    $lngDesde = $lngPageCurrent - floor($lngDelta / 2);
  } else {
    $lngDesde = 1;
  }
  if ($lngPageCurrent < ceil($lngDelta / 2)) {
    $lngHasta = $lngDelta;
  } elseif ($lngPageCount > ceil($lngDelta / 2) + $lngPageCurrent - 1) {
    $lngHasta = $lngDesde + $lngDelta - 1;
  } else {
    $lngHasta = $lngPageCount;
  }

  if ($lngPageCurrent > 1) {
    $strPager .= '<li><a title="Primera página" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=1' . $strQuery . '"><span>Primera</span></a></li>'
     . '<li><a title="Página anterior" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . ($lngPageCurrent - 1) . $strQuery
	 . '">Anterior</a></li>';
  }
  
  if ($lngHasta < $lngPageCount) {
    $lngHasta = $lngHasta;
  } elseif ($lngDesde > 1) {
    $lngDesde = $lngDesde;
  }

  for ($i = $lngDesde; $i <= $lngHasta; $i++) {
    if ($i == $lngPageCurrent) {
      $strPager .= '<li><a title="'.$lngPageCurrent.'" href="' . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . $lngPageCurrent . $strQuery . '" style="background-color:#09C; color:#fff">' . $lngPageCurrent . '</a></li>';
    } else {
      $strPager .= '<li><a title="' . $lngPageCurrent . '" href="' . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . $i . $strQuery . '" >' . $i . '</a></li>';
    }
  }
  
  if ($lngPageCurrent < $lngPageCount) {
    $strPager .= '<li><a title="Página siguiente" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . ($lngPageCurrent + 1) . $strQuery
	 . '">Siguiente</a><a title="Última página" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&sel_instalacion='.$instalacion.'&sel_empresa='.$empresa.'&sel_contrato='.$contrato.'&pag=' . $lngPageCount . $strQuery . '">Última</a></li>';
  }

  $strPager .= '</div>';
  return $strPager;
}

function Paginador4($lngPageCurrent = 1, $lngPageCount = 1, $lngDelta = 10, $strQuery = '', $estado) {
  $strPager = '<div class="pagination">';
  if ($lngDelta > $lngPageCount) {
    $lngDelta = $lngPageCount;
  }
  if ($lngPageCount - $lngPageCurrent < ceil($lngDelta / 2)) {
    $lngDesde = $lngPageCount - $lngDelta + 1;
  } elseif ($lngPageCurrent > floor($lngDelta / 2)) {
    $lngDesde = $lngPageCurrent - floor($lngDelta / 2);
  } else {
    $lngDesde = 1;
  }
  if ($lngPageCurrent < ceil($lngDelta / 2)) {
    $lngHasta = $lngDelta;
  } elseif ($lngPageCount > ceil($lngDelta / 2) + $lngPageCurrent - 1) {
    $lngHasta = $lngDesde + $lngDelta - 1;
  } else {
    $lngHasta = $lngPageCount;
  }

  if ($lngPageCurrent > 1) {
    $strPager .= '<li><a title="Primera página" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&pag=1' . $strQuery . '"><span>Primera</span></a></li>'
     . '<li><a title="Página anterior" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&pag=' . ($lngPageCurrent - 1) . $strQuery
	 . '">Anterior</a></li>';
  }
  
  if ($lngHasta < $lngPageCount) {
    $lngHasta = $lngHasta;
  } elseif ($lngDesde > 1) {
    $lngDesde = $lngDesde;
  }

  for ($i = $lngDesde; $i <= $lngHasta; $i++) {
    if ($i == $lngPageCurrent) {
      $strPager .= '<li><a title="'.$lngPageCurrent.'" href="' . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&pag=' . $lngPageCurrent . $strQuery . '" style="background-color:#09C; color:#fff">' . $lngPageCurrent . '</a></li>';
    } else {
      $strPager .= '<li><a title="' . $lngPageCurrent . '" href="' . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&pag=' . $i . $strQuery . '" >' . $i . '</a></li>';
    }
  }
  
  if ($lngPageCurrent < $lngPageCount) {
    $strPager .= '<li><a title="Página siguiente" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&pag=' . ($lngPageCurrent + 1) . $strQuery
	 . '">Siguiente</a><a title="Última página" href="'
	 . $_SERVER['SCRIPT_NAME'] . '?estado='.$estado.'&pag=' . $lngPageCount . $strQuery . '">Última</a></li>';
  }

  $strPager .= '</div>';
  return $strPager;
}


function CTipoActividad($intTipo){
  switch($intTipo){
	case 1:
	  return 'Video';
	break;
	case 2:
	  return 'Imagen';
	break;
	case 3:
	  return 'Contenido';
	break;
	case 4:
	  return 'Evaluación';
	break;
	case 5:
	  return 'Subir tarea';
	break;
  }
}

function CStringSQL($string) {
  if (get_magic_quotes_gpc()) {
    return "'" . $string . "'";
  } else {
    return "'" . mysql_real_escape_string($string) . "'";
  }
}

function CFechaCorta($datUnaFecha=false) {
  return date("d-m-Y", $datUnaFecha);
}

function CFecha($datUnaFecha=false) {
  // cargamos los arrays con los nombres de los dias y los meses
  $NombresMeses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

  // tomamos datos actuales
  if ($datUnaFecha == NULL) {
    $NumDiaActual = date("d");
    $NumMesActual = date("m");
    $AnoActual = date("Y");
  } else {
    $NumDiaActual = date("d",$datUnaFecha);
    $NumMesActual = date("m",$datUnaFecha);
    $AnoActual = date("Y",$datUnaFecha);
  }

  /* ahora lo que hacemos es ordenar los datos anteriores en el formato que
  deseamos y dependiendo de estos datos los cambiamos por palabras, osea
  $NombresDias[2] seria igual a Martes, por ejemplo sacamos el numero del dia
  de la semana en q estamos y buscamos su pareja en el array $NombreDias , asi
  con el resto */

  $Hoy = $NumDiaActual." de ".$NombresMeses[$NumMesActual-1]." de ".$AnoActual;

  // retornamos la variable $Hoy
  return $Hoy;
}




function CFechaHora($datUnaFecha=false) {
  $NombresMeses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

  if ($datUnaFecha == NULL) {
    $NumDiaActual = date("d");
    $NumMesActual = date("m");
    $AnoActual = date("Y");
	$NumHoraActual = date("H");
	$NumMinutoActual = date("i");
	$NumSegundoActual = date("s");
  } else {
    $NumDiaActual = date("d",$datUnaFecha);
    $NumMesActual = date("m",$datUnaFecha);
    $AnoActual = date("Y",$datUnaFecha);
	$NumHoraActual = date("H",$datUnaFecha);
	$NumMinutoActual = date("i",$datUnaFecha);
	$NumSegundoActual = date("s",$datUnaFecha);
  }

  $Hoy = $NumDiaActual." de ".$NombresMeses[$NumMesActual-1]." de ".$AnoActual." a las ".$NumHoraActual.":".$NumMinutoActual.":".$NumSegundoActual;
  return $Hoy;
}

function CFechaHoraCorta($datUnaFecha=false) {

  if ($datUnaFecha == NULL) {
    $NumDiaActual = date("d");
    $NumMesActual = date("m");
    $AnoActual = date("Y");
	$NumHoraActual = date("H");
	$NumMinutoActual = date("i");
	$NumSegundoActual = date("s");
  } else {
    $NumDiaActual = date("d",$datUnaFecha);
    $NumMesActual = date("m",$datUnaFecha);
    $AnoActual = date("Y",$datUnaFecha);
	$NumHoraActual = date("H",$datUnaFecha);
	$NumMinutoActual = date("i",$datUnaFecha);
	$NumSegundoActual = date("s",$datUnaFecha);
  }

  $Hoy = $NumDiaActual."-".$NumMesActual."-".$AnoActual." ".$NumHoraActual.":".$NumMinutoActual.":".$NumSegundoActual;
  return $Hoy;
}

function CFechaCompleta($datUnaFecha=false) {
  // cargamos los arrays con los nombres de los dias y los meses
  $NombresDias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
  $NombresMeses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");

  // tomamos datos actuales
  if ($datUnaFecha == NULL) {
    $NumDiaSemanaActual = date("w");
    $NumDiaActual = date("d");
    $NumMesActual = date("m");
    $AnoActual = date("Y");
  } else {
    $NumDiaSemanaActual = date("w",$datUnaFecha);
	$NumDiaActual = date("d",$datUnaFecha);
    $NumMesActual = date("m",$datUnaFecha);
    $AnoActual = date("Y",$datUnaFecha);
  }

  /* ahora lo que hacemos es ordenar los datos anteriores en el formato que
  deseamos y dependiendo de estos datos los cambiamos por palabras, osea
  $NombresDias[2] seria igual a Martes, por ejemplo sacamos el numero del dia
  de la semana en q estamos y buscamos su pareja en el array $NombreDias , asi
  con el resto */

  $Hoy = $NombresDias[$NumDiaSemanaActual].", ".$NumDiaActual." de ".$NombresMeses[$NumMesActual-1]." de ".$AnoActual;

  // retornamos la variable $Hoy
  return $Hoy;
}

function CMesNombre ($lngMes=1) {
  $NombresMeses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  return $NombresMeses[$lngMes - 1];
}

function CMesNombreCorto ($lngMes=1) {
  $NombresMeses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
  return $NombresMeses[$lngMes - 1];
}

function CFechaMySQL ($datUnaFecha=false) {
  // tomamos datos actuales
  if ($datUnaFecha == NULL) {
    $NumDiaActual = date("d");
    $NumMesActual = date("m");
    $AnoActual = date("Y");
  } else {
	$NumDiaActual = date("d",$datUnaFecha);
    $NumMesActual = date("m",$datUnaFecha);
    $AnoActual = date("Y",$datUnaFecha);
  }
  $Hoy = CStringSQL($AnoActual."-".$NumMesActual."-".$NumDiaActual);
  return $Hoy;
}

function CFechaHoraMySQL ($datUnaFecha=false) {
  // tomamos datos actuales
  if ($datUnaFecha == NULL) {
    $NumDiaActual = date("d");
    $NumMesActual = date("m");
    $AnoActual = date("Y");
    $NumHoraActual = date("H");
    $NumMinutoActual = date("i");
    $NumSegundoActual = date("s");
  } else {
	$NumDiaActual = date("d",$datUnaFecha);
    $NumMesActual = date("m",$datUnaFecha);
    $AnoActual = date("Y",$datUnaFecha);
	$NumHoraActual = date("H",$datUnaFecha);
    $NumMinutoActual = date("i",$datUnaFecha);
    $NumSegundoActual = date("s",$datUnaFecha);
  }
  $Hoy = CStringSQL($AnoActual."-".$NumMesActual."-".$NumDiaActual." ".$NumHoraActual.":".$NumMinutoActual.":".$NumSegundoActual);
  return $Hoy;
}

function HaceCuantoTiempo($datFecha = false) {
  $lngDifMinutos = floor((time() - $datFecha) / 60);
  if ($lngDifMinutos < 1) {
    $strHaceCuanto = 'hace menos de un minuto';
  } elseif ($lngDifMinutos < 60) {
    $strHaceCuanto = 'hace ' . $lngDifMinutos . ' minutos';
  } elseif ($lngDifMinutos > 60 && $lngDifMinutos < (60 * 24)) {
    $strHaceCuanto = 'hace ' . round($lngDifMinutos / 60) . ' horas';
  } elseif ($lngDifMinutos > (60 * 24) && $lngDifMinutos < (60 * 24 * 7) ) {
    $strHaceCuanto = 'hace ' . round($lngDifMinutos / (60 * 24)) . ' días';
  } else {
    $strHaceCuanto = 'Desde el ' . CFecha($datFecha );
  }  
  return $strHaceCuanto;
}

function CSumaDias($fecha,$ndias) {
  if (preg_match("/[0-9]{1,2}\/[0-9]{1,2}\/([0-9][0-9]){1,2}/",$fecha))
    list($dia,$mes,$año)=split("/", $fecha);
  if (preg_match("/[0-9]{1,2}-[0-9]{1,2}-([0-9][0-9]){1,2}/",$fecha))
    list($dia,$mes,$año)=split("-",$fecha);
  $nueva = mktime(0,0,0, $mes,$dia,$año) + $ndias * 24 * 60 * 60;
  $nuevafecha=date("d-m-Y",$nueva);
  return ($nuevafecha);
}

function LimitarTexto($text, $maxchar){
  $newtext = '';	
  $text = str_replace('<p>', '', $text);
  $text = str_replace('</p>', '', $text);
  $text = str_replace('<br />', '', $text);
  $split = explode(" ", $text);
  $i = 0;
  while(TRUE) {
    $len = (strlen($newtext) + strlen($split[$i]));
    if ($len > $maxchar) {
      break;
    } else {
      $newtext = $newtext . " " . $split[$i] . 'mauro';
      $i++;
    }
  }
  return $newtext;
}

function CMoneda($strNumero = 0, $lngNumDecimales = 0, $strSigno = '$') {  // v1.0
  if ($strNumero == 0) {
    return $strSigno . " " . 0;
  } else {
    return $strSigno . " " . number_format($strNumero, $lngNumDecimales, ',', '.');
  }
}

function CMonedaDecimales($strNumero = 0, $lngNumDecimales = 2, $strSigno = '$') {  // v1.0
  if ($strNumero == 0) {
    return $strSigno . " " . 0;
  } else {
    return $strSigno . " " . number_format($strNumero, $lngNumDecimales, ',', '.');
  }
}

function CNumero($strNumero = 0, $lngNumDecimales = 0) {  // v1.0
  if ($strNumero == 0) {
    return 0;
  } else {
    return number_format($strNumero, $lngNumDecimales, ',', '.');
  }
}

function CPesoArchivo($lngNumero = 0, $lngNumDecimales = 0) {  // v1.0
  if ($lngNumero == 0) {
    return '0&nbsp;KB';
  } elseif ($lngNumero <= (1024 * 1024)) {
    return number_format($lngNumero / 1024, $lngNumDecimales, ',', '.') . '&nbsp;KB';
  } else {
    return number_format($lngNumero / (1024 * 1024), $lngNumDecimales, ',', '.') . '&nbsp;MB';
  }
}

function CExtension($strArchivo) {
  return strtolower(substr($strArchivo, strlen($strArchivo) - strpos(strrev($strArchivo), '.')));
}

function GeneraReferenciaUnica($strTitulo) {
  $arrReemplazarOriginal = array('/\s/', '/[áàâä]/', '/[éèêë]/', '/[íìîï]/', '/[óòôö]/', '/[úùûü]/', '/ñ/', '/Ñ/', '/\(/', '/\)/', '/{/', '/}/', '/[^a-zA-Z0-9_.\[\]()-]/');
  $arrReemplazarPor = array('-', 'a', 'e', 'i', 'o', 'u', 'n', 'N', '_', '_', '_', '_', '');

  $strReferenciaUnica = preg_replace($arrReemplazarOriginal, $arrReemplazarPor, strtolower(trim($strTitulo)));

  return $strReferenciaUnica;
}

function LimpiarNombreArchivo($strArchivo) {
  $arrReemplazarOriginal = array('/\s/', '/[áàâä]/', '/[éèêë]/', '/[íìîï]/', '/[óòôö]/', '/[úùûü]/', '/ñ/', '/[ÁÀÂÄ]/', '/[ÉÈÊË]/', '/[ÍÌÎÏ]/', '/[ÓÒÔÖ]/', '/[ÚÙÛÜ]/', '/Ñ/', '/{/', '/}/', '/[^a-zA-Z0-9_.\[\]()-]/');
  $arrReemplazarPor = array('_', 'a', 'e', 'i', 'o', 'u', 'n', 'A', 'E', 'I', 'O', 'U', 'N', '(', ')', '_');
  $strNuevoNombreArchivo = preg_replace($arrReemplazarOriginal, $arrReemplazarPor, $strArchivo);
  return $strNuevoNombreArchivo;
}

function CTipoMIME($strExtension) {
  global $arrTIPOSMIME;
  return array_key_exists($strExtension, $arrTIPOSMIME) ? $arrTIPOSMIME[$strExtension] : 'application/octet-stream';
}

function QuitarIDUnico($strArchivo) {
  // Obtenemos la posicin del primer '_' en el nombre del Archivo
  $lngPosicion_Caracter = strpos($strArchivo, '_');

  // Retorna el nombre a partir del caracter '_'
  return substr($strArchivo, $lngPosicion_Caracter + 1);
}

define('SUBIRARCHIVO_ERROR', 0);
define('SUBIRARCHIVO_NUEVO', 1);
define('SUBIRARCHIVO_MANTENIDO', 2);
define('SUBIRARCHIVO_ACTUALIZADO', 3);
define('SUBIRARCHIVO_ELIMINADO', 4);

//FUNCION CREADA SOLO PARA CARGAR LAS FOTOS DE LOS USUARIOS Y EMPRESAS.
function SubirFotoPerfil($strCampo, $strCarpeta, $arrTiposAceptados, $idUsr) {
  $lngResultado = SUBIRARCHIVO_ERROR;
  $strMensaje = '';
  $strArchivo = '';
  $lngPeso = 0;

  if ($strCarpeta == '') {
    $lngResultado = SUBIRARCHIVO_ERROR;
	$strMensaje = 'No está autorizado a cargar archivos a esta carpeta';
  } else {

    if((int)$_FILES[$strCampo]['size'] == 0){
	  $lngResultado = SUBIRARCHIVO_ERROR;
	  $strMensaje = 'El archivo no puede superar los 2MB de peso.';
	  $strArchivo = '';
	  $lngPeso = 0;
	} else if (isset($_POST[$strCampo . 'a']) && $_POST[$strCampo . 'a'] != '' && isset($_POST[$strCampo . 'b']) && $_POST[$strCampo . 'b'] != '') {
	  // Si exista un archivo previo y fue marcado para borrar
      // Borrar el archivo existente
      @unlink(realpath($strCarpeta . '/' . $_POST[$strCampo . 'a']));
      $strArchivo = '';
      $lngPeso = 0;
      $lngResultado = SUBIRARCHIVO_ELIMINADO;
    } else {
      // Conserva el nombre del archivo existente
      $strArchivo = isset($_POST[$strCampo . 'a']) ? $_POST[$strCampo . 'a']: '';
      $lngPeso = isset($_POST[$strCampo . 'c']) ? $_POST[$strCampo . 'c']: '';
      $lngResultado = SUBIRARCHIVO_MANTENIDO;
    }

    // Si se subio un nuevo archivo
    if (is_uploaded_file($_FILES[$strCampo]['tmp_name'])) {
      $strArchivo = $_FILES[$strCampo]['name'];

      // Si existia antes un archivo, este ser eliminado
      if (isset($_POST[$strCampo . 'a']) && $_POST[$strCampo . 'a'] != '' && isset($_POST[$strCampo . 'b']) && $_POST[$strCampo . 'b'] == '') {
        // Borrar el archivo existente
        @unlink(realpath($strCarpeta . '/' . $_POST[$strCampo . 'a']));
        $lngResultado = SUBIRARCHIVO_ACTUALIZADO;
      }

	  if (!in_array(CExtension($strArchivo), $arrTiposAceptados)) {
        $lngResultado = SUBIRARCHIVO_ERROR;
        $strMensaje = 'Tipo de archivo incorrecto. Sólo puede cargar archivos de tipo: ' . join(', ' , $arrTiposAceptados);
        $strArchivo = '';
		$lngPeso = 0;
	  } elseif ($_FILES[$strCampo]['size'] == 0) {
        $lngResultado = SUBIRARCHIVO_ERROR;
        $strMensaje = 'El nuevo archivo esta vacio (0 bytes)';
        $strArchivo = '';
		$lngPeso = 0;
	  } else {
        $unique_id = uniqid('');
	    //$strArchivo = $unique_id . '_' . LimpiarNombreArchivo($_FILES[$strCampo]['name']);
        $arrExtension = explode('.', $_FILES[$strCampo]['name']);
		$extension = $arrExtension[count($arrExtension)-1];
		$strArchivo = $idUsr.'.'.$extension;
		$result = move_uploaded_file($_FILES[$strCampo]['tmp_name'], $strCarpeta . '/' . $strArchivo);
	    if ($result == 0) {
	      $lngResultado = SUBIRARCHIVO_ERROR;
	      $strMensaje = 'No pudo moverse el archivo a su ubicación final';
	      $strArchivo = '';
	      $lngPeso = 0;
	    } else {
          $lngResultado = $lngResultado != SUBIRARCHIVO_ACTUALIZADO ? SUBIRARCHIVO_NUEVO : SUBIRARCHIVO_ACTUALIZADO;
	      @chmod($strCarpeta . '/' . $strArchivo, 0744 );
	      $lngPeso = $_FILES[$strCampo]['size'];
	    }
	  }
    }
  }

  return array('archivo' => $strArchivo, 'peso' => $lngPeso, 'resultado' => $lngResultado, 'mensaje' => $strMensaje);
}

function SubirArchivo($strCampo, $strCarpeta, $arrTiposAceptados) {
  $lngResultado = SUBIRARCHIVO_ERROR;
  $strMensaje = '';
  $strArchivo = '';
  $lngPeso = 0;

  if ($strCarpeta == '') {
    $lngResultado = SUBIRARCHIVO_ERROR;
	$strMensaje = 'No está autorizado a cargar archivos a esta carpeta';
  } else {

    // Si exista un archivo previo y fue marcado para borrar
    if (isset($_POST[$strCampo . 'a']) && $_POST[$strCampo . 'a'] != '' && isset($_POST[$strCampo . 'b']) && $_POST[$strCampo . 'b'] != '') {
      // Borrar el archivo existente
      @unlink(realpath($strCarpeta . '/' . $_POST[$strCampo . 'a']));
      $strArchivo = '';
      $lngPeso = 0;
      $lngResultado = SUBIRARCHIVO_ELIMINADO;
    } else {
      // Conserva el nombre del archivo existente
      $strArchivo = isset($_POST[$strCampo . 'a']) ? $_POST[$strCampo . 'a']: '';
      $lngPeso = isset($_POST[$strCampo . 'c']) ? $_POST[$strCampo . 'c']: '';
      $lngResultado = SUBIRARCHIVO_MANTENIDO;
    }

    // Si se subio un nuevo archivo
    if (is_uploaded_file($_FILES[$strCampo]['tmp_name'])) {
      $strArchivo = $_FILES[$strCampo]['name'];

      // Si existia antes un archivo, este ser eliminado
      if (isset($_POST[$strCampo . 'a']) && $_POST[$strCampo . 'a'] != '' && isset($_POST[$strCampo . 'b']) && $_POST[$strCampo . 'b'] == '') {
        // Borrar el archivo existente
        @unlink(realpath($strCarpeta . '/' . $_POST[$strCampo . 'a']));
        $lngResultado = SUBIRARCHIVO_ACTUALIZADO;
      }

	  if (!in_array(CExtension($strArchivo), $arrTiposAceptados)) {
        $lngResultado = SUBIRARCHIVO_ERROR;
        $strMensaje = 'Tipo de archivo incorrecto. Sólo puede cargar archivos de tipo: ' . join(', ' , $arrTiposAceptados);
        $strArchivo = '';
		$lngPeso = 0;
	  } elseif ($_FILES[$strCampo]['size'] == 0) {
        $lngResultado = SUBIRARCHIVO_ERROR;
        $strMensaje = 'El nuevo archivo esta vacio (0 bytes)';
        $strArchivo = '';
		$lngPeso = 0;
	  } else {
        $unique_id = uniqid('');
	    $strArchivo = $unique_id . '_' . LimpiarNombreArchivo($_FILES[$strCampo]['name']);
        $result = move_uploaded_file($_FILES[$strCampo]['tmp_name'], $strCarpeta . '/' . $strArchivo);
	    if ($result == 0) {
	      $lngResultado = SUBIRARCHIVO_ERROR;
	      $strMensaje = 'No pudo moverse el archivo a su ubicación final';
	      $strArchivo = '';
	      $lngPeso = 0;
	    } else {
          $lngResultado = $lngResultado != SUBIRARCHIVO_ACTUALIZADO ? SUBIRARCHIVO_NUEVO : SUBIRARCHIVO_ACTUALIZADO;
	      @chmod($strCarpeta . '/' . $strArchivo, 0744 );
	      $lngPeso = $_FILES[$strCampo]['size'];
	    }
	  }
    }
  }

  return array('archivo' => $strArchivo, 'peso' => $lngPeso, 'resultado' => $lngResultado, 'mensaje' => $strMensaje);
}

function EliminarArchivo($strArchivo, $strCarpeta) {
  if (!strpos($strArchivo, '..') && file_exists($strCarpeta . '/' . $strArchivo)) {
	return @unlink(realpath($strCarpeta . '/' . $strArchivo));
  } else {
    return false;
  }
}

function NoEsVacia($var) {
  return trim($var) != '';
}
?>