<?php
	
	$_GET['page'] = 'export-excel';
	
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	switch($_POST['type']){
	
		case 'excel':
				
				$mes = $_POST['mes'];
				$anio = $_POST['anio'];
				$cuentaBancoId = $_POST['cuentaBancoId2'];
				
				$cuentaBanco->setId($cuentaBancoId);
				$nomCuentaBanco = $cuentaBanco->GetName();
				
				if($cuentaBancoId > 0 && $mes > 0 && $anio > 0){
				
					$fechaIni = $anio.'-'.$mes.'-01';
					$fechaFin = $anio.'-'.$mes.'-31';
										
					//Cuentas por Cobrar
					
					$cuentaCobrar->setCuentaBancoId($cuentaBancoId);
					$cuentaCobrar->setFechaIni($fechaIni);
					$cuentaCobrar->setFechaFin($fechaFin);					
					$cuentasCobrar = $cuentaCobrar->SearchByCuenta();
															
					//Cuentas por Pagar
					
					$cuentaPagar->setCuentaBancoId($cuentaBancoId);
					$cuentaPagar->setFechaIni($fechaIni);
					$cuentaPagar->setFechaFin($fechaFin);
					
					$cuentasPagar = $cuentaPagar->SearchByCuenta();
										
					//Pagos Manuales
					
					$cuentaBanco->setId($cuentaBancoId);
					$cuentaBanco->setFechaIni($fechaIni);
					$cuentaBanco->setFechaFin($fechaFin);
					$cuentasManuales = $cuentaBanco->SearchPagosManuales();
										
					//Saldos Totales
					
					$totalCobrar = $cuentaCobrar->GetTotalPagosByFecha();
					$totalPagar = $cuentaPagar->GetTotalPagosByFecha();
					$totalManual = $cuentaBanco->GetTotalPagosByFecha();

					$saldoInicial = $totalCobrar - $totalPagar + $totalManual;
										
					if(count($cuentasCobrar) == 0)
						$cuentasCobrar = array();
					if(count($cuentasPagar) == 0)
						$cuentasPagar = array();
					if(count($cuentasManuales) == 0)
						$cuentasManuales = array();
					
					$cuentas = array_merge($cuentasCobrar, $cuentasPagar, $cuentasManuales);
					
					$registros = $util->orderMultiDimensionalArray($cuentas, 'fecha');
					
				}//if
				
				$mes = $util->GetMonthByKey(intval($mes));
				
				$x .= "<table border=\"1\">
				<thead> 
					<tr>
						<th style=\"background:#CCC;text-align:center\" colspan='7'>
							<b>".$nomCuentaBanco." ".$mes." ".$anio."</b>
						</th>
					</tr>
					<tr>
						<th style=\"background:#E0E5E7;text-align:center\"><b>FECHA</b></th>
						<th style=\"background:#E0E5E7;text-align:center\"><b>CLIENTE/PROVEEDOR</b></th>
						<th style=\"background:#E0E5E7;text-align:center\"><b>CONCEPTO</b></th>
						<th style=\"background:#E0E5E7;text-align:center\"><b>CARGO</b></th>
						<th style=\"background:#E0E5E7;text-align:center\"><b>ABONO</b></th>
						<th style=\"background:#E0E5E7;text-align:center\"><b>SALDO</b></th>
						<th style=\"background:#E0E5E7;text-align:center\"><b>METODO PAGO</b></th>
					</tr>
				</thead>
				<tbody>";
				
				$x .= "
					<tr>
						<td style=\"text-align:center;\"></td>
						<td style=\"text-align:left;\"></td>
						<td style=\"text-align:right;\"><b>SALDO INICIAL</b></td>
						<td style=\"text-align:right;\"></td>
						<td style=\"text-align:right;\"></td>
						<td style=\"text-align:right;\">$".number_format($saldoInicial,2)."</td>	
						<td style=\"text-align:right;\"></td>
					</tr>";
				
				$saldo = $saldoInicial;
				foreach($registros as $res){
				
					 $nomConcepto = $res['concepto'];
					 
					 if($res['conceptoSubId'])
					 	$nomConcepto .= '> '.$res['subConcepto'];
					if($res['conceptoSub2Id'])
						$nomConcepto .= '> '.$res['subConcepto2'];
						
					if($res['cargo'])
						$saldo -= $res['cargo'];
					if($res['abono'])
						$saldo += $res['abono'];
				
					$x .= "
					<tr>
						<td style=\"text-align:center;\">".$res['fecha']."</td>
						<td style=\"text-align:left;\">".$res['clteProv']."</td>
						<td style=\"text-align:right;\">".$nomConcepto."</td>
						<td style=\"text-align:right;\">$".number_format($res['cargo'],2)."</td>
						<td style=\"text-align:right;\">$".number_format($res['abono'],2)."</td>
						<td style=\"text-align:right;\">$".number_format($saldo,2)."</td>	
						<td style=\"text-align:center;\">".$res['metodoPago']."</td>
					</tr>";
				
				}//foreach
				
				$x .= "
					<tr>
						<td style=\"text-align:center;\"></td>
						<td style=\"text-align:left;\"></td>
						<td style=\"text-align:right;\"><b>SALDO FINAL</b></td>
						<td style=\"text-align:right;\"></td>
						<td style=\"text-align:right;\"></td>
						<td style=\"text-align:right;\">$".number_format($saldo,2)."</td>	
						<td style=\"text-align:right;\"></td>
					</tr>";
				
				$x .= "
				</tbody>
				</table>";
				
				$name = 'Reporte_Cuentas_Banco';
				header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
				header("Content-type:   application/x-msexcel; charset=utf-8");
				header("Content-Disposition: attachment; filename=".$name.".xls");
				header("Pragma: no-cache");
				header("Expires: 0");
				
				echo $x;
																
			break;
				
	}//switch
	
	exit;

?>