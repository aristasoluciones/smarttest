<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:13:41
         compiled from "C:/wamp/www/ceva/templates/menus/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27403550dbce61fde90-95234857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a18629ee6a315afd0c2a0914a88ccca7c00cc1a' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/menus/main.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '27403550dbce61fde90-95234857',
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
                <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logo.png" border="0" width="150" height="150" />
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
    <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="usuario"||$_smarty_tpl->getVariable('page')->value=="establo"||$_smarty_tpl->getVariable('page')->value=="producto"||$_smarty_tpl->getVariable('page')->value=="tratamiento"||$_smarty_tpl->getVariable('page')->value=="aislamiento-bacteriologico"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Cat&aacute;logos</span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if ($_smarty_tpl->getVariable('page')->value=="usuario"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/usuario">Usuarios</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="establo"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/establo">Establos</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="producto"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/producto">Productos</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="tratamiento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/tratamiento">Protocolo</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="aislamiento-bacteriologico"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/aislamiento-bacteriologico">Aislamiento bacteriologico</a>
            </li>

        </ul>
	</li> 
	
	<li class="<?php if ($_smarty_tpl->getVariable('page')->value=="agregar-incidencia"||$_smarty_tpl->getVariable('page')->value=="incidencia"||$_smarty_tpl->getVariable('page')->value=="tratamiento-animal"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Animales</span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if ($_smarty_tpl->getVariable('page')->value=="agregar-incidencia"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/agregar-incidencia">Agregar Incidencia</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="incidencia"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/incidencia">Incidencias</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="tratamiento-animal"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/tratamiento-animal">Protocolos</a>
            </li>
        </ul>
	</li> 
	
	<li class="<?php if ($_smarty_tpl->getVariable('page')->value=='estadistica-caso'||$_smarty_tpl->getVariable('page')->value=='reporte-costo'||$_smarty_tpl->getVariable('page')->value=='reporte-tratamiento'||$_smarty_tpl->getVariable('page')->value=='reporte-reincidencia'){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Reportes</span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if ($_smarty_tpl->getVariable('page')->value=="estadistica-caso"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/estadistica-caso">Estadistica de casos</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="reporte-costo"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/reporte-costo">Reporte de costos</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="reporte-tratamiento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/reporte-tratamiento">Reporte Tratamientos</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="reporte-reincidencia"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/reporte-reincidencia">Reporte Reincidencia</a>
            </li>
        </ul>
	</li> 

      
</ul>