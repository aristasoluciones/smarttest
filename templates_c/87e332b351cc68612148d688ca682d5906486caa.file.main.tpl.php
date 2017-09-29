<?php /* Smarty version Smarty3-b7, created on 2017-02-09 20:27:42
         compiled from "C:/wamp/www/le/templates/menus/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32328589d251ec3a141-54236905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e332b351cc68612148d688ca682d5906486caa' => 
    array (
      0 => 'C:/wamp/www/le/templates/menus/main.tpl',
      1 => 1486693660,
    ),
  ),
  'nocache_hash' => '32328589d251ec3a141-54236905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul class="page-sidebar-menu">
<br>

 <a class="brand" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logole.jpg" border="0"  />
            </a>
	
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
    <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="cliente"||$_smarty_tpl->getVariable('page')->value=="platillo"||$_smarty_tpl->getVariable('page')->value=="ingrediente"||$_smarty_tpl->getVariable('page')->value=="add-ing"||$_smarty_tpl->getVariable('page')->value=="proveedor"||$_smarty_tpl->getVariable('page')->value=="secretaria"||$_smarty_tpl->getVariable('page')->value=="usuario"||$_smarty_tpl->getVariable('page')->value=="dependencia"||$_smarty_tpl->getVariable('page')->value=="tipodocumento"||$_smarty_tpl->getVariable('page')->value=="config"||$_smarty_tpl->getVariable('page')->value=="editorial"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Configuracion </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
	<!--	

			<li <?php if ($_smarty_tpl->getVariable('page')->value=="config"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/config">Configuracion</a>
               
            </li>
-->

		<li <?php if ($_smarty_tpl->getVariable('page')->value=="cliente"){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/cliente">Cliente</a>
		</li>
		<li <?php if ($_smarty_tpl->getVariable('page')->value=="ingrediente"){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/ingrediente">Ingredientes</a>
		</li>
		<li <?php if ($_smarty_tpl->getVariable('page')->value=="platillo"||$_smarty_tpl->getVariable('page')->value=="add-ing"){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/platillo">Platillo</a>
		</li>
		<li <?php if ($_smarty_tpl->getVariable('page')->value=="proveedor"){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/proveedor">Proveedor</a>
		</li>
		<li <?php if ($_smarty_tpl->getVariable('page')->value=="usuario"){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/usuario"> Usuarios</a>
		</li>


        </ul>
	</li> 
	 <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="lista"||$_smarty_tpl->getVariable('page')->value=="add-list"||$_smarty_tpl->getVariable('page')->value=="aut-documento"||$_smarty_tpl->getVariable('page')->value=="sol-documento"||$_smarty_tpl->getVariable('page')->value=="add-documento"||$_smarty_tpl->getVariable('page')->value=="documento"||$_smarty_tpl->getVariable('page')->value=="cat-documento"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Listas </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
			
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="lista"||$_smarty_tpl->getVariable('page')->value=="lista"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/lista">Listas</a>
            </li>

			<li <?php if ($_smarty_tpl->getVariable('page')->value=="add-list"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-list">Nueva Lista</a>
            </li>
        </ul>
	</li> 
	
	
      
</ul>