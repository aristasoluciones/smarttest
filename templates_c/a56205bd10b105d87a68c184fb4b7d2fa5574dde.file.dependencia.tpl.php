<?php /* Smarty version Smarty3-b7, created on 2016-05-15 09:32:23
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/dependencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2257757388877b35dc5-32236386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a56205bd10b105d87a68c184fb4b7d2fa5574dde' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/dependencia.tpl',
      1 => 1463322734,
    ),
  ),
  'nocache_hash' => '2257757388877b35dc5-32236386',
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
            <div class="caption"><i class="icon-cogs"></i>Direcciones</div>
            <div class="actions">            
            	<a href="javascript:void(0)" class="btn green" onclick="AddReg()">
                	<i class="icon-plus"></i> Agregar
                </a>
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>