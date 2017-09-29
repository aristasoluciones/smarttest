<?php /* Smarty version Smarty3-b7, created on 2017-03-21 22:58:19
         compiled from "C:/xampp/htdocs/smarttest/templates/do_encuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2521258d2046bb5c2b1-27475286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c80acda63c8e8d13829031357813096e6ff9e50' => 
    array (
      0 => 'C:/xampp/htdocs/smarttest/templates/do_encuesta.tpl',
      1 => 1490157354,
    ),
  ),
  'nocache_hash' => '2521258d2046bb5c2b1-27475286',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div data-role="page" data-theme="a">
  <div data-role="header" data-position="fixed">
    <a class="ui-btn-left ui-btn-corner-all ui-btn ui-icon-home ui-btn-icon-notext ui-shadow" title=" Inicio" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
" rel="external"></a>
    <h1 class="ui-title" aria-level="1" role="heading" tabindex="0">Nombre empresa</h1>
   
  </div>
  
  <div data-role="content" class="ui-content">
   <ul data-role="listview" data-inset="true">
     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('encuestas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
        <li><a href="#">
              <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/custom/atencioncliente1.png">
              <h2><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</h2>
              <p></p></a>
       </li>
     <?php }} ?>
     </ul>
  </div>
  
  <div data-role="footer" data-theme="a" data-position="fixed">
      <h3>&nbsp;</h3>
       
  </div>  
</div>