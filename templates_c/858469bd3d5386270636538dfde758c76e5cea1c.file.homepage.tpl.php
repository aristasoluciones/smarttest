<?php /* Smarty version Smarty3-b7, created on 2016-08-04 11:50:53
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1392957a3726dd81be1-98125181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '858469bd3d5386270636538dfde758c76e5cea1c' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/homepage.tpl',
      1 => 1470319342,
    ),
  ),
  'nocache_hash' => '1392957a3726dd81be1-98125181',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
	<center>
	<H2>
			BIENVENIDO AL SISTEMA ACERVO HIST&OacuteRICO DE TAPACHULA
			</H2>
  <br>
  <br>
  <br>
  
       
<div class="row-fluid" style="left:50px">
	<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
		<div class="dashboard-stat green">
			<div class="visual">
				<i class="icon-globe"></i>
			</div>
			<div class="details">
				<div class="number">
					<?php echo $_smarty_tpl->getVariable('tDoc')->value;?>

				</div>
				<div class="desc">                           
					
				</div>
			</div>
			<a class="more" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/documento">
			Total de Documentos <i class="m-icon-swapright m-icon-white"></i>
			</a>                 
		</div>
	</div>
	<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
		<div class="dashboard-stat yellow">
			<div class="visual">
				<i class="icon-bar-chart"></i>
			</div>
			<div class="details">
				<div class="number"><?php echo $_smarty_tpl->getVariable('tDocP')->value;?>
</div>
				<div class="desc"> </div>
			</div>
			<a class="more" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/aut-documento">
			Pendientes por Autorizar<i class="m-icon-swapright m-icon-white"></i>
			</a>                  
		</div>
	</div>
	<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
		<div class="dashboard-stat blue">
			<div class="visual">
				<i class="icon-bar-chart"></i>
			</div>
			<div class="details">
				<div class="number"><?php echo $_smarty_tpl->getVariable('tDocP')->value;?>
</div>
				<div class="desc"></div>
			</div>
			<a class="more" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/documento/var/1">
			 Documentos Recientes (30) <i class="m-icon-swapright m-icon-white"></i>
			</a>                 
		</div>
	</div>
	<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
		<div class="dashboard-stat purple">
			<div class="visual">
				<i class="icon-bar-chart"></i>
			</div>
			<div class="details">
				<div class="number"><?php echo $_smarty_tpl->getVariable('tDocP')->value;?>
</div>
				<div class="desc"></div>
			</div>
			<a class="more" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/estadistica">
			Estadisticas<i class="m-icon-swapright m-icon-white"></i>
			</a>                 
		</div>
	</div>
	
</div>
   
	