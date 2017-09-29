<?php /* Smarty version Smarty3-b7, created on 2017-02-25 21:24:33
         compiled from "C:/wamp/www/encuesta/templates/boxes/addTarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2320658b24a71b15ee9-17615446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90bacc94302311ab715f90d6dc0ae1d965d581cd' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/boxes/addTarea.tpl',
      1 => 1487980903,
    ),
  ),
  'nocache_hash' => '2320658b24a71b15ee9-17615446',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1"></h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/addTarea.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- END FORM -->
</div>
<div class="modal-footer">
	 <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" onclick="SaveTarea()"><?php if ($_smarty_tpl->getVariable('tipo')->value=="editar"){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
    <?php }?>
</div>