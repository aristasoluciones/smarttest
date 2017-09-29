<?php /* Smarty version Smarty3-b7, created on 2016-08-14 12:18:33
         compiled from "C:/wamp/www/lavanderia/templates/lists/asignar-campo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1089157b0a7e9f169d0-02914758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28df23614837152f2d369d4d1e2b8de73b382cce' => 
    array (
      0 => 'C:/wamp/www/lavanderia/templates/lists/asignar-campo.tpl',
      1 => 1470265772,
    ),
  ),
  'nocache_hash' => '1089157b0a7e9f169d0-02914758',
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
           
 
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstCampo')->value['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>        	
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->getVariable('item')->value['documento'];?>
</td>
			 <td><div align="center">
		
            <a href="javascript:void(0)" onClick="ViewCampos(<?php echo $_smarty_tpl->getVariable('item')->value['tipodocumentoId'];?>
)" title="Agregar Campos">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/plus-circle-frame.png" border="0">
            </a>
			 <a href="javascript:void(0)" onClick="ViewCamposAsig(<?php echo $_smarty_tpl->getVariable('item')->value['tipodocumentoId'];?>
)" title="Ver Detalles">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
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
