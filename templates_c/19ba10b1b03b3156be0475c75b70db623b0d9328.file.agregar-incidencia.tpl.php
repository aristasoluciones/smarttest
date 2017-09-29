<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:05
         compiled from "C:/wamp/www/ceva/templates/agregar-incidencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29906556a3bcdeb2be1-39472359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ba10b1b03b3156be0475c75b70db623b0d9328' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/agregar-incidencia.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '29906556a3bcdeb2be1-39472359',
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
               Agregar incidencia 
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i></div>
            <div class="actions">            
            	
               
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>