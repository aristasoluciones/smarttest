<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	

	$registros = $encuesta->preguntasalCliente();


	$smarty->assign('registrosC',$registrosC);
	$smarty->assign('registros',$registros);
	
?>