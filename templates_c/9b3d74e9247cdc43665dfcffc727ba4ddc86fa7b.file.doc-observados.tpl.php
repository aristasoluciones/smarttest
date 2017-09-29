<?php /* Smarty version Smarty3-b7, created on 2016-07-13 13:33:16
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/doc-observados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160965786896c920032-87629333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b3d74e9247cdc43665dfcffc727ba4ddc86fa7b' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/doc-observados.tpl',
      1 => 1468434791,
    ),
  ),
  'nocache_hash' => '160965786896c920032-87629333',
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
            <div class="caption"><i class="icon-cogs"></i>Documentos Observados</div>
            <div class="actions">            
            	<!--<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-documento" class="btn green" > 
                	<i class="icon-plus"></i> Agregar
                </a>-->
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>