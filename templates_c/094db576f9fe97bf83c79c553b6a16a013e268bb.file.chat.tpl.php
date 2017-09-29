<?php /* Smarty version Smarty3-b7, created on 2016-05-24 16:04:37
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164615744c1e5bdb6c9-00935460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094db576f9fe97bf83c79c553b6a16a013e268bb' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/chat.tpl',
      1 => 1464123875,
    ),
  ),
  'nocache_hash' => '164615744c1e5bdb6c9-00935460',
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
            <div class="caption"><i class="icon-cogs"></i>Mensajes</div>
            <div class="actions">            
            	<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-chat" class="btn green" >
                	<i class="icon-plus"></i> Nuevo Mensaje
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