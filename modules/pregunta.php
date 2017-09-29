<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	
	// echo "<pre>"; print_r($_GET);
	// exit;

	$encuesta->setId($_GET["x"]);
	$registros = $encuesta->EnumeratePreguntas();
	
	$info = $encuesta->Info();
	
	$smarty->assign('encuestaId',$_GET["x"]);
	$smarty->assign('info',$info);
	$smarty->assign('registros',$registros);
	
?>