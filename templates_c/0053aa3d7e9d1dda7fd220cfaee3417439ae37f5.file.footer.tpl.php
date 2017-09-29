<?php /* Smarty version Smarty3-b7, created on 2016-05-08 20:45:44
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18703572febc8624b87-35663424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0053aa3d7e9d1dda7fd220cfaee3417439ae37f5' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/footer.tpl',
      1 => 1460906999,
    ),
  ),
  'nocache_hash' => '18703572febc8624b87-35663424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('page')->value=="login"){?>
	<div class="copyright"><!--
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/poweredby8.png" border="0" width="85" height="" />-->
		&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @FOOTER;?>

		
	</div>
<?php }else{ ?>
    <div class="footer">
        <div class="footer-inner"><!--
			 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/poweredby.png" border="0" width="85" height="" />-->
            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo @FOOTER;?>

			
        </div>
        <div class="footer-tools">
            <span class="go-top">
            <i class="icon-angle-up"></i>
            </span>
        </div>
    </div>
<?php }?>