<?php
	
	$_GET['page'] = 'export-pdf';
	
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');
	
	session_start();
	
	if($_POST['fechaIni'])
		$fechaIni = date('Y-m-d',strtotime($_POST['fechaIni']));
	if($_POST['fechaFin'])
		$fechaFin = date('Y-m-d',strtotime($_POST['fechaFin']));
	if($_POST['fechaIniC'])
		$fechaIniC = date('Y-m-d',strtotime($_POST['fechaIniC']));
	if($_POST['fechaFinC'])
		$fechaFinC = date('Y-m-d',strtotime($_POST['fechaFinC']));
	
	$cuentaCobrar->setId($_POST['folio']);
	$cuentaCobrar->setClienteId($_POST['clienteId2']);
	$cuentaCobrar->setConceptoId($_POST['conceptoId2']);
	$cuentaCobrar->setConceptoSubId($_POST['conceptoSubId2']);
	$cuentaCobrar->setConceptoSub2Id($_POST['conceptoSub2Id2']);
	$cuentaCobrar->setStatusCuenta($_POST['statusCuenta']);
	$cuentaCobrar->setStatus($_POST['status2']);
	$cuentaCobrar->setTipo($_POST['tipo2']);
	$cuentaCobrar->setFechaIni($fechaIni);
	$cuentaCobrar->setFechaFin($fechaFin);
	$cuentaCobrar->setFechaIniC($fechaIniC);
	$cuentaCobrar->setFechaFinC($fechaFinC);
	$cuentaCobrar->setNoSocio($_POST['noSocio']);
	
	$cuentaCobrar->setPage($_POST['p']);
	$registros = $cuentaCobrar->Search();	
	$totales = $registros['totales'];
	
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

<h2 align="center">ESTADO DE CUENTA CLIENTES</h2>
<br><br>
';


$html .= '
		  <table width="550" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="5%" align="center" bgcolor="#CCCCCC">FOLIO</td>
			<td width="10%" align="center" bgcolor="#CCCCCC">DONATIVO</td>
			<td width="" align="center" bgcolor="#CCCCCC">CLIENTE</td>
			<td width="10%" align="center" bgcolor="#CCCCCC">CONCEPTO</td>
			<td width="10%" align="center" bgcolor="#CCCCCC">FECHA GEN.</td>
			<td width="10%" align="center" bgcolor="#CCCCCC">FECHA COBRO</td>
			<td width="15%" align="center" bgcolor="#CCCCCC">TOTALES</td>
			<td width="8%" align="center" bgcolor="#CCCCCC">STATUS</td>
		  </tr>';
		
		foreach($registros['result'] as $res){		  
			
			$nomConcepto = $res['concepto'];
			
			if($res['conceptoSubId'])
				$nomConcepto .= ' > '.$res['subConcepto'];
			if($res['conceptoSub2Id'])
				$nomConcepto .= ' > '.$res['subConcepto2'];
			
			$fechaCobro = '';
			if($res['fechaCobro'])
				$fechaCobro = date('d-m-Y',strtotime($res['fechaCobro']));
			
			$html .= '
		  	<tr>
				<td align="center">'.$res['idReg'].'</td>
				<td align="center">'.$res['donativoId'].'</td>
				<td align="left">'.$res['cliente'].'</td>
				<td align="left">'.$nomConcepto.'</td>
				<td align="center">'.date('d-m-Y',strtotime($res['fechaDonativo'])).'</td>
				<td align="center">'.$fechaCobro.'</td>
				<td align="left">
					Total: $'.number_format($res['total'],2).'
					<br>
					Abonos: $'.number_format($res['abonos'],2).'
					<br>
					Saldos: $'.number_format($res['saldo'],2).'
				</td>
				<td align="center">'.$res['status'].'</td>
		  	</tr>';
					  
		  }//foreach
		  
		  $html .= '
		  <tr>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"><br><b>TOTALES</b></td>
			<td align="left"><br>
			<b>
				Total: $'.number_format($totales['total'],2).'
					<br>
					Abonos: $'.number_format($totales['abonos'],2).'
					<br>
					Saldos: $'.number_format($totales['saldo'],2).'
			</b>
			</td>
			<td align="center"></td>
		  </tr>		  
		  </table>		  
	';
		
	$dompdf = new DOMPDF();
	$dompdf->set_paper('letter');
	$dompdf->load_html($html);
	$dompdf->render();
		
	$dompdf->stream('reporte_cuenta_cobrar.pdf');

	exit;
	
?>