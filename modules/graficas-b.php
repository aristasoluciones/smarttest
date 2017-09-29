<?php
	// echo "<pre>"; print_r($_GET);
// exit;	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	// echo "<pre>"; print_r($_GET);
	// exit;
	
	$smarty->assign('q',$_GET["q"]);
	$smarty->assign('msjConfirma',$msjConfirma);
	$smarty->assign('registros',$registros);
	
?>