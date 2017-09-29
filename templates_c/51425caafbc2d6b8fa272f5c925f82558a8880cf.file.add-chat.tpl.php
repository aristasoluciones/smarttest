<?php /* Smarty version Smarty3-b7, created on 2016-08-13 09:59:44
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/add-chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1246757af35e0eae627-57382514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51425caafbc2d6b8fa272f5c925f82558a8880cf' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/add-chat.tpl',
      1 => 1471100272,
    ),
  ),
  'nocache_hash' => '1246757af35e0eae627-57382514',
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
            <div class="caption"><i class="icon-cogs"></i></div>
            <div class="actions">            
            	<!--<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/cat-documento" class="btn green" > 
                	<i class="icon-plus"></i> Nueva Solicitud
                </a>-->
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>