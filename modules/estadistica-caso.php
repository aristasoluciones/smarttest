<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	
	$usr = $_SESSION['Usr'];
	
	$d = date('d'); $m = date('m'); $y = date('Y');
	$mes = $util->MakeTime($d,$m, $y);
	$numeroDias = intval(date("t",$mes));
	
	$info['fechaInicioF'] = $y.'-'.$m.'-01';
	$info['fechaFinF'] = $y.'-'.$m.'-'.$numeroDias;
	
	$estadisticaCaso->setEstabloId( $usr['establoId'] );
	$estadisticaCaso->setFechaInicio( $info['fechaInicioF'] );
	$estadisticaCaso->setFechaFin( $info['fechaFinF'] );
	
	$listDiagnostico = $diagnostico->EnumerateAll();

	$registros = $estadisticaCaso->Enumerate( $info );


	$info['fechaInicioF'] = $util->ChangeDateFormat($info['fechaInicioF']);
	$info['fechaFinF'] = $util->ChangeDateFormat($info['fechaFinF']);
	
	$smarty->assign('registros',$registros);
	$smarty->assign('listDiagnostico',$listDiagnostico);
	$smarty->assign('info',$info);
	

	
?>