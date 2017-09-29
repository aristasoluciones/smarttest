<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:38
         compiled from "C:/wamp/www/ceva/templates/estadistica-caso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:834556a3beea260d1-73578980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ae7858709e423cb267068f0745df302b5667944' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/estadistica-caso.tpl',
      1 => 1428618904,
    ),
  ),
  'nocache_hash' => '834556a3beea260d1-73578980',
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
               Reporte Estadistica de Casos
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
	
	
	<div class="portlet-body" id="tblfiltro">
			
			<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/filtro-estadistica-caso.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


		</div>

    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Informacion del Reporte</div>
            <div class="actions">            
					<a href="javascript:void(0)" class="btn blue" onClick="Tratamiento_pdf()" title="Exportar Tabla a PDF">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/blue-document-pdf-text.png" border="0"> Exportar
            </a>
            </div>
        </div>
		
		
		
        <div class="portlet-body" id="tblContent">
		<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>