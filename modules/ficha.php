<?php

	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */

	
	
	
	$cliente->setId($_GET["x"]);
	$info = $cliente->infoFicha();
	
	// echo "<pre>"; print_r($info);
	// exit;

	
	$smarty->assign('info',$info);
	$smarty->assign('lst',$lst);
	
?>