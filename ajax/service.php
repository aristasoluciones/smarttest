<?php

	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
    $webfp = new nusoap_client("http://www.pki.firmaelectronica.chiapas.gob.mx/axis/services/wsrfirma?wsdl");
      
	$cadena = "ejemplo";
	$asunto = "asunto";
	$firmante = "FITP00000000000001";
	$sistema = 44;
	$pass = "licenciatap"; 
	  
	$error = $webfp->getError();
    
	if ($error) {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
      
    $result = $webfp->call("firmar", array($cadena,$asunto,$firmante,
	$sistema,$pass));
     
	if ($webfp->fault) {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else {
        $error = $webfp->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        }
        else {
            echo "s<pre>"; print_r($result);
            echo "</pre>";
        }
    }
	 
?>