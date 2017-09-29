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
	
	$pagadas = $_POST['pagadas'];
	
	$totales = array();
	
	$cliente->setId($_POST['clienteId2']);
	$resClientes = $cliente->EnumerateAll();
		
	$clientes = array();
	foreach($resClientes as $res){
		
		$clienteId = $res['clienteId'];
							
		$cuentaCobrar->setClienteId($clienteId);
		$cuentaCobrar->setFechaIni($fechaIni);
		$cuentaCobrar->setFechaFin($fechaFin);
		$cuentaCobrar->setPagadas($pagadas);
		$result = $cuentaCobrar->EnumByCliente();
		$resTotal = $cuentaCobrar->GetTotalesByCliente();
							
		if(count($result) > 0){
			$resCuentasCobrar = $result;
		}else{
			$resCuentasCobrar = array();
			continue;
		}
			
		$res['total'] = $resTotal['total'];
		$res['abonos'] = $resTotal['abonos'];
		$res['saldo'] = $resTotal['saldo'];
		$res['cuentasCobrar'] = $resCuentasCobrar;
		
		$totales['total'] += $res['total'];
		$totales['abonos'] += $res['abonos'];
		$totales['saldo'] += $res['saldo'];
		
		$clientes[] = $res;
		
	}//foreach
			
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
			<td width="" align="center" bgcolor="#CCCCCC">CLIENTE</td>
			<td width="20%" align="center" bgcolor="#CCCCCC">TOTAL</td>
			<td width="20%" align="center" bgcolor="#CCCCCC">ABONOS</td>
			<td width="20%" align="center" bgcolor="#CCCCCC">SALDO</td>			
		  </tr>';
		
		foreach($clientes as $res){		  
						
			$html .= '
		  	<tr>
				<td align="left">'.$res['nombre'].'</td>
				<td align="center">$'.number_format($res['total'],2).'</td>
				<td align="center">$'.number_format($res['abonos'],2).'</td>
				<td align="center">$'.number_format($res['saldo'],2).'</td>
		  	</tr>
			<tr>
				<td colspan="4">
				
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td width="5%" align="center" bgcolor="#CCCCCC">FOLIO</td>
						<td width="" align="center" bgcolor="#CCCCCC">CONCEPTO</td>
						<td width="10%" align="center" bgcolor="#CCCCCC">FECHA</td>
						<td width="10%" align="center" bgcolor="#CCCCCC">FECHA COBRO</td>
						<td width="10%" align="center" bgcolor="#CCCCCC">TOTAL</td>
						<td width="10%" align="center" bgcolor="#CCCCCC">ABONOS</td>
						<td width="10%" align="center" bgcolor="#CCCCCC">SALDO</td>
					  </tr>';
				
					//Pagos
					foreach($res['cuentasCobrar'] as $res2){
						
						$nomConcepto = $res2['concepto'];
						
						if($res2['conceptoSubId'])
							$nomConcepto .= ' > '.$res2['subConcepto'];
                		if($res2['conceptoSub2Id'])
							$nomConcepto .= ' > '.$res2['subConcepto2'];
						
						$fechaCobro = '';
						if($res2['fechaCobro'])
							$fechaCobro = date('d-m-Y',strtotime($res2['fechaCobro']));
						
						$html .= '
						<tr>
							<td align="center">'.$res2['cuentaCobrarId'].'</td>
							<td align="left">'.$nomConcepto.'</td>
							<td align="center">'.date('d-m-Y',strtotime($res2['fecha'])).'</td>
							<td align="center">'.$fechaCobro.'</td>
							<td align="center">'.number_format($res2['total'],2).'</td>
							<td align="center">'.number_format($res2['abonos'],2).'</td>
							<td align="center">'.number_format($res2['saldo'],2).'</td>
						</tr>';
					
					}//foreach
					
			$html .= '
					</table>
				</td>
			</tr>';
			
		  
		  }//foreach
		  
		  $html .= '
			   <tr>
				<td align="center"><b>TOTAL</b></td>
				<td align="center"><b>$'.number_format($totales['total'],2).'</b></td>
				<td align="center"><b>$'.number_format($totales['abonos'],2).'</b></td>
				<td align="center"><b>$'.number_format($totales['saldo'],2).'</b></td>
			  </tr>
		  </table>		  
	';
		
	$dompdf = new DOMPDF();
	$dompdf->set_paper('letter');
	$dompdf->load_html($html);
	$dompdf->render();
		
	$dompdf->stream('reporte_cuenta_clientes.pdf');

	exit;
	
?>