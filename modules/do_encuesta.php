<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	

	$registros = $encuesta->preguntasalCliente();
	$listEncuestas =  $encuesta->getListEncuesta();


	$smarty->assign('encuestas',$listEncuestas);
	$smarty->assign('registros',$registros);
	
?>