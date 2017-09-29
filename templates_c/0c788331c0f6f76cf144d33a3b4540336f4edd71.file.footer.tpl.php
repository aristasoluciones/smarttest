<?php /* Smarty version Smarty3-b7, created on 2016-04-17 10:30:01
         compiled from "C:/wamp/www/customerswm/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286805713abf9097f09-20762018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c788331c0f6f76cf144d33a3b4540336f4edd71' => 
    array (
      0 => 'C:/wamp/www/customerswm/templates/footer.tpl',
      1 => 1460906999,
    ),
  ),
  'nocache_hash' => '286805713abf9097f09-20762018',
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