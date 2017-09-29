<?php

	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'usuario';
	
	$smarty->assign('titleFrm','Usuario');
	$smarty->assign('page',$page);
	
	switch($_POST['type']){
	
		case 'add':
								
				echo 'ok[#]';
				// $lstd = $dependencia->DependenciaAll();
				
				// echo "<pre>"; print_r($lstd);
				// exit;
				$info = $usuario->Info();
				
				$smarty->assign('info',$info);	
				$smarty->assign('lstd',$lstd);	
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');
																
			break;
			
		
		case 'addCiudadano':
								
				echo 'ok[#]';
				$lstd = $dependencia->DependenciaAll();
				
				// echo "<pre>"; print_r($lstd);
				// exit;
				$info = $usuario->Info();
				
				$smarty->assign('info',$info);	
				$smarty->assign('lstd',$lstd);	
				$smarty->display(DOC_ROOT.'/templates/boxes/ciudadano.tpl');
																
			break;
		
		case 'edit':
				
				$usuario->setId($_POST['id']);
				$info = $usuario->Info();
				//$info = $util->EncodeRow($info);
				
				// $listEstablo = $usuario->ListarEstablo();
				$lstd = $dependencia->DependenciaAll();
							
				echo 'ok[#]';
				
				$smarty->assign('lstd',$lstd);				
				$smarty->assign('listEstablo',$listEstablo);				
				$smarty->assign('info',$info);				
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');
																
			break;
			
		
		case 'editCiudadano':
			
			// exit;
				
				$usuario->setId($_POST['id']);
				$info = $usuario->Info();
				//$info = $util->EncodeRow($info);
				
				// $listEstablo = $usuario->ListarEstablo();
				$lstd = $dependencia->DependenciaAll();
							
				echo 'ok[#]';
				
				$smarty->assign('lstd',$lstd);				
				$smarty->assign('listEstablo',$listEstablo);				
				$smarty->assign('info',$info);				
				$smarty->display(DOC_ROOT.'/templates/boxes/ciudadano.tpl');
																
			break;
			
		case 'save':

		
		// echo "<pre>"; print_r($_POST);
		// exit;
				$idReg = $_POST['id'];
								
				$usuario->setId($idReg);
				$usuario->setNombre($_POST['nombre']);
				$usuario->setTelefono($_POST['telefono']);
				$usuario->setEmail($_POST['email'],true);
				$usuario->setUsuario($_POST['usuario']);
				$usuario->setPasswd($_POST['passwd']);
				$usuario->setTipo($_POST['tipo']);
				$usuario->setActivo($_POST['activo']);
				$usuario->setDependenciaId($_POST['direccionId']);
				$usuario->setApaterno($_POST['apaterno']);
				$usuario->setAmaterno($_POST['amaterno']);
				$usuario->setCalle($_POST['calle']);
				$usuario->setNoExterior($_POST['Nexterior']);
				$usuario->setColonia($_POST['colonia']);
				$usuario->setCiudad($_POST['ciudad']);
				$usuario->setEstado($_POST['estado']);
				$usuario->setPais($_POST['pais']);
				// $usuario->ValidarEstablo($_POST['establos']);
				
				if($idReg)
					$success = $usuario->Update();
				else
					$success = $usuario->Save();
				
				
				
				
				if($success){
					if($_POST['tipo'] == "operacion"){
						# se agragan los establos para el usuario
						$usuario->EliminarUsuarioEstablo();
						$establos = $_POST['establos'];	
						if(!is_array($establos)){ $establos = array(); }
						foreach($establos as $establoId){
						
							$usuario->setEstabloId($establoId);
							$usuario->SaveEstablo();
						}
						#fin
					}
					
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