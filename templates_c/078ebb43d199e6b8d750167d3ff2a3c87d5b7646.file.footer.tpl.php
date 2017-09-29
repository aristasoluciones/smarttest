<?php /* Smarty version Smarty3-b7, created on 2016-08-14 12:02:44
         compiled from "C:/wamp/www/lavanderia/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2575557b0a434221589-15165072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078ebb43d199e6b8d750167d3ff2a3c87d5b7646' => 
    array (
      0 => 'C:/wamp/www/lavanderia/templates/footer.tpl',
      1 => 1460906999,
    ),
  ),
  'nocache_hash' => '2575557b0a434221589-15165072',
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