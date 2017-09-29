<?php /* Smarty version Smarty3-b7, created on 2016-04-18 00:14:13
         compiled from "C:/wamp/www/customerswm/templates/lists/lst-reportes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1789857146d25ebb8b5-05002179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68fd19f5e4fa1bac4d4ed9d6e45c36086e2c4319' => 
    array (
      0 => 'C:/wamp/www/customerswm/templates/lists/lst-reportes.tpl',
      1 => 1460956430,
    ),
  ),
  'nocache_hash' => '1789857146d25ebb8b5-05002179',
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
            <th class="" width="" rowspan="2"><div align="center">Fecha</div></th>
            <th class="" width="" rowspan="2"><div align="center">Observacion</div></th>
            <th class="" width="" rowspan="2"><div align="center">Acci&oacute;n</div></th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['numVaca'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['fechaIngreso'];?>
</td>
			</td>
            <td><div align="center">
			<?php if ($_smarty_tpl->getVariable('item')->value['statusDia']=='no'){?>
				<a href="javascript:void(0)" onClick="Actualizar(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Actulizar">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/arrow-circle-double-135.png" border="0">
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('item')->value['statusDia']=='si'){?>
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
			<?php }?>
          
            </div>
            </td>
        </tr>
        <?php }} else { ?>
        <tr class="odd gradeX">
        	<td colspan="14"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
