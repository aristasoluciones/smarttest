<?php /* Smarty version Smarty3-b7, created on 2016-04-18 20:34:48
         compiled from "C:/wamp/www/acervo/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454557158b38b1e617-01024290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc4561f6b5fae9ad9ffb4fb682e1b0c70629ae18' => 
    array (
      0 => 'C:/wamp/www/acervo/templates/header.tpl',
      1 => 1461029678,
    ),
  ),
  'nocache_hash' => '1454557158b38b1e617-01024290',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="header navbar navbar-inverse navbar-fixed-top" style="background:#A4A4A4">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner" style="background:#A4A4A4">
        <div class="container-fluid" style="background:#A4A4A4">
            <!-- BEGIN LOGO -->
            <a class="brand" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
"><!--
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logowm.png" border="0" width="150" height="150" />-->
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER --> 
			
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">                
                               
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img alt="" src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/avatar_small.png" />
                    <span class="username"><?php echo $_smarty_tpl->getVariable('Usr')->value['nombre'];?>
</span>
                    <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">                        
                        <li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/logout"><i class="icon-key"></i> Salir</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>