<?php
	
		// echo "<pre>"; print_r($_POST);
		// exit;
				
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'a1';
	
	$smarty->assign('titleFrm','Usuario');
	$smarty->assign('page',$page);
	
	switch($_POST['type']){
	
		
		
		
			
		case 'sendData':

		
			$idReg = $_POST['id'];
										
			if($idReg)
				$success = $encuesta->saveRespuestas();
			else
				$success = $encuesta->saveRespuestas();
			
			if($success){									
				echo 'ok[#]';

			}else{
				echo "fail[#]";					
				$util->ShowErrors();					
			}
				
		break;
								
		case 'delete':
				
				$usuario->setId($_POST['id']);
				
				if($usuario->Delete()){					
					echo 'ok[#]';				
				}
				
			break;
		
		case 'view':
				
				$usuario->setId($_POST['id']);
				$info = $usuario->Info();
				// $listEstablo = $usuario->ListarEstablo();
				
				$info['view'] = 1;
				
				echo 'ok[#]';
				
				// $smarty->assign('listEstablo',$listEstablo);
				$smarty->assign('info',$info);
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');
																
			break;
		
		case 'loadMunicipios':
				
				$municipios = $util->EnumMunicipios($_POST['estadoId']);
				$municipios = $util->EncodeResult($municipios);
				
				echo 'ok[#]';
				
				$smarty->assign('municipios',$municipios);
				$smarty->display(DOC_ROOT.'/templates/lists/enum-municipios.tpl');
				
			break;
		
		case 'loadPage':
				
				if($_POST["page"]=="ciudadano"){
					$usuario->tipoReporte("ciudadano");
				}else{
					$usuario->tipoReporte("admin");
				}
				
				// echo "<pre>"; print_r($_POST);
				// echo $page;
				// exit;
				$usuario->setPage($_POST['p']);								
				$registros = $usuario->Enumerate();
				$registros['result'] = $util->EncodeResult($registros['result']);	
				
				$util->PrintErrors2();
				
				echo 'ok[#]';			
				if($_POST["page"]=="ciudadano"){
					$smarty->assign('registrosC',$registros);
					$smarty->display(DOC_ROOT.'/templates/lists/ciudadano.tpl');
				}else{
					$smarty->assign('registros',$registros);
					$smarty->display(DOC_ROOT.'/templates/lists/'.$page.'.tpl');
				}
				
				
				
				
			break;
		
	}//switch

?>