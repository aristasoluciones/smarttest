<?php

switch($_SERVER['HTTP_HOST'])
{
	//Local
	case 'localhost': 	
			$webRoot = 'http://'.$_SERVER['HTTP_HOST'].'/smarttest'; 
			$docRoot = $_SERVER['DOCUMENT_ROOT'].'/smarttest'; 
			$sqlUser = 'root'; 
			$sqlPw = ''; 
			$sqlHost = 'localhost'; 
			$sqlDb = 'encuestas';
		break;
	
	//Server de Pruebas
	case '192.168.1.200': 
	case 'desarrollot.no-ip.biz': 
			$webRoot = 'http://'.$_SERVER['HTTP_HOST'].'/lavanderia'; 
			$docRoot = $_SERVER['DOCUMENT_ROOT'].'/lavanderia'; 
			$sqlUser = 'root'; 
			$sqlPw = 'root'; 
			$sqlHost = '192.168.1.200'; 
			$sqlDb = 'ceba_db';
		break;
	
	//Produccion
	default:	
			$webRoot = 'http://'.$_SERVER['HTTP_HOST'].'/smarttest'; 
			$docRoot = $_SERVER['DOCUMENT_ROOT'].'/smarttest'; 
			$rutaDocumento =  'http://'.$_SERVER['HTTP_HOST'].'/smarttest';
			$rutaPortada =   'http://'.$_SERVER['HTTP_HOST'].'/smarttest';
			$sqlUser = 'aristaso_spoll'; 
			$sqlPw = 'Arista_2017'; 
			$sqlHost = 'localhost'; 
			$sqlDb = 'aristaso_encuestas';
		break;
}

/** RUTAS GENERALES **/

define('DOC_ROOT', $docRoot);
define('WEB_ROOT', $webRoot);

/** BASE DE DATOS **/

define('SQL_HOST', $sqlHost);
define('SQL_DATABASE', $sqlDb);
define('SQL_USER', $sqlUser);
define('SQL_PASSWORD', $sqlPw);

define('USER_PAC', '');
define('PW_PAC', '');

/** SMTP **/

define('SMTP_HOST','mail.avantika.com.mx');
define('SMTP_PORT',587);
define('SMTP_USER','smtp@avantika.com.mx');
define('SMTP_PASS','smtp1234');

/** PAGINACION **/

define('ITEMS_PER_PAGE', '20');

/** NOMBRE DEL SISTEMA **/

define('PROJECT_NAME', 'Smart Test');
define('FOOTER', 'SmartTest 2017');

?>