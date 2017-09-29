<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	
	// echo "<pre>"; print_r($_GET);
	// exit; 
	$encuesta->setId($_GET["x"]);
	$info = $encuesta->Info();
	$data = $encuesta->totalesRespuesta();
	$lstAbiertas = $encuesta->preguntasAbiertas();


	
	$smarty->assign('lstAbiertas',$lstAbiertas);
	$smarty->assign('info',$info);
	$smarty->assign('data',$data);

	
?>