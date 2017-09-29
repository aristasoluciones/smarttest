<?php /* Smarty version Smarty3-b7, created on 2017-03-21 22:58:19
         compiled from "C:/xampp/htdocs/smarttest/templates/2-default-css.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2187158d2046ba2cd64-35997419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4732a638092e3545d3fe48006d73c8f765503fe' => 
    array (
      0 => 'C:/xampp/htdocs/smarttest/templates/2-default-css.tpl',
      1 => 1490157512,
    ),
  ),
  'nocache_hash' => '2187158d2046ba2cd64-35997419',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('page')->value!="do_encuesta"){?>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/plugins/chosen-bootstrap/chosen/chosen.css" />
<!-- END GLOBAL MANDATORY STYLES -->

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.css"/>


	

<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/css/main.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/favicon.ico" />




<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/favicon.ico" />
<?php if ($_smarty_tpl->getVariable('miColor')->value==1){?>
	<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<?php }elseif($_smarty_tpl->getVariable('miColor')->value==2){?>
	<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
<?php }elseif($_smarty_tpl->getVariable('miColor')->value==3){?>
	<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/themes/brown.css" rel="stylesheet" type="text/css" id="style_color"/>
<?php }elseif($_smarty_tpl->getVariable('miColor')->value==4){?>
	<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/themes/purple.css" rel="stylesheet" type="text/css" id="style_color"/>
<?php }elseif($_smarty_tpl->getVariable('miColor')->value==5){?>
	<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/themes/grey.css" rel="stylesheet" type="text/css" id="style_color"/>
<?php }else{ ?>
	<link href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
<?php }?>

<?php }else{ ?>
 
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/jqm/themes/jquery.mobile.theme-1.4.5.min.css"/> -->
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/jqm/themes/arista_original.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/jqm/themes/jquery.mobile.icons.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/jqm/jquery.mobile.structure-1.4.5.min.css"/>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/jqm/jquery.js" ></script> 
  <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/jqm/jquery.mobile-1.4.5.min.js" ></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/js/functionsjbm.js" ></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/js/<?php echo $_smarty_tpl->getVariable('page')->value;?>
.js" ></script>
  <?php }?>
