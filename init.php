<?php 
		
	ini_set("display_errors", 1); 
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	
	if(function_exists('xdebug_disable'))
		xdebug_disable();
	
	date_default_timezone_set('America/Mexico_City');
	header('Content-type: text/html; charset=utf-8');
	
	if($_GET['page'] != 'cuenta-cobrar-recibo' && $_GET['page'] != 'export-excel' && $_GET['page'] != 'export-pdf'){	
		mb_internal_encoding('UTF-8');
		mb_http_output('UTF-8');
		mb_http_input('UTF-8');
		mb_language('uni');
		mb_regex_encoding('UTF-8');
		ob_start('mb_output_handler');
	}

?>