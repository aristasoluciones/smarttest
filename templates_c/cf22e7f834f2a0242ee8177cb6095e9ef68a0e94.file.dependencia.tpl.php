<?php /* Smarty version Smarty3-b7, created on 2016-04-18 20:02:23
         compiled from "C:/wamp/www/acervo/templates/dependencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284685715839fb8e477-79660079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf22e7f834f2a0242ee8177cb6095e9ef68a0e94' => 
    array (
      0 => 'C:/wamp/www/acervo/templates/dependencia.tpl',
      1 => 1417753652,
    ),
  ),
  'nocache_hash' => '284685715839fb8e477-79660079',
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
            <div class="caption"><i class="icon-cogs"></i>Dependencia</div>
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