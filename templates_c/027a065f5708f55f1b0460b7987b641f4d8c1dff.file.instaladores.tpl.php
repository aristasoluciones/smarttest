<?php /* Smarty version Smarty3-b7, created on 2016-08-03 21:52:38
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/instaladores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1386757a2adf66f5f20-44686261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '027a065f5708f55f1b0460b7987b641f4d8c1dff' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/instaladores.tpl',
      1 => 1470279154,
    ),
  ),
  'nocache_hash' => '1386757a2adf66f5f20-44686261',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                FileZilla
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
 
	
	<div class="portlet box purple">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i></div>
            <div class="actions">            
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <p>Para adjuntar archivos que rebasen el limite permitido por el sistema es necesario instalar FileZilla;  un cliente FTP multiplataforma de código abierto y software libre</p>
                      		<p>
                            <h3>Instrucciones</h3>
                            1. Descargar el archivo en algún  que le sea fácil de recordar.<br />
                            2. Ejecutar el Instalador y seguir las instrucciones en pantalla.<br />
                            3. Una vez instalados estos componentes, ya es posible subir archivos via FTP.<br />
                        </p>
                        <p><a href="download.php?uid=3"><img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/filezilla.png" width="8%" border="0" /></a>FileZilla</p>
                        
        </div>
    </div>
</div>