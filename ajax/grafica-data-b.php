<?php

	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	if($_GET["q"]==1){
		header("Content-type: text/x-json");
		
		$lstdoc = $documento->totalxDireccion();
		$totdoc = $documento->totalDocDe();

		
		foreach($lstdoc["dependencia"] as $key=>$aux){
			$datasem1[] = $aux["nombre"];
			@$datasem2[] = ($aux["count"]/$totdoc)*100;
		}
		
		$datasem["documento"] = $datasem1;
		$datasem["total"] = $datasem2;

		print json_encode($datasem);
		
	}
	
	if($_GET["q"]==2){
		header("Content-type: text/x-json");
		
		$lstdoc = $documento->totalxDireccion();
		$totdoc = $documento->totalDocDe();

		
		foreach($lstdoc["tipodocumento"] as $key=>$aux){
			$datasem1[] = $aux["documento"];
			@$datasem2[] = ($aux["count"]/$totdoc)*100;
		}
		
		$datasem["documento"] = $datasem1;
		$datasem["total"] = $datasem2;

		print json_encode($datasem);
		
	}
	
	if($_GET["q"]==3){
		header("Content-type: text/x-json");
		
		$lstdoc = $documento->totalxDireccion();
		$totdoc = $documento->totalDocDe();

		
		foreach($lstdoc["buscarPor"] as $key=>$aux){
			$datasem1[] = $aux["nombre"];
			@$datasem2[] = ($aux["count"]/$totdoc)*100;
		}
		
		$datasem["documento"] = $datasem1;
		$datasem["total"] = $datasem2;

		print json_encode($datasem);
		
	}
?>