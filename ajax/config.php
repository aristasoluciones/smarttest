<?php
// echo "<pre>"; print_r($_POST);
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'homepage';
	
	$smarty->assign('titleFrm','Homepage');
	$smarty->assign('page',$page);
	
	switch($_POST['type']){
	
		
			
		case "CambiarTema":
		
		
	
			$documento->setId($_POST["id"]);
			if($documento->cambiarTema()){
				echo "ok[#]";
			}else{
				echo "fail[#]";
			}
			
		
		break;
		
	case "changeLogo":
	
		// echo "<pre>"; print_r($_FILES);
		if($documento->changeLogo()){
				echo "ok[#]";
			}else{
				echo "fail[#]";
			}
	
	break;
		
	}//switch

?>