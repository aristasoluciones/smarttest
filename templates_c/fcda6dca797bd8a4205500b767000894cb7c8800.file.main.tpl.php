<?php /* Smarty version Smarty3-b7, created on 2016-05-08 18:44:13
         compiled from "C:/wamp/www/acervo/sistema/templates/menus/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19047572fcf4dd1a877-01914204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcda6dca797bd8a4205500b767000894cb7c8800' => 
    array (
      0 => 'C:/wamp/www/acervo/sistema/templates/menus/main.tpl',
      1 => 1462751051,
    ),
  ),
  'nocache_hash' => '19047572fcf4dd1a877-01914204',
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
    <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="usuario"||$_smarty_tpl->getVariable('page')->value=="dependencia"||$_smarty_tpl->getVariable('page')->value=="add-documento"||$_smarty_tpl->getVariable('page')->value=="tipodocumento"||$_smarty_tpl->getVariable('page')->value=="documento"||$_smarty_tpl->getVariable('page')->value=="config"||$_smarty_tpl->getVariable('page')->value=="aislamiento-bacteriologico"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Catalogos </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="config"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/config">Configuracion</a>
               
            </li>
            <li <?php if ($_smarty_tpl->getVariable('page')->value=="dependencia"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/dependencia">Dependiencia</a>
               
            </li>
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="documento"||$_smarty_tpl->getVariable('page')->value=="add-documento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/documento">Documentos</a>
            </li>
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="tipodocumento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/tipodocumento">Tipo de Documento</a>
            </li>
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="usuario"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/usuario">Usuarios</a>
            </li>
        </ul>
	</li> 
	

      
</ul>