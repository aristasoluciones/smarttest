<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	$usr = $_SESSION['Usr'];
	
	$parametro = array(
		'filtro' => true,
		'establoId' => $usr['establoId']
	);
	
	$registros = $tratamiento->Enumerate( $parametro );
	
	// echo'<PRE>';
	// print_r($registros);
	// exit;
	
	$smarty->assign('registros',$registros);
	
?>