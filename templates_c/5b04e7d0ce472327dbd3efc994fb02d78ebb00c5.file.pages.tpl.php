<?php /* Smarty version Smarty3-b7, created on 2016-05-08 20:45:43
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/lists/pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15982572febc71b79f4-43276935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b04e7d0ce472327dbd3efc994fb02d78ebb00c5' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/lists/pages.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '15982572febc71b79f4-43276935',
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