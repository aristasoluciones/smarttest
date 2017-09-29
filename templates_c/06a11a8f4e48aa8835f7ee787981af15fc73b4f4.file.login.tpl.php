<?php /* Smarty version Smarty3-b7, created on 2017-03-08 17:01:29
         compiled from "/home/aristaso/public_html/smarttest/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186260436958c08d49d34ce7-74700451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06a11a8f4e48aa8835f7ee787981af15fc73b4f4' => 
    array (
      0 => '/home/aristaso/public_html/smarttest/templates/login.tpl',
      1 => 1489014087,
    ),
  ),
  'nocache_hash' => '186260436958c08d49d34ce7-74700451',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]--><head>
	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/1-default-meta.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/2-default-css.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	
    <?php if ($_smarty_tpl->getVariable('page')->value=="login"){?>	
	<link href="assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    <?php }?>
    
</head>

<body class="login">
	    
	<div class="logo" style="width:360px;  !important">

	</div>
    
	<div class="content">
		<center> <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logo.jpg" border="0" style="width:160px" /></center>
		<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/login.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

		 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logo.png" border="0" style="width:50px" />
	</div>
    	    
	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	
    <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/3-default-js.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    
	<script src="assets/scripts/app.js" type="text/javascript"></script>    
	<script type="text/javascript">
		jQuery(document).ready(function() {     
		  App.init();
		});
	</script>

</body>
</html>