<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:14:08
         compiled from "C:/wamp/www/ceva/templates/boxes/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27752556a36308f9397-45965536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b5a9dd1307270db0c35178ca227e918ac80aac2' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/boxes/usuario.tpl',
      1 => 1428618902,
    ),
  ),
  'nocache_hash' => '27752556a36308f9397-45965536',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1"><?php if ($_smarty_tpl->getVariable('info')->value['view']==1){?>Detalles<?php }elseif($_smarty_tpl->getVariable('info')->value['idReg']){?>Editar<?php }else{ ?>Agregar<?php }?> <?php echo $_smarty_tpl->getVariable('titleFrm')->value;?>
</h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- END FORM -->
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" onclick="SaveReg()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
    <?php }?>
</div>