<?php /* Smarty version Smarty3-b7, created on 2017-02-28 18:22:03
         compiled from "C:/wamp/www/encuesta/templates/lists/pregunta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499758b6142b51a544-64670357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a8c256475e9af3f24943967bafc341e8b45d67' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/lists/pregunta.tpl',
      1 => 1488327719,
    ),
  ),
  'nocache_hash' => '1499758b6142b51a544-64670357',
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
            <th width="200"><div align="center">Clave</div></th>
            <th class="hidden-480" width="150"><div align="center">Pregunta</div></th>
            <th class="hidden-480" width="200"><div align="center">Tipo</div></th>
            <th class="hidden-480"><div align="center">Parametros</div></th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['preguntaId'];?>
</td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['pregunta'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['tiporespuesta'];?>
</div></td>
            <td>	
				<div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['parametros'];?>

					<?php if ($_smarty_tpl->getVariable('item')->value['tiporespuesta']=="punto"){?>
						<?php echo $_smarty_tpl->getVariable('item')->value['rango'];?>

					<?php }elseif($_smarty_tpl->getVariable('item')->value['tiporespuesta']=="opcional"){?>
						<?php echo $_smarty_tpl->getVariable('item')->value['opcional'];?>

					<?php }elseif($_smarty_tpl->getVariable('item')->value['tiporespuesta']=="abierta"){?>
						<?php echo $_smarty_tpl->getVariable('item')->value['numCaracter'];?>

					<?php }?>
			
			</div></td>
            <td><div align="center">
			<!--
            <a href="javascript:void(0)" onClick="ViewReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Ver Detalles">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
            </a>
			-->
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
