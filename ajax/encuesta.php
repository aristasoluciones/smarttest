<?php

	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'encuesta';
	
	$smarty->assign('titleFrm','Encuesta');
	$smarty->assign('page',$page);
	
	switch($_POST['type']){
	
		case 'add':
								
				echo 'ok[#]';
				// $lstd = $dependencia->DependenciaAll();
				
				// echo "<pre>"; print_r($_POST);
				// exit;
				$info = $usuario->Info();
				
				$smarty->assign('info',$info);	
				$smarty->assign('lstd',$lstd);	
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');
																
			break;
			
		
		
		
		case 'edit':
				
				$encuesta->setId($_POST['id']);
				$info = $encuesta->Info();
				//$info = $util->EncodeRow($info);
				
				// $listEstablo = $usuario->ListarEstablo();
				// $lstd = $dependencia->DependenciaAll();
							
				echo 'ok[#]';
				
							
				$smarty->assign('info',$info);				
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');
																
			break;
			
		
		
			
		case 'save':

		

				$idReg = $_POST['id'];
								
				$encuesta->setId($idReg);
				$encuesta->setNombre($_POST['nombre']);
				$encuesta->setInicio($_POST['inicio']);
				$encuesta->setFin($_POST['fin']);

			
				
				if($idReg)
					$success = $encuesta->Update();
				else
					$success = $encuesta->Save();
				
				
				
				
				if($success){
					
					echo 'ok[#]';									
				}else{
					echo "fail[#]";					
					$util->ShowErrors();					
				}
				
			break;
								
		case 'delete':
				
				// echo "<pre>"; print_r($_POST);
				// exit;
				$encuesta->setId($_POST['id']);
				
				if($encuesta->Delete()){					
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
				
				$data = $encuesta->Enumerate();
				
				echo "ok[#]";
				$util->PrintErrors2();
				
				
				$smarty->assign('data',$data);
				$smarty->display(DOC_ROOT.'/templates/lists/'.$page.'.tpl');
				
				
				
				
				
			break;
		
	}//switch

?>