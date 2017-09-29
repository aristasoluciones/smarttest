<?php /* Smarty version Smarty3-b7, created on 2016-08-08 21:08:46
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/lists/busqueda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:670857a93b2e7880a3-47269949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13d8b876faefd0168b760c0acfd3e6e2075114be' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/lists/busqueda.tpl',
      1 => 1470708503,
    ),
  ),
  'nocache_hash' => '670857a93b2e7880a3-47269949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>



<div style="float:left">
<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/graficas-b/q/1" class="btn green" target="_blank">
</i> Graficas </a><br>
<b>BUSQUEDA POR DEPENDENCIA</b> 
<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre de la Dependencia</div></th>
            <th width="200"><div align="center">Total</div></th>
        </tr>
    </thead>
    <tbody>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['dependencia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>   
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['count'];?>
</td>
        </tr>
		<?php }} ?>
    </tbody>
</table>
</div>
<div style="float:left; width:40px">
<font color="white">k</font>
</div>
<div style="float:left">
<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/graficas-b/q/2" class="btn green" target="_blank" >
</i> Graficas </a><br>
<b>BUSQUEDA POR TIPO DE DOCUMENTO</b>
<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre del Documento</div></th>
            <th width="200"><div align="center">Total</div></th>
        </tr>
    </thead>
    <tbody>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['tipodocumento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>   
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->getVariable('item')->value['documento'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['count'];?>
</td>
        </tr>
		<?php }} ?>
    </tbody>
</table>
</div>
<div style="clear: both">
</div>
<div style="float:left">
<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/graficas-b/q/3" class="btn green" target="_blank">
</i> Graficas </a><br>
<b>BUSCADOR POR:</b>
<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre de la Dependencia</div></th>
            <th width="200"><div align="center">Total</div></th>
        </tr>
    </thead>
    <tbody>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['buscarPor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>   
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['count'];?>
</td>
        </tr>
		<?php }} ?>
    </tbody>
</table>
</div>


<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
