<?php

	include_once('init.php');
	include_once('config.php');
	include_once(DOC_ROOT.'/libraries.php');
			
	if (!isset($_SESSION))
	  session_start();

	$pages = array(	
		'login',
		'logout',	
		'ficha',		
		'homepage',
		'proveedor',
		'cliente',
		'index',
		'usuario',
		
		//MODULO ENCUESTA //
		'encuesta',
		'respuesta',
		'pregunta',
		'do_encuesta',
		'encuesta-analisis'

	);
	
	// echo "<pre>"; print_r($_SESSION['Usr']);
	// echo "<pre>"; print_r($_POST);
	// echo 
	// exit;
	// if($_SESSION['Usr']['tipo']== 'captura'){
		// $page = "add-list";
	// }
	
	$page = $_GET['page'];
	$section = $_GET['section'];

	if(!in_array($page, $pages))
		$page = 'homepage';
	
	
		
	include_once(DOC_ROOT.'/modules/user.php');
	include_once(DOC_ROOT.'/modules/'.$page.'.php');
	
	$smarty->assign('page', $page);
	$smarty->assign('section', $section);
		
	$pageTpl = ($section == '') ? $page : $page.'_'.$section;
	
	$smarty->assign('pageTpl', $pageTpl);
	$smarty->assign('lang', $lang);
	
	$usr = $_SESSION['Usr'];

	$smarty->assign('usr',$usr);
	
	// $miColor = $documento->extraeStilo();
	
	$smarty->assign('miColor',$miColor);

	if($page == 'login'){
		$smarty->display(DOC_ROOT.'/templates/login.tpl');
	
	}else if($page == 'graficas'){
		$_SESSION['Usr']['page'] = $page;
		$smarty->display(DOC_ROOT.'/templates/graficas.tpl');
	}
	else if($page == 'graficas-b'){
		$_SESSION['Usr']['page'] = $page;
		$smarty->display(DOC_ROOT.'/templates/graficas-b.tpl');
	}
	else if($page == 'a1'){
		$_SESSION['Usr']['page'] = $page;
		$smarty->display(DOC_ROOT.'/templates/a1.tpl');
	}
	else{
	
		$_SESSION['Usr']['page'] = $page;
		$smarty->display(DOC_ROOT.'/templates/index.tpl');
	}
?>