<?php /* Smarty version Smarty3-b7, created on 2017-02-23 20:15:20
         compiled from "C:/wamp/www/aristax/templates/lists/pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1530058af9738358de9-43551727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a26f3a3a88641d186bf776907e7bb61e30a47350' => 
    array (
      0 => 'C:/wamp/www/aristax/templates/lists/pages.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '1530058af9738358de9-43551727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('registros')->value['result'])>0){?>
<div class="fLeft">
	<?php echo $_smarty_tpl->getVariable('info')->value;?>

</div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('search')->value==1){?>
	<?php $_smarty_tpl->assign("function","Search",null,null);?>
<?php }else{ ?>
	<?php $_smarty_tpl->assign("function","LoadPage",null,null);?>
<?php }?>


<?php if (count($_smarty_tpl->getVariable('pages')->value['numbers'])){?>
<div class="pagination pagination-mini fRight">
    <ul>
    	<?php if ($_smarty_tpl->getVariable('pages')->value['first']){?>
            <li><a href="javascript:;" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('pages')->value['first'];?>
)"> &laquo; </a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('pages')->value['prev']){?>
            <li><a href="javascript:;" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('pages')->value['prev'];?>
)"> &lt; </a></li>
        <?php }?>
        
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value['numbers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
            <?php if ($_smarty_tpl->getVariable('pages')->value['current']==$_smarty_tpl->getVariable('key')->value){?>
                <li class="active"><a href="#"><?php echo $_smarty_tpl->getVariable('key')->value;?>
</a></li>
            <?php }else{ ?>
                <li><a href="javascript:;" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('key')->value-1;?>
)"><?php echo $_smarty_tpl->getVariable('key')->value;?>
</a></li>
            <?php }?>
        <?php }} ?>
        
        <?php if ($_smarty_tpl->getVariable('pages')->value['next']){?>
        	<li><a href="javascript:;" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('pages')->value['next'];?>
)"> &gt; </a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('pages')->value['last']){?>
        	<li><a href="javascript:;" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('pages')->value['last'];?>
)"> &raquo; </a></li>
        <?php }?>
    </ul>
</div>
<input type="hidden" name="page" id="page" value="<?php echo $_smarty_tpl->getVariable('pages')->value['current']-1;?>
" />
<?php }?>
 
<div class="clearB"></div>