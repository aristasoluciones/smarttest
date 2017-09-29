<?php /* Smarty version Smarty3-b7, created on 2017-02-13 14:32:25
         compiled from "C:/wamp/www/le/templates/boxes/add-limite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:429458a217d9b37100-02756846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ed41cee330b54c19345bab07abf8b3d8a3a79d4' => 
    array (
      0 => 'C:/wamp/www/le/templates/boxes/add-limite.tpl',
      1 => 1487017125,
    ),
  ),
  'nocache_hash' => '429458a217d9b37100-02756846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1"> </h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/add-limite.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- END FORM -->
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" onclick="SaveLimite()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
    <?php }?>
</div>