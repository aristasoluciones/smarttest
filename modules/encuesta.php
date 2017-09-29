<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	

	$data = $encuesta->Enumerate();


	
	$smarty->assign('data',$data);

	
?>