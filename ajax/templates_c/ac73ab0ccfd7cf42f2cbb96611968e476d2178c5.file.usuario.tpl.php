<?php /* Smarty version Smarty3-b7, created on 2016-04-17 19:27:53
         compiled from "C:/wamp/www/customerswm/templates/boxes/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72357142a0978d7a8-37210823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac73ab0ccfd7cf42f2cbb96611968e476d2178c5' => 
    array (
      0 => 'C:/wamp/www/customerswm/templates/boxes/usuario.tpl',
      1 => 1428618902,
    ),
  ),
  'nocache_hash' => '72357142a0978d7a8-37210823',
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