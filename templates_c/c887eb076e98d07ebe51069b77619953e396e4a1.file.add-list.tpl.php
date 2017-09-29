<?php /* Smarty version Smarty3-b7, created on 2017-02-22 09:57:01
         compiled from "C:/wamp/www/le/templates/add-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299858adb4cda2d6d0-05752526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c887eb076e98d07ebe51069b77619953e396e4a1' => 
    array (
      0 => 'C:/wamp/www/le/templates/add-list.tpl',
      1 => 1487778948,
    ),
  ),
  'nocache_hash' => '299858adb4cda2d6d0-05752526',
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
        
	<font size="5" color="gray">Numero de Listas:</font> <font  color="red" size="5"><?php echo $_smarty_tpl->getVariable('data')->value['countListas'];?>
</font>
	
	<div class="portlet-title">
	
		<div class="actions" id="actions">   
			<!--
			<a href="javascript:void(0)" class="btn green" onclick="PresaveLista()">
				<i class="icon-plus"></i> Guardar Lista
			</a>-->
				
			
			<?php if ($_smarty_tpl->getVariable('q')->value==''){?>
				<button class="btn green" id="btnSave" onclick="saveLista('guardar')">Guardar Lista Y Continuar Agregando</button>
				<button class="btn red" id="btnSave" onclick="SaveTerminar()">Cerrar Lista General</button>
			<?php }else{ ?>
				<button class="btn green" id="btnSave" onclick="saveLista('editar')">Editar</button>
			<?php }?>
			
				
				
			
				<button class="btn blue" id="btnSave" onclick="verLista()">Ver Lista Agregadas</button>
			<!--
			<button class="btn yellow" id="btnSave" onclick="vistaPreviaAdd()">Vista Previa </button>-->
			
			
		</div>
		<div id="loader">
		</div>
		
	</div>
	<?php if ($_smarty_tpl->getVariable('msj')->value=="si"){?>
		<div class="alert alert-success  alert-dismissable">
		 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>La Lista se guardo Correctamente</strong>
		</div>
	<?php }?>
	<div id="txtErrMsg">
	</div>
	<form id="frmGral">
	 <input type="hidden" name="listaId" id="listaId" value="<?php echo $_smarty_tpl->getVariable('data')->value['info']['listaId'];?>
">
	 <input type="hidden" name="listamayorId" id="listamayorId" value="<?php echo $_smarty_tpl->getVariable('data')->value['info']['listamayorId'];?>
">



	<table width="100%"  border="0" >
		   <tr>
		   	   <td style="vertical-align:top;">
			   
			   	   <table border=1 style="background:#f5f5f5; height: 480px; border-color:#ddd; ">
				   		  <tr>
						  	 <td style="background:#f5f5f5">
							
							 <h4>
							  <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/1.jpg" style="width:10%">
							 <b><font color='#058'>Menu Principal</font></b></h4></td>
						  </tr>
						  <tr>
						  	  <td>
							  <br>
							  <br>
							  	  <!--<h3>Entrada</h3>-->
								  
								   <span class="label label-info"><font size=3>Entrada</font></span>
                					<!--<input type="text"  value=>-->
									<a href="javascript:void(0)" onClick="deletePlatillo(1)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea  name="uno" id="uno" onkeypress="buscaPlatillo(1)" onkeyup="buscaPlatillo(1)" ><?php echo $_smarty_tpl->getVariable('data')->value['uno'];?>
</textarea>
									 
                					<input type="hidden" name="hiddenuno" id="hiddenuno" >
									<div id="loader_uno"></div>
                					<div id="divUno" style="position:absolute">
                					</div>
									
									<br>
                				<span class="label label-info"><font size=3>Platillo Principal</font></span>
                					<!--<input type="text"  value="" >-->
									<a href="javascript:void(0)" onClick="deletePlatillo(2)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="dos" id="dos" onkeypress="buscaPlatillo(2)" onkeyup="buscaPlatillo(2)"><?php echo $_smarty_tpl->getVariable('data')->value['dos'];?>
</textarea>
									<input type="hidden" name="hiddendos" id="hiddendos" >
									<div id="loader_dos"></div>
                					<div id="divDos" style="position:absolute">
                					</div>
									<br>
                				 <span class="label label-info"><font size=3>Guarnicion 1</font></span>
                					<!--<input type="text"  value="">-->
									<a href="javascript:void(0)" onClick="deletePlatillo(3)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="tres" id="tres" onkeypress="buscaPlatillo(3)" onkeyup="buscaPlatillo(3)" ><?php echo $_smarty_tpl->getVariable('data')->value['tres'];?>
</textarea>
									<input type="hidden" name="hiddentres" id="hiddentres" >
									<div id="loader_tres"></div>
                					<div id="divTres" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Guarnicion 2</font></span>
                					<!--<input type="text" name="guarnicion2" id="guarnicion2" onkeypress="buscaPlatillo(4)" onkeyup="buscaPlatillo(4)"  value="<?php echo $_smarty_tpl->getVariable('infoList')->value['guarnicion2'];?>
">
                					-->
									<a href="javascript:void(0)" onClick="deletePlatillo(4)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea name="cuatro" id="cuatro" onkeypress="buscaPlatillo(4)" onkeyup="buscaPlatillo(4)" ><?php echo $_smarty_tpl->getVariable('data')->value['cuatro'];?>
</textarea>
									<input type="hidden" name="hiddencuatro" id="hiddencuatro" >
									<div id="loader_cuatro"></div>
                					<div id="divCuatro" style="position:absolute">
                					</div>
									<br>
								<!--
                				<span class="label label-info"><font size=3>Otros</font></span><br><!--
                					<input type="text" name="otros" id="otros" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)"  value="<?php echo $_smarty_tpl->getVariable('infoList')->value['otros'];?>
">
									<textarea name="otros" id="otros" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)" ><?php echo $_smarty_tpl->getVariable('infoList')->value['otros'];?>
</textarea>
                					<input type="hidden" name="hiddenotros" id="hiddenotros" >
									<div id="loader_otros"></div>
                					<div id="divotros" style="position:absolute">
                					</div>-->
							  </td>
						  </tr>
			   	   </table>
				   
			   </td>
			   
			   <td style="vertical-align:top;">
					 <table border=1 style="background:#f5f5f5; height: 480px; border-color:#ddd; ">
				   		  <tr>
						  	 <td style="background:#f5f5f5">
							
							 <h4>
							  <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/1.jpg" style="width:10%">
							 <b><font color='#058'>Menu Infantil</font></b></h4></td>
						  </tr>
						  <tr>
						  	  <td>
							  <br>
							  <br>
							  	  <!--<h3>Entrada</h3>-->
								  
								   <span class="label label-info"><font size=3>Platillo Principal</font></span>
                					<!--<input type="text"  value=>-->
									<a href="javascript:void(0)" onClick="deletePlatillo(5)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea  name="cinco" id="cinco" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)" ><?php echo $_smarty_tpl->getVariable('data')->value['cinco'];?>
</textarea>
                					<input type="hidden" name="hiddencinco" id="hiddencinco" >
									<div id="loader_cinco"></div>
                					<div id="divCinco" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Guarnicion 1</font></span>
                					<!--<input type="text"  value="" >-->
									<a href="javascript:void(0)" onClick="deletePlatillo(6)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="seis" id="seis" onkeypress="buscaPlatillo(6)" onkeyup="buscaPlatillo(6)"><?php echo $_smarty_tpl->getVariable('data')->value['seis'];?>
</textarea>
									<input type="hidden" name="hiddenseis" id="hiddenseis" >
									<div id="loader_seis"></div>
                					<div id="divSeis" style="position:absolute">
                					</div>
									<br>
                				 <span class="label label-info"><font size=3>Guarnicion 2</font></span>
                					<!--<input type="text"  value="">-->
									<a href="javascript:void(0)" onClick="deletePlatillo(7)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="siete" id="siete" onkeypress="buscaPlatillo(7)" onkeyup="buscaPlatillo(7)" ><?php echo $_smarty_tpl->getVariable('data')->value['siete'];?>
</textarea>
									<input type="hidden" name="hiddensiete" id="hiddensiete" >
									<div id="loader_siete"></div>
                					<div id="divSiete" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Guarnicion 3</font></span>
                					<!--<input type="text" name="guarnicion2" id="guarnicion2" onkeypress="buscaPlatillo(4)" onkeyup="buscaPlatillo(4)"  value="<?php echo $_smarty_tpl->getVariable('infoList')->value['guarnicion2'];?>
">
                					-->
									<a href="javascript:void(0)" onClick="deletePlatillo(8)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea name="ocho" id="ocho" onkeypress="buscaPlatillo(8)" onkeyup="buscaPlatillo(8)" ><?php echo $_smarty_tpl->getVariable('data')->value['ocho'];?>
</textarea>
									<input type="hidden" name="hiddenocho" id="hiddenocho" >
									<div id="loader_ocho"></div>
                					<div id="divOcho" style="position:absolute">
                					</div>
									<br>
								
							  </td>
						  </tr>
			   	   </table>
			   </td>
			   
			   <td style="vertical-align:top;">
					<!--
			   	     <table border=1 style="background:#f5f5f5; border-color:#ddd; ">
				   		  <tr>
						  	  <td style="background:#f5f5f5"><h4>
							   <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/2.png" style="width:7%">
							  <b><font color='#058'>Botana</font></b></h4></td>
						  </tr>
						  <tr>
						  	  <td>
							  	  <br>
								  <br>
							  	  <span class="label label-info">Nombre del Platillo</span>
							  	  <input type="text" name="botana" id="botana" onkeypress="buscaPlatillo(6)" onkeyup="buscaPlatillo(6)">
								  <div id="loader_botana"></div>
                            		<div id="divBotana" style="height:400px" style="position:absolute">
                            			<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/view-botana.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

                            		</div>
							  </td>
						  </tr>
			   	   </table>
				   -->
				   <table border=1 style="background:#f5f5f5; border-color:#ddd;height: 480px;">
				   		  <tr>
						  	 <td style="background:#f5f5f5">
							
							 <h4>
							    <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/2.png" style="width:10%">
								<b><font color='#058'>Botana</font></b></h4></td>
						  </tr>
						  <tr>
						  	  <td>
							  <br>
							  <br>
							  	  <!--<h3>Entrada</h3>-->
								  
								   <span class="label label-info"><font size=3>Botana 1</font></span>
                					<!--<input type="text"  value=>-->
									<a href="javascript:void(0)" onClick="deletePlatillo(9)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea  name="nueve" id="nueve" onkeypress="buscaPlatillo(9)" onkeyup="buscaPlatillo(9)" ><?php echo $_smarty_tpl->getVariable('data')->value['nueve'];?>
</textarea>
                					<input type="hidden" name="hiddennueve" id="hiddennueve" >
									<div id="loader_nueve"></div>
                					<div id="divNueve" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Botana 2</font></span>
                					<!--<input type="text"  value="" >-->
									<a href="javascript:void(0)" onClick="deletePlatillo(10)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="diez" id="diez" onkeypress="buscaPlatillo(10)" onkeyup="buscaPlatillo(10)"><?php echo $_smarty_tpl->getVariable('data')->value['diez'];?>
</textarea>
									<input type="hidden" name="hiddendiez" id="hiddendiez" >
									<div id="loader_diez"></div>
                					<div id="divDiez" style="position:absolute">
                					</div>
									<br>
                				 <span class="label label-info"><font size=3>Botana 3</font></span>
                					<!--<input type="text"  value="">-->
									<a href="javascript:void(0)" onClick="deletePlatillo(11)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="once" id="once" onkeypress="buscaPlatillo(11)" onkeyup="buscaPlatillo(11)" ><?php echo $_smarty_tpl->getVariable('data')->value['once'];?>
</textarea>
									<input type="hidden" name="hiddenonce" id="hiddenonce" >
									<div id="loader_once"></div>
                					<div id="divOnce" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Botana 4</font></span>
                					<!--<input type="text" name="guarnicion2" id="guarnicion2" onkeypress="buscaPlatillo(4)" onkeyup="buscaPlatillo(4)"  value="<?php echo $_smarty_tpl->getVariable('infoList')->value['guarnicion2'];?>
">
                					-->
									<a href="javascript:void(0)" onClick="deletePlatillo(12)" >
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea name="doce" id="doce" onkeypress="buscaPlatillo(12)" onkeyup="buscaPlatillo(12)" ><?php echo $_smarty_tpl->getVariable('data')->value['doce'];?>
</textarea>
									<input type="hidden" name="hiddendoce" id="hiddendoce" >
									<div id="loader_doce"></div>
                					<div id="divDoce" style="position:absolute">
                					</div>
									<br>
								<!--
                				<span class="label label-info"><font size=3>Otros</font></span><br><!--
                					<input type="text" name="otros" id="otros" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)"  value="<?php echo $_smarty_tpl->getVariable('infoList')->value['otros'];?>
">
									<textarea name="otros" id="otros" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)" ><?php echo $_smarty_tpl->getVariable('infoList')->value['otros'];?>
</textarea>
                					<input type="hidden" name="hiddenotros" id="hiddenotros" >
									<div id="loader_otros"></div>
                					<div id="divotros" style="position:absolute">
                					</div>-->
							  </td>
						  </tr>
			   	   </table>
				   
			   </td>
			   <td style="vertical-align:top;">
			   	    <table border=1 style="background:#f5f5f5; border-color:#ddd;height: 490px; ">
				   		  <tr>
						  	 <td style="background:#f5f5f5; height: 40px; " ><h4><b><font color='#058'>Num.&nbsp;Personas</font></b></h4></td>
						  </tr>
						  <tr>
						  	  <td style="vertical-align:top; " >
									<br>
									<br>
								
								 
                            		<span class="label label-info">Adultos</span>	<input type="text" name="adulto"  style="width:40px" value="<?php echo $_smarty_tpl->getVariable('data')->value['info']['personas'];?>
"><br>
                            		<span class="label label-info">Niños</span>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nino" style="width:40px" value="<?php echo $_smarty_tpl->getVariable('data')->value['info']['nino'];?>
">
                            		
                            		
							  </td>
						  </tr>
			   	   </table>
			   </td>
			   
			   <td style="vertical-align:top;">
					<table border=1 style="background:#f5f5f5; border-color:#ddd; height: 490px">
				   		  <tr>
						  	 <td style="background:#f5f5f5; height: 40px;"><h4><b><font color='#058'>Clientes</font></b></h4></td>
						  </tr>
						  <tr>
						  	  <td style="vertical-align:top;">
							  	 
								  	<br>
									<br>
								  	<span class="label label-info">Cliente</span>			  
                            		<select name="clienteId">
                            				<option></option>
                            			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstCliente')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
                            				<option value="<?php echo $_smarty_tpl->getVariable('item')->value['clienteId'];?>
" <?php if ($_smarty_tpl->getVariable('data')->value['info']['clienteId']==$_smarty_tpl->getVariable('item')->value['clienteId']){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
                            			<?php }} ?>
                            		</select>
                            		<br>
                            		<span class="label label-info">Cliente Nuevo</span>
                            		<input type="text" name="clienteNuevo" name="<?php echo $_smarty_tpl->getVariable('data')->value['info']['clienteNuevo'];?>
">
                            		
                            		<br>
                            		<br>
                            
                            		
							  </td>
						  </tr>
			   	   </table>
			   </td>
			    <td style="vertical-align:top;">
					<table border=1 style="background:#f5f5f5; border-color:#ddd; height: 490px">
				   		  <tr>
						  	 <td style="background:#f5f5f5; height: 40px;"><h4><b><font color='#058'>Horarios</font></b></h4></td>
						  </tr>
						  <tr>
						  	  <td style="vertical-align:top;">
							  	 
								  	<br>
									<br>
									<span class="label label-info">Fecha del Evento</span>			  
                            		<input type="text" name="fechaEvento" id="fechaEvento" onclick="fechaEven()" value="<?php echo $_smarty_tpl->getVariable('data')->value['info']['fechaEvento'];?>
">
                            		<br>
								  	<span class="label label-info">Hora de Botana</span>			  
                            		<input type="text" name="horarioBotana" value="<?php echo $_smarty_tpl->getVariable('data')->value['info']['horaBotana'];?>
">
                            		<br>
                            		<span class="label label-info">Hora de Alimentos</span>
                            		<input type="text" name="horarioAlimento" value="<?php echo $_smarty_tpl->getVariable('data')->value['info']['horaAlimento'];?>
">
                            		
                            		<br>
                            		<br>
                            
							  </td>
						  </tr>
			   	   </table>
			   </td>
			<td style="vertical-align:top;">
					<table border=1 style="background:#f5f5f5; border-color:#ddd; height: 490px">
				   		  <tr>
						  	 <td style="background:#f5f5f5; height: 40px"><h4><b><font color='#058'>Servicios Extra</font></b></h4></td>
						  </tr>
						  <tr>
						  	  <td style="vertical-align:top;">
							  	 
								  <br>
								  <br>
								  <textarea name="servicioExtra"><?php echo $_smarty_tpl->getVariable('data')->value['info']['servicioExtra'];?>
</textarea>
							  </td>
						  </tr>
			   	   </table>
			   </td>
		   </tr>
	</table>
	
	

	</form>	
	
	

</div>