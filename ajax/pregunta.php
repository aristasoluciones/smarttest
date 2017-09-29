<?php

	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'pregunta';
	
	$smarty->assign('titleFrm','Pregunta');
	$smarty->assign('page',$page);
	
	switch($_POST['type']){
	
		case 'add':
								
				echo 'ok[#]';

				$info = $usuario->Info();
				
				$smarty->assign('info',$info);	
				$smarty->assign('lstd',$lstd);	
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');
																
			break;
			
		
		
		
		case 'edit':
		
		
				
				$encuesta->setId($_POST['id']);
				$info = $encuesta->InfoPregunta();

				$r = explode("_",$info["rango"]);
				$de = $r[0];
				$a = $r[1];
				
				$r = explode("_",$info["opcional"]);
				$o1 = $r[0];
				$o2 = $r[1];
				$o3 = $r[2];
				$o4 = $r[3];
				$o5 = $r[4];
			
							
				echo 'ok[#]';
				
			
				$smarty->assign('o1',$o1);				
				$smarty->assign('o2',$o2);				
				$smarty->assign('o3',$o3);				
				$smarty->assign('o4',$o4);				
				$smarty->assign('o5',$o5);				
				$smarty->assign('de',$de);				
				$smarty->assign('a',$a);	
				
				$smarty->assign('info',$info);				
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');
																
			break;
			
		
		
			
		case 'save':

		
			
				if($_POST["tipo"]=="punto"){
					if($_POST["de"]=="" or $_POST["a"]==""){
						echo "fail[#]";
						echo "<font>Campo requerido: Rango</font>";
						exit;
					}
				}
				else if($_POST["tipo"]=="opcional"){
			
					for($i=1;$i<=5;$i++){
						if($_POST["res_".$i]==""){
							$va  = $va + 1;
						}
					}
					
					if($va > 3 ){
						echo "fail[#]";
						echo "<font>Se necesitan por lo menos dos parametros</font>";
						exit;
					}
				}
				
			
			
				$idReg = $_POST['id'];
				
				$rango = $_POST["de"]."_".$_POST["a"];
				$opcional = $_POST["res_1"]."_".$_POST["res_2"]."_".$_POST["res_3"]."_".$_POST["res_4"]."_".$_POST["res_5"];
								

				$encuesta->setEncuestaId($_POST["encuestaId"]);
				$encuesta->setPregunta($_POST['pregunta']);
				$encuesta->setTipoEncuesta($_POST['tipo']);
				$encuesta->setRango($rango);
				$encuesta->setOpcional($opcional);
				$encuesta->setNumCaracter($_POST['caracter']);
				$encuesta->setId($idReg);

			
				
				if($idReg)
					$success = $encuesta->UpdatePregunta();
				else
					$success = $encuesta->SavePregunta();
				
				
				
				
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
				
				if($encuesta->DeletePregunta()){					
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
				
				$encuesta->setId($_POST["encuestaId"]);
				$registros = $encuesta->EnumeratePreguntas();
				
				$util->PrintErrors2();
				
				echo 'ok[#]';			
				
					$smarty->assign('registros',$registros);
					$smarty->display(DOC_ROOT.'/templates/lists/'.$page.'.tpl');
			
				
				
				
			break;
		
	}//switch

?>