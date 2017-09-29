<?php

	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	
	// $registros = $secretaria->Enumerate();

	
	$smarty->assign('registros',$registros);
	
?>