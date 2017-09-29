<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:09:54
         compiled from "C:/wamp/www/ceva/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9038551c33aa97f3f3-63751113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5766cf250507523b123b6545eca8874b4de54b3' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/footer.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '9038551c33aa97f3f3-63751113',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('page')->value=="login"){?>
	<div class="copyright">
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/poweredby.png" border="0" width="85" height="" />
		&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @FOOTER;?>

		
	</div>
<?php }else{ ?>
    <div class="footer">
        <div class="footer-inner">
			 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/poweredby.png" border="0" width="85" height="" />
            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo @FOOTER;?>

			
        </div>
        <div class="footer-tools">
            <span class="go-top">
            <i class="icon-angle-up"></i>
            </span>
        </div>
    </div>
<?php }?>