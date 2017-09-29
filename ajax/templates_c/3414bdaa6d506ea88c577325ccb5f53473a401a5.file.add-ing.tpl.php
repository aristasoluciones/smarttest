<?php /* Smarty version Smarty3-b7, created on 2017-01-13 13:18:56
         compiled from "C:/wamp/www/le/templates/lists/add-ing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223195879282096ec24-23902541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3414bdaa6d506ea88c577325ccb5f53473a401a5' => 
    array (
      0 => 'C:/wamp/www/le/templates/lists/add-ing.tpl',
      1 => 1484334386,
    ),
  ),
  'nocache_hash' => '223195879282096ec24-23902541',
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
            <th width="200"><div align="center">Consecutivo</div></th>
            <th width="200"><div align="center">Ingrediente</div></th>
            <th class="hidden-480" width="150"><div align="center">Cantidad</div></th>
            <th class="hidden-480" width="150"><div align="center">Unidad</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>        	
        <tr class="odd gradeX">
			<td>
				<?php echo $_smarty_tpl->getVariable('key')->value+1;?>

			</td>
            <td>
				<select name="ingredienteId_<?php echo $_smarty_tpl->getVariable('item2')->value['detalle_platilloId'];?>
" id="ingredienteId_<?php echo $_smarty_tpl->getVariable('item2')->value['detalle_platilloId'];?>
">
					<option></option>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ltsIngredientes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>  
					<option value="<?php echo $_smarty_tpl->getVariable('item')->value['ingredienteId'];?>
" <?php if ($_smarty_tpl->getVariable('item')->value['ingredienteId']==$_smarty_tpl->getVariable('item2')->value['ingredienteId']){?> selected <?php }?>><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
					<?php }} ?>
				</select>
			</td>
            <td>
				<input type="text" name="cantidad_<?php echo $_smarty_tpl->getVariable('item2')->value['detalle_platilloId'];?>
" id="cantidad_<?php echo $_smarty_tpl->getVariable('item2')->value['detalle_platilloId'];?>
" style="width:80px" value="<?php echo $_smarty_tpl->getVariable('item2')->value['cantidad'];?>
">
			</td>
            <td>
				<select name="unidadId_<?php echo $_smarty_tpl->getVariable('item2')->value['detalle_platilloId'];?>
" id="unidadId_<?php echo $_smarty_tpl->getVariable('item2')->value['detalle_platilloId'];?>
">
					<option></option>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ltsunidad')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>  
					<option value="<?php echo $_smarty_tpl->getVariable('item')->value['unidadId'];?>
" <?php if ($_smarty_tpl->getVariable('item')->value['unidadId']==$_smarty_tpl->getVariable('item2')->value['unidadId']){?> selected <?php }?>><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
					<?php }} ?>
				</select>
			</td>

            <td>
			<div align="center">
				
				<a href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item2')->value['detalle_platilloId'];?>
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
