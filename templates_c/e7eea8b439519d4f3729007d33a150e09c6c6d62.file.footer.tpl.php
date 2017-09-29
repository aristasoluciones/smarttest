<?php /* Smarty version Smarty3-b7, created on 2017-01-12 13:57:01
         compiled from "C:/wamp/www/le/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169415877df8d41a255-59376226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7eea8b439519d4f3729007d33a150e09c6c6d62' => 
    array (
      0 => 'C:/wamp/www/le/templates/footer.tpl',
      1 => 1460906999,
    ),
  ),
  'nocache_hash' => '169415877df8d41a255-59376226',
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