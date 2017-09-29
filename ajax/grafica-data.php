<?php

	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	
	$lstdoc = $documento->totalxDoc();
	$totdoc = $documento->totalDocDe();
	
	header("Content-type: text/x-json");
	
	foreach($lstdoc as $key=>$aux){
		$datasem1[] = $aux["documento"];
		@$datasem2[] = ($aux["total"]/$totdoc)*100;
	}
	
	$datasem["documento"] = $datasem1;
	$datasem["total"] = $datasem2;

	print json_encode($datasem);
	
	
?>