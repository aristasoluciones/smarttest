<?php /* Smarty version Smarty3-b7, created on 2016-08-08 21:25:57
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/documento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2474457a93f35ef0058-80010355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd62e4b82f8932f7599163a3a0618c2a6acfcbe38' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/documento.tpl',
      1 => 1470709552,
    ),
  ),
  'nocache_hash' => '2474457a93f35ef0058-80010355',
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
                <!--Dependencia-->
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    <div class="portlet box purple">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Documentos</div>
            <div class="actions">    
				<a href="javascript:void(0)" onClick="exportarExcel()" class="btn yellow" > 
                	<i class="icon-plus"></i> Exportar Excel
                </a>
				<?php if ($_smarty_tpl->getVariable('Usr')->value['tipo']=="super"){?>
				<a href="javascript:void(0)" onClick="exportarSql()" class="btn blue" > 
                	<i class="icon-plus"></i> Exportar Sql
                </a>
				<?php }?>
            	<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-documento" class="btn green" > 
                	<i class="icon-plus"></i> Agregar
                </a>
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
			<form id="frmGral" name="frmGral" method="POST" action="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/ajax/exportar.php">
				<input type="hidden" name="type" value="documentos">
			</form>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>