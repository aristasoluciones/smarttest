<?php /* Smarty version Smarty3-b7, created on 2017-03-08 16:49:59
         compiled from "/home/aristaso/public_html/smarttest/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89027722458c08a9761ae46-54255279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2103b57f2ba18104a14645c61711529e89874475' => 
    array (
      0 => '/home/aristaso/public_html/smarttest/templates/footer.tpl',
      1 => 1489012560,
    ),
  ),
  'nocache_hash' => '89027722458c08a9761ae46-54255279',
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