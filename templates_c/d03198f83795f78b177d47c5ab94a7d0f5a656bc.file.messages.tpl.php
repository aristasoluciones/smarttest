<?php /* Smarty version Smarty3-b7, created on 2017-03-21 23:34:52
         compiled from "C:/xampp/htdocs/smarttest/templates/boxes/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:335958d20cfcde5947-33419580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd03198f83795f78b177d47c5ab94a7d0f5a656bc' => 
    array (
      0 => 'C:/xampp/htdocs/smarttest/templates/boxes/messages.tpl',
      1 => 1489021930,
    ),
  ),
  'nocache_hash' => '335958d20cfcde5947-33419580',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('errors')->value['value'])>0){?>
<div class="alert alert-success">
    <button class="close" data-dismiss="alert"></button>
     <?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value){
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["error"]->key;
?>
    	<strong>!Exito!</strong> <?php echo $_smarty_tpl->getVariable('error')->value;?>
  
	<?php }} ?>
</div>
<?php }?>