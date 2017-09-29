<?php

include_once(DOC_ROOT.'/properties/errors.es.php');

require(DOC_ROOT.'/libs/Smarty.class.php');
require(DOC_ROOT.'/libs/nusoap.php');
include_once(DOC_ROOT."/libs/qr/qrlib.php");

include_once(DOC_ROOT.'/classes/db.class.php');
$db = new DB;

include_once(DOC_ROOT.'/classes/error.class.php');
$error = new Error;

include_once(DOC_ROOT.'/classes/util.class.php');
$util = new Util;

include_once(DOC_ROOT.'/classes/main.class.php');
$main = new Main;

include_once(DOC_ROOT.'/classes/user.class.php');
$user = new User;

include_once(DOC_ROOT.'/classes/usuario.class.php');
$usuario = new Usuario;

include_once(DOC_ROOT.'/classes/encuesta.class.php');
$encuesta = new Encuesta;


#reportes
// include_once(DOC_ROOT.'/classes/documento.class.php');
// $documento = new Documento;

// include_once(DOC_ROOT.'/classes/secretaria.class.php');
// $secretaria = new Secretaria;




include_once(DOC_ROOT.'/classes/cliente.class.php');
$cliente = new Cliente;


include_once(DOC_ROOT.'/classes/class.phpmailer.php');
include_once(DOC_ROOT.'/classes/class.smtp.php');
include_once(DOC_ROOT.'/classes/sendmail.class.php');

include_once(DOC_ROOT.'/libs/pdf/dompdf_config.inc.php');


//include_once(DOC_ROOT.'/libs/pdf/fpdf.php');
include_once(DOC_ROOT.'/libs/pdf/fpdf.php');

 /* pChart library inclusions */ 
 // include_once(DOC_ROOT."/libs/pChart/class/pData.class.php"); 
 // include_once(DOC_ROOT."/libs/pChart/class/pDraw.class.php"); 
 // include_once(DOC_ROOT."/libs/pChart/class/pPie.class.php"); 
 // include_once(DOC_ROOT."/libs/pChart/class/pImage.class.php"); 
 
include_once(DOC_ROOT.'/libs/jpgraph/src/jpgraph.php');
include_once(DOC_ROOT.'/libs/jpgraph/src/jpgraph_line.php');
include_once(DOC_ROOT.'/libs/jpgraph/src/jpgraph_pie.php');
include_once(DOC_ROOT.'/libs/jpgraph/src/jpgraph_bar.php');


$smarty = new Smarty;

$smarty->assign('DOC_ROOT',DOC_ROOT);
$smarty->assign('WEB_ROOT',WEB_ROOT);

$smarty->assign('property', $property);


?>