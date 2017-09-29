<?php /* Smarty version Smarty3-b7, created on 2017-03-21 22:24:28
         compiled from "C:/xampp/htdocs/smarttest/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2600958d1fc7c3fd496-25768641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a75a36673f9534f86198e9e0e8c1bc8f131964' => 
    array (
      0 => 'C:/xampp/htdocs/smarttest/templates/footer.tpl',
      1 => 1489021910,
    ),
  ),
  'nocache_hash' => '2600958d1fc7c3fd496-25768641',
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