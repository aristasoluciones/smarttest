<?php /* Smarty version Smarty3-b7, created on 2017-02-28 15:34:33
         compiled from "C:/wamp/www/encuesta/templates/lists/encuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:908858b5ece90bdb47-11490649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a94bcb6f0528925e6b8de693b24b1babe133f1b' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/lists/encuesta.tpl',
      1 => 1488317252,
    ),
  ),
  'nocache_hash' => '908858b5ece90bdb47-11490649',
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
            <th class="hidden-480" width="150"><div align="center">Nombre</div></th>
            <th class="hidden-480" width="200"><div align="center">Fecha Registro</div></th>
            <th class="hidden-480"><div align="center">Usuario Registro</div></th>
            <th class="hidden-480"><div align="center">Vigencia</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>        	
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->getVariable('item')->value['encuestaId'];?>
</td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['fechaRegistro'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['usuario'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['inicio'];?>
 - <?php echo $_smarty_tpl->getVariable('item')->value['fin'];?>
</div></td>
            <td><div align="center">
            <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/pregunta/x/<?php echo $_smarty_tpl->getVariable('item')->value['encuestaId'];?>
"  title="AGREGAR PREGUNTAS">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/calendar_edit.png" border="0">
            </a>
			
            <a  href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/encuesta-analisis/x/<?php echo $_smarty_tpl->getVariable('item')->value['encuestaId'];?>
" title="ANALISIS">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/chart-pie.png" border="0">
            </a>
			
            <a href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="EDITAR">
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
