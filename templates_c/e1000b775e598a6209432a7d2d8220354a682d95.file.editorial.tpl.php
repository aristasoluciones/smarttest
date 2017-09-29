<?php /* Smarty version Smarty3-b7, created on 2016-05-28 12:43:40
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257305749d8cc9363c4-14408301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1000b775e598a6209432a7d2d8220354a682d95' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/editorial.tpl',
      1 => 1464457273,
    ),
  ),
  'nocache_hash' => '257305749d8cc9363c4-14408301',
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
                Editorial
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