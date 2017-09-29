<?php /* Smarty version Smarty3-b7, created on 2016-04-17 23:10:10
         compiled from "C:/wamp/www/customerswm/templates/menus/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:366757145e22b5b578-61204623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80eda7a986b742dd9c532519815da53c38585326' => 
    array (
      0 => 'C:/wamp/www/customerswm/templates/menus/main.tpl',
      1 => 1460952609,
    ),
  ),
  'nocache_hash' => '366757145e22b5b578-61204623',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul class="page-sidebar-menu">
	
    <li>
        <div align="center">
            <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
">
                
            </a>
			<br>
        </div>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="homepage"){?>start active<?php }?>">
        <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
"> 
        <i class="icon-home"></i> 
        <span class="title">Inicio</span>
        <?php if ($_smarty_tpl->getVariable('page')->value=="homepage"){?>
        <span class="selected"></span>
        <?php }?>
        </a>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="myproyect"||$_smarty_tpl->getVariable('page')->value=="establo"||$_smarty_tpl->getVariable('page')->value=="producto"||$_smarty_tpl->getVariable('page')->value=="tratamiento"||$_smarty_tpl->getVariable('page')->value=="aislamiento-bacteriologico"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Proyectos </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if ($_smarty_tpl->getVariable('page')->value=="myproyect"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/myproyect">Mis Proyectos</a>
            </li>
        </ul>
	</li> 
	

      
</ul>