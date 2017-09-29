<?php /* Smarty version Smarty3-b7, created on 2017-02-28 18:34:37
         compiled from "C:/wamp/www/encuesta/templates/menus/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3256858b6171d313a99-27549335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df4ef5aa538a9798bff1b083e0c95410c629ec66' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/menus/main.tpl',
      1 => 1488328474,
    ),
  ),
  'nocache_hash' => '3256858b6171d313a99-27549335',
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
/images/logo.png" border="0" style="width:150px" />
            </a>
			<br>
			<br>
			&nbsp;
			&nbsp;
			&nbsp;
			<font size="4" color="red">BETA 1.00</font>
	
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
    <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="cliente"||$_smarty_tpl->getVariable('page')->value=="ficha"||$_smarty_tpl->getVariable('page')->value=="ingrediente"||$_smarty_tpl->getVariable('page')->value=="add-ing"||$_smarty_tpl->getVariable('page')->value=="proveedor"||$_smarty_tpl->getVariable('page')->value=="secretaria"||$_smarty_tpl->getVariable('page')->value=="usuario"||$_smarty_tpl->getVariable('page')->value=="dependencia"||$_smarty_tpl->getVariable('page')->value=="tipodocumento"||$_smarty_tpl->getVariable('page')->value=="config"||$_smarty_tpl->getVariable('page')->value=="editorial"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Configuracion </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
		<li <?php if ($_smarty_tpl->getVariable('page')->value=="cliente"){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/cliente">Cliente</a>
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
	 
	 
	 <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="encuesta"||$_smarty_tpl->getVariable('page')->value=="pregunta"||$_smarty_tpl->getVariable('page')->value=="encuesta-analisis"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Encuestas</span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
		<li <?php if ($_smarty_tpl->getVariable('page')->value=="encuesta"||$_smarty_tpl->getVariable('page')->value=="pregunta"||$_smarty_tpl->getVariable('page')->value=="encuesta-analisis"){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/encuesta">Encuesta</a>
		</li>
        </ul>
	</li> 
	
	
      
</ul>