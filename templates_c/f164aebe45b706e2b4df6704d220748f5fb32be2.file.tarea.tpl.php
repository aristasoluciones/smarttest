<?php /* Smarty version Smarty3-b7, created on 2017-02-24 17:45:18
         compiled from "C:/wamp/www/aristax/templates/lists/tarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3114758b0c58e5c8745-58426164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f164aebe45b706e2b4df6704d220748f5fb32be2' => 
    array (
      0 => 'C:/wamp/www/aristax/templates/lists/tarea.tpl',
      1 => 1487979916,
    ),
  ),
  'nocache_hash' => '3114758b0c58e5c8745-58426164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<table class="table table-striped table-bordered table-hover" id="sample_32">
    <thead>
        <tr>
            <th width="200"><div align="center">Folio</div></th>
            <th class="hidden-480" width="150"><div align="center">Fecha de Registro</div></th>
            <th class="hidden-480" width="150"><div align="center">usuario agrego</div></th>
            <th class="hidden-480" width="150"><div align="center">Contrato</div></th>
            <th class="hidden-480" width="150"><div align="center">Descripcion</div></th>
            <th class="hidden-480" width="150"><div align="center">Estatus</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value['tarea']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>        	
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->getVariable('item')->value['tareaId'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['fechaRegistro'];?>
</td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['usuario'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['contrato'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['descripcion'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['estatus'];?>
</div></td>
            <td><div align="center">
            <a href="javascript:void(0)" onClick="EditTarea(<?php echo $_smarty_tpl->getVariable('item')->value['tareaId'];?>
)" title="Editar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.png" border="0">
            </a>
			<!--
            <a href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Eliminar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" border="0">
            </a>-->
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
