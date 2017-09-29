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
        
	<font size="5" color="gray">Numero de Listas:</font> <font  color="red" size="5">{$data.countListas}</font>
	
	<div class="portlet-title">
	
		<div class="actions" id="actions">   
			<!--
			<a href="javascript:void(0)" class="btn green" onclick="PresaveLista()">
				<i class="icon-plus"></i> Guardar Lista
			</a>-->
				
			
			{if $q eq ""}
				<button class="btn green" id="btnSave" onclick="saveLista('guardar')">Guardar Lista Y Continuar Agregando</button>
				<button class="btn red" id="btnSave" onclick="SaveTerminar()">Cerrar Lista General</button>
			{else}
				<button class="btn green" id="btnSave" onclick="saveLista('editar')">Editar</button>
			{/if}
			
				
				
			
				<button class="btn blue" id="btnSave" onclick="verLista()">Ver Lista Agregadas</button>
			<!--
			<button class="btn yellow" id="btnSave" onclick="vistaPreviaAdd()">Vista Previa </button>-->
			
			
		</div>
		<div id="loader">
		</div>
		
	</div>
	{if $msj eq "si"}
		<div class="alert alert-success  alert-dismissable">
		 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>La Lista se guardo Correctamente</strong>
		</div>
	{/if}
	<div id="txtErrMsg">
	</div>
	<form id="frmGral">
	 <input type="hidden" name="listaId" id="listaId" value="{$data.info.listaId}">
	 <input type="hidden" name="listamayorId" id="listamayorId" value="{$data.info.listamayorId}">



	<table width="100%"  border="0" >
		   <tr>
		   	   <td style="vertical-align:top;">
			   
			   	   <table border=1 style="background:#f5f5f5; height: 480px; border-color:#ddd; ">
				   		  <tr>
						  	 <td style="background:#f5f5f5">
							
							 <h4>
							  <img src="{$WEB_ROOT}/images/1.jpg" style="width:10%">
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
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea  name="uno" id="uno" onkeypress="buscaPlatillo(1)" onkeyup="buscaPlatillo(1)" >{$data.uno}</textarea>
									 
                					<input type="hidden" name="hiddenuno" id="hiddenuno" >
									<div id="loader_uno"></div>
                					<div id="divUno" style="position:absolute">
                					</div>
									
									<br>
                				<span class="label label-info"><font size=3>Platillo Principal</font></span>
                					<!--<input type="text"  value="" >-->
									<a href="javascript:void(0)" onClick="deletePlatillo(2)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="dos" id="dos" onkeypress="buscaPlatillo(2)" onkeyup="buscaPlatillo(2)">{$data.dos}</textarea>
									<input type="hidden" name="hiddendos" id="hiddendos" >
									<div id="loader_dos"></div>
                					<div id="divDos" style="position:absolute">
                					</div>
									<br>
                				 <span class="label label-info"><font size=3>Guarnicion 1</font></span>
                					<!--<input type="text"  value="">-->
									<a href="javascript:void(0)" onClick="deletePlatillo(3)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="tres" id="tres" onkeypress="buscaPlatillo(3)" onkeyup="buscaPlatillo(3)" >{$data.tres}</textarea>
									<input type="hidden" name="hiddentres" id="hiddentres" >
									<div id="loader_tres"></div>
                					<div id="divTres" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Guarnicion 2</font></span>
                					<!--<input type="text" name="guarnicion2" id="guarnicion2" onkeypress="buscaPlatillo(4)" onkeyup="buscaPlatillo(4)"  value="{$infoList.guarnicion2}">
                					-->
									<a href="javascript:void(0)" onClick="deletePlatillo(4)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea name="cuatro" id="cuatro" onkeypress="buscaPlatillo(4)" onkeyup="buscaPlatillo(4)" >{$data.cuatro}</textarea>
									<input type="hidden" name="hiddencuatro" id="hiddencuatro" >
									<div id="loader_cuatro"></div>
                					<div id="divCuatro" style="position:absolute">
                					</div>
									<br>
								<!--
                				<span class="label label-info"><font size=3>Otros</font></span><br><!--
                					<input type="text" name="otros" id="otros" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)"  value="{$infoList.otros}">
									<textarea name="otros" id="otros" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)" >{$infoList.otros}</textarea>
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
							  <img src="{$WEB_ROOT}/images/1.jpg" style="width:10%">
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
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea  name="cinco" id="cinco" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)" >{$data.cinco}</textarea>
                					<input type="hidden" name="hiddencinco" id="hiddencinco" >
									<div id="loader_cinco"></div>
                					<div id="divCinco" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Guarnicion 1</font></span>
                					<!--<input type="text"  value="" >-->
									<a href="javascript:void(0)" onClick="deletePlatillo(6)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="seis" id="seis" onkeypress="buscaPlatillo(6)" onkeyup="buscaPlatillo(6)">{$data.seis}</textarea>
									<input type="hidden" name="hiddenseis" id="hiddenseis" >
									<div id="loader_seis"></div>
                					<div id="divSeis" style="position:absolute">
                					</div>
									<br>
                				 <span class="label label-info"><font size=3>Guarnicion 2</font></span>
                					<!--<input type="text"  value="">-->
									<a href="javascript:void(0)" onClick="deletePlatillo(7)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="siete" id="siete" onkeypress="buscaPlatillo(7)" onkeyup="buscaPlatillo(7)" >{$data.siete}</textarea>
									<input type="hidden" name="hiddensiete" id="hiddensiete" >
									<div id="loader_siete"></div>
                					<div id="divSiete" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Guarnicion 3</font></span>
                					<!--<input type="text" name="guarnicion2" id="guarnicion2" onkeypress="buscaPlatillo(4)" onkeyup="buscaPlatillo(4)"  value="{$infoList.guarnicion2}">
                					-->
									<a href="javascript:void(0)" onClick="deletePlatillo(8)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea name="ocho" id="ocho" onkeypress="buscaPlatillo(8)" onkeyup="buscaPlatillo(8)" >{$data.ocho}</textarea>
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
							   <img src="{$WEB_ROOT}/images/2.png" style="width:7%">
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
                            			{include file="{$DOC_ROOT}/templates/lists/view-botana.tpl"}
                            		</div>
							  </td>
						  </tr>
			   	   </table>
				   -->
				   <table border=1 style="background:#f5f5f5; border-color:#ddd;height: 480px;">
				   		  <tr>
						  	 <td style="background:#f5f5f5">
							
							 <h4>
							    <img src="{$WEB_ROOT}/images/2.png" style="width:10%">
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
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea  name="nueve" id="nueve" onkeypress="buscaPlatillo(9)" onkeyup="buscaPlatillo(9)" >{$data.nueve}</textarea>
                					<input type="hidden" name="hiddennueve" id="hiddennueve" >
									<div id="loader_nueve"></div>
                					<div id="divNueve" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Botana 2</font></span>
                					<!--<input type="text"  value="" >-->
									<a href="javascript:void(0)" onClick="deletePlatillo(10)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="diez" id="diez" onkeypress="buscaPlatillo(10)" onkeyup="buscaPlatillo(10)">{$data.diez}</textarea>
									<input type="hidden" name="hiddendiez" id="hiddendiez" >
									<div id="loader_diez"></div>
                					<div id="divDiez" style="position:absolute">
                					</div>
									<br>
                				 <span class="label label-info"><font size=3>Botana 3</font></span>
                					<!--<input type="text"  value="">-->
									<a href="javascript:void(0)" onClick="deletePlatillo(11)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
                					<textarea name="once" id="once" onkeypress="buscaPlatillo(11)" onkeyup="buscaPlatillo(11)" >{$data.once}</textarea>
									<input type="hidden" name="hiddenonce" id="hiddenonce" >
									<div id="loader_once"></div>
                					<div id="divOnce" style="position:absolute">
                					</div>
									<br>
                				<span class="label label-info"><font size=3>Botana 4</font></span>
                					<!--<input type="text" name="guarnicion2" id="guarnicion2" onkeypress="buscaPlatillo(4)" onkeyup="buscaPlatillo(4)"  value="{$infoList.guarnicion2}">
                					-->
									<a href="javascript:void(0)" onClick="deletePlatillo(12)" >
									<img src="{$WEB_ROOT}/images/icons/delete.gif" style="width:10%">
									</a>
									<textarea name="doce" id="doce" onkeypress="buscaPlatillo(12)" onkeyup="buscaPlatillo(12)" >{$data.doce}</textarea>
									<input type="hidden" name="hiddendoce" id="hiddendoce" >
									<div id="loader_doce"></div>
                					<div id="divDoce" style="position:absolute">
                					</div>
									<br>
								<!--
                				<span class="label label-info"><font size=3>Otros</font></span><br><!--
                					<input type="text" name="otros" id="otros" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)"  value="{$infoList.otros}">
									<textarea name="otros" id="otros" onkeypress="buscaPlatillo(5)" onkeyup="buscaPlatillo(5)" >{$infoList.otros}</textarea>
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
								
								 
                            		<span class="label label-info">Adultos</span>	<input type="text" name="adulto"  style="width:40px" value="{$data.info.personas}"><br>
                            		<span class="label label-info">Niños</span>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nino" style="width:40px" value="{$data.info.nino}">
                            		
                            		
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
                            			{foreach from=$lstCliente item=item key=key} 
                            				<option value="{$item.clienteId}" {if $data.info.clienteId eq $item.clienteId} selected{/if}>{$item.nombre}</option>
                            			{/foreach}
                            		</select>
                            		<br>
                            		<span class="label label-info">Cliente Nuevo</span>
                            		<input type="text" name="clienteNuevo" name="{$data.info.clienteNuevo}">
                            		
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
                            		<input type="text" name="fechaEvento" id="fechaEvento" onclick="fechaEven()" value="{$data.info.fechaEvento}">
                            		<br>
								  	<span class="label label-info">Hora de Botana</span>			  
                            		<input type="text" name="horarioBotana" value="{$data.info.horaBotana}">
                            		<br>
                            		<span class="label label-info">Hora de Alimentos</span>
                            		<input type="text" name="horarioAlimento" value="{$data.info.horaAlimento}">
                            		
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
								  <textarea name="servicioExtra">{$data.info.servicioExtra}</textarea>
							  </td>
						  </tr>
			   	   </table>
			   </td>
		   </tr>
	</table>
	
	

	</form>	
	
	

</div>