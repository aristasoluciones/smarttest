<?php /* Smarty version Smarty3-b7, created on 2016-05-09 15:06:47
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/boxes/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224825730edd7d3b4b6-92198643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adbfd07c6ed1a6a889cf6ca2bae425d95efe386d' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/boxes/messages.tpl',
      1 => 1428618902,
    ),
  ),
  'nocache_hash' => '224825730edd7d3b4b6-92198643',
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