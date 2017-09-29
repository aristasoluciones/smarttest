<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:32
         compiled from "C:/wamp/www/ceva/templates/tratamiento-animal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24247556a3be8d7c926-64756838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7beb419ab00ee786c524a1406f21fae45f878717' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/tratamiento-animal.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '24247556a3be8d7c926-64756838',
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
			<div class="row-fluid">
				<div class="span4">
					Tratamientos Diarios
				</div>
				<div class="span4">
					 Establo: <?php echo $_smarty_tpl->getVariable('info')->value['nombreEstablo'];?>

				</div>
				<div class="span4">
					Fecha Actual: <?php echo $_smarty_tpl->getVariable('info')->value['fecha'];?>

				</div>
			</div>
			<hr class="clearfix" />
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
	
	<div class="portlet-body" id="tblfiltro">
		<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/filtro-tratamiento-animal.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


	</div>
        
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Listado</div>
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