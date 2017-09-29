<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">
	<div class="span1 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Vaca</label>
			<div class="controls">
						<input type="text" name="vacaF" id="vacaF" class="m-wrap span12" placeholder="Vaca"/>

			</div>
		</div>
	</div>
	<div class="span1">
		<div class="control-group">
			<label class="control-label" for="firstName">Mastitis</label>
			<div class="controls">
				
				<select class="span12" name="tipoMastitisIdF" id="tipoMastitisIdF">
					<option value="">Todos</option>                                
					{foreach from=$listTipoMastitis item=item key=key}
						<option value="{$item.tipoMastitisId}">{$item.nombre}</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
	<div class="span1 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Cuarto</label>
			<div class="controls">
					
				<select class="span12" name="cuartoF" id="cuartoF">
					<option value="">Todos</option>                                
					<option value="1">1</option>                                
					<option value="2">2</option>                                
					<option value="3">3</option>                                
					<option value="4">4</option>                                
					
				</select>

			</div>
		</div>
	</div>
	
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha de ingreso (desde)</label>
			<div class="controls">
						<input type="text" value="{$info.fechaIngresoInicio}" name="fechaIngresoInicioF" id="fechaIngresoInicioF" class="m-wrap span12" onmousemove="Calendario('fechaIngresoInicioF')" />

			</div>
		</div>
	</div>
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha de ingreso (hasta)</label>
			<div class="controls">
						<input type="text" value="{$info.fechaIngresoFin}" name="fechaIngresoFinF" id="fechaIngresoFinF" class="m-wrap span12" onmousemove="Calendario('fechaIngresoFinF')" />

			</div>
		</div>
	</div>
	
	<div class="span2">
		<div class="control-group">
			<label class="control-label" for="firstName">Diagnostico</label>
			<div class="controls">

				<select class="span12" name="diagnosticoF" id="diagnosticoF">
					<option value="">Todos</option>                                
					{foreach from=$listDiagnostico item=item key=key}
						<option value="{$item.diagnosticoId}">{$item.nombre}</option>
					{/foreach}
				</select>
				
			</div>
		</div>
	</div>
	
	<div class="span1">
		<div class="control-group">
			<label class="control-label" for="firstName">Reincidencia</label>
			<div class="controls">
				
				<select class="span12" name="reincidenciaF" id="reincidenciaF">
					<option value="">Todos</option>                                
					<option value="si"> Si</option>
					<option value="no"> No</option>
				</select>
			</div>
		</div>
	</div>

	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">&nbsp;</label>
			<div class="controls">

			<button type="button" class="btn blue" onclick="Search(0)">Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
									
			</div>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span3 ">
		
	</div>
	<div class="span3">
		<div class="control-group">
			<label class="control-label" for="firstName">Mes</label>
			<div class="controls">
				
				<select class="span12" name="mesF" id="mesF">
					<option value="">Todos</option>                                
					{foreach from=$listMes item=item key=key}
						<option {if $info.mes eq $item.mes} selected {/if} value="{$item.mes}">{$item.nombre}</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
	<div class="span3 ">
		<div class="control-group">
			<label class="control-label" for="firstName">A&ntilde;o</label>
			<div class="controls">
				
				<select class="span12" name="anioF" id="anioF">
					<option value="">Todos</option>                                
					{foreach from=$listAnio item=item key=key}
						<option {if $info.anio eq $item.anio} selected {/if} value="{$item.anio}">{$item.anio}</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
	
	<div class="span3 ">
		
	</div>
	
</div>

<hr class="clearfix" />

</form>
