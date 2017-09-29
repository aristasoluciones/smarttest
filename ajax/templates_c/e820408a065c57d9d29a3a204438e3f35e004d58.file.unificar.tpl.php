<?php /* Smarty version Smarty3-b7, created on 2016-05-26 18:06:55
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/boxes/unificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15155747818fa91501-93012594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e820408a065c57d9d29a3a204438e3f35e004d58' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/boxes/unificar.tpl',
      1 => 1464303908,
    ),
  ),
  'nocache_hash' => '15155747818fa91501-93012594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1"> Unificar Direcciones</h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/unificar.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- END FORM -->
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" onclick="SaveUnificar()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Guardar<?php }else{ ?>Guardar<?php }?></button>
    <?php }?>
</div>