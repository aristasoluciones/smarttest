<?php
	// echo "<pre>"; print_r($_GET);
// exit;	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	
	
	
	$lstdoc = $documento->totalxDoc();
	
	
	// unset($_SESSION["msjConfirmacion"]);
	// echo "<pre>"; print_r($lstdoc );
	// exit;
	$smarty->assign('lstdoc',$lstdoc);
	$smarty->assign('msjConfirma',$msjConfirma);
	$smarty->assign('registros',$registros);
	
?>