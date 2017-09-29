<?php
	
	$_GET['page'] = 'export-pdf';
	
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');
	
	session_start();
	
	if($_POST['fechaIni'])
		$fecha = date('Y-m-d',strtotime($_POST['fechaIni']));
	if($_POST['fechaFin'])
		$fechaFin = date('Y-m-d',strtotime($_POST['fechaFin']));
	
	$donativo->setClienteId($_POST['clienteId2']);
	$donativo->setConceptoId($_POST['conceptoId2']);
	$donativo->setConceptoSubId($_POST['conceptoSubId2']);
	$donativo->setConceptoSub2Id($_POST['conceptoSub2Id2']);
	$donativo->setFecha($fecha);
	$donativo->setFechaFin($fechaFin);
	$donativo->setPeriodicidad($_POST['periodicidad2']);
	$donativo->setStatus($_POST['status2']);
	
	$donativo->setPage($_POST['p']);
	$registros = $donativo->Search();
		
//HTML - PDF
	
	$html .= '
	<html>
<head>
<style type="text/css">
body{
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:10px;
}
</style>
</head>
<body>

<h2 align="center">DONATIVOS</h2>
<br><br>
';


$html .= '
		  <table width="550" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="8%" align="center" bgcolor="#CCCCCC">ID</td>
			<td width="" align="center" bgcolor="#CCCCCC">CLIENTE</td>
			<td width="20%" align="center" bgcolor="#CCCCCC">CONCEPTO</td>
			<td width="10%" align="center" bgcolor="#CCCCCC">FECHA</td>
			<td width="14%" align="center" bgcolor="#CCCCCC">MONTO</td>
			<td width="10%" align="center" bgcolor="#CCCCCC">PERIODICIDAD</td>
			<td width="8%" align="center" bgcolor="#CCCCCC">STATUS</td>			
		  </tr>';
		
		foreach($registros['result'] as $res){		  
			
			$nomConcepto = $res['concepto'];
			
			if($res['conceptoSubId'])
				$nomConcepto .= ' > '.$res['subConcepto'];
			
			if($res['conceptoSub2Id'])
				$nomConcepto .= ' > '.$res['subConcepto2'];
			
			$periodicidad = ($res['periodicidad'] == "") ? 'Unico' : $res['periodicidad'];
			
			$html .= '
		  <tr>
			<td align="center">'.$res['idReg'].'</td>
			<td align="left">'.$res['cliente'].'</td>
			<td align="left">'.$nomConcepto.'</td>
			<td align="center">'.date('d-m-Y',strtotime($res['fecha'])).'</td>
			<td align="center">$'.number_format($res['monto'],2).'</td>
			<td align="center">'.$periodicidad.'</td>
			<td align="center">'.$res['status'].'</td>			
		  </tr>';
		  
		  }//foreach
		  
		  $html .= '
		  </table>		  
	';
	
	$dompdf = new DOMPDF();
	$dompdf->set_paper('letter');
	$dompdf->load_html($html);
	$dompdf->render();
		
	$dompdf->stream('reporte_donativos.pdf');

	exit;
	
?>