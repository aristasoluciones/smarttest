<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	// echo "<pre>"; print_r($_SESSION['Usr']);
	// exit;
	$myproyect->setClienteId($_SESSION['Usr']["clienteId"]);
	$registros = $myproyect->Enumerate();
	// $registros['result'] = $util->EncodeResult($registros['result']);
	// echo "<pre>"; print_r($registros);
	// exit;
	$smarty->assign('registros',$registros);
	
?>