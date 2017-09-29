<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:13:47
         compiled from "C:/wamp/www/ceva/templates/lists/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2360554b5b33289b589-45101661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2cd4339b85be669a99a1c1e819891a5f102ea1' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/lists/usuario.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '2360554b5b33289b589-45101661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre</div></th>
            <th class="hidden-480" width="150"><div align="center">Telefono</div></th>
            <th class="hidden-480" width="200"><div align="center">Email</div></th>
            <th class="hidden-480"><div align="center">Usuario</div></th>
            <th class="hidden-480"><div align="center">Tipo</div></th>
            <th class="hidden-480" width="100"><div align="center">Status</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>        	
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['telefono'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['email'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['usuario'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['tipo'];?>
</div></td>
            <td><div align="center"><?php if ($_smarty_tpl->getVariable('item')->value['activo']){?>S&iacute;<?php }else{ ?>No<?php }?></div></td>
            <td><div align="center">
            <a href="javascript:void(0)" onClick="ViewReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Ver Detalles">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Editar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Eliminar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" border="0">
            </a>
            </div>
            </td>
        </tr>
        <?php }} else { ?>
        <tr class="odd gradeX">
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
