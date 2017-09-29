<?php /* Smarty version Smarty3-b7, created on 2016-08-13 09:56:51
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/menus/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1425557af3533417fb7-91777570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96aac097cc5740fde09b02d4458aeaade7f2379b' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/menus/main.tpl',
      1 => 1471099981,
    ),
  ),
  'nocache_hash' => '1425557af3533417fb7-91777570',
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
    <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="asignar-campo"||$_smarty_tpl->getVariable('page')->value=="campo"||$_smarty_tpl->getVariable('page')->value=="ciudadano"||$_smarty_tpl->getVariable('page')->value=="instaladores"||$_smarty_tpl->getVariable('page')->value=="secretaria"||$_smarty_tpl->getVariable('page')->value=="usuario"||$_smarty_tpl->getVariable('page')->value=="dependencia"||$_smarty_tpl->getVariable('page')->value=="tipodocumento"||$_smarty_tpl->getVariable('page')->value=="config"||$_smarty_tpl->getVariable('page')->value=="editorial"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Catalogos </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
		<?php if ($_smarty_tpl->getVariable('Usr')->value['tipo']=="admin"||$_smarty_tpl->getVariable('Usr')->value['tipo']=="super"){?>
			<?php if ($_smarty_tpl->getVariable('Usr')->value['tipo']=="super"){?>
				<!--
				<li <?php if ($_smarty_tpl->getVariable('page')->value=="asignar-campo"){?>class="active"<?php }?>>
					<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/asignar-campo">Asignar Campos</a>
				   
				</li>
				<li <?php if ($_smarty_tpl->getVariable('page')->value=="campo"){?>class="active"<?php }?>>
					<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/campo">Crear Campos</a>
				   
				</li>
			-->
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="config"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/config">Configuracion</a>
               
            </li>
			<!--
            <li <?php if ($_smarty_tpl->getVariable('page')->value=="dependencia"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/dependencia">Direcciones</a>
               
            </li>-->
			<?php }?>
			<!--
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="editorial"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/editorial">Editorial</a>
               
            </li>-->
		<?php }?>
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="instaladores"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/instaladores">Instaladores</a>
               
            </li>
		<?php if ($_smarty_tpl->getVariable('Usr')->value['tipo']=="super"){?>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="secretaria"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/secretaria">Secretarias</a>
            </li>
		<?php }?>
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="tipodocumento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/tipodocumento">Tipo de Documento</a>
            </li>
		<?php if ($_smarty_tpl->getVariable('Usr')->value['tipo']=="super"){?>
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="usuario"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/usuario">Administrar Usuarios</a>
            </li>
			<!--
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="ciudadano"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/ciudadano">Ciudadano</a>
            </li>-->
		<?php }?>
        </ul>
	</li> 
	 <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="aut-documento"||$_smarty_tpl->getVariable('page')->value=="doc-observados"||$_smarty_tpl->getVariable('page')->value=="aut-documento"||$_smarty_tpl->getVariable('page')->value=="sol-documento"||$_smarty_tpl->getVariable('page')->value=="add-documento"||$_smarty_tpl->getVariable('page')->value=="documento"||$_smarty_tpl->getVariable('page')->value=="cat-documento"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Documentos </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
			
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="documento"||$_smarty_tpl->getVariable('page')->value=="add-documento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/documento">Mis Documentos</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="aut-documento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/aut-documento">Documentos por Autorizar</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="sol-documento"||$_smarty_tpl->getVariable('page')->value=="cat-documento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/sol-documento">Documentos Solicitados</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="doc-observados"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/doc-observados">Documentos Observados</a>
            </li>
			<?php if ($_smarty_tpl->getVariable('Usr')->value['tipo']=="admin"){?>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="aut-documento"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/aut-documento">Documentos por Autorizar</a>
            </li>
			<?php }?>
        </ul>
	</li> 
	<li class="<?php if ($_smarty_tpl->getVariable('page')->value=="graficas"||$_smarty_tpl->getVariable('page')->value=="chat"||$_smarty_tpl->getVariable('page')->value=="view-chat"||$_smarty_tpl->getVariable('page')->value=="add-chat"||$_smarty_tpl->getVariable('page')->value=="estadistica"||$_smarty_tpl->getVariable('page')->value=="busqueda"){?>active<?php }?>">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Herramientas </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
			
			 <li <?php if ($_smarty_tpl->getVariable('page')->value=="chat"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/chat">Mensajes</a>
            </li>
			<?php if ($_smarty_tpl->getVariable('Usr')->value['tipo']=="admin"||$_smarty_tpl->getVariable('Usr')->value['tipo']=="super"||$_smarty_tpl->getVariable('Usr')->value['tipo']=="funcionario"){?>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="estadistica"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/estadistica">Estadisticas</a>
            </li>
			<li <?php if ($_smarty_tpl->getVariable('page')->value=="busqueda"){?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/busqueda">Lo mas Buscado</a>
            </li>
			<?php }?>
        </ul>
	</li> 
	
      
</ul>