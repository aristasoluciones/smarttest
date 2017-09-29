<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:13:48
         compiled from "C:/wamp/www/ceva/templates/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1524454f65840d29a61-50455723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a7eb5905248fb36344f74a5cc82c6009afe7836' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/usuario.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '1524454f65840d29a61-50455723',
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
                Usuarios
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Listado</div>
            <div class="actions">            
            	<a href="javascript:void(0)" class="btn blue" onclick="AddReg()">
                	<i class="icon-plus"></i> Agregar
                </a>
             
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>