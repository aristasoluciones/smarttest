<?php /* Smarty version Smarty3-b7, created on 2017-02-24 22:15:32
         compiled from "C:/wamp/www/encuesta/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2802658b104e49d2e86-91306165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1051fcd4fd98fc451944f1fdd81adda2959fbe4c' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/header.tpl',
      1 => 1485469747,
    ),
  ),
  'nocache_hash' => '2802658b104e49d2e86-91306165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="header navbar navbar-inverse navbar-fixed-top" >
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner" >
        <div class="container-fluid" >
            <!-- BEGIN LOGO -->
            <!--<a class="brand" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logole.jpg" border="0" width="150" height="150" />
            </a>-->
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