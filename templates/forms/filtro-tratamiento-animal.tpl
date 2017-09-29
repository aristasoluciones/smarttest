<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">
	
	
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha</label>
			<div class="controls">
						<input type="text" name="fechaF" id="fecha" value="{$info.fecha}" class="m-wrap span12" onmousemove="Calendario('fecha')" />

			</div>
		</div>
	</div>
	<div class="span2">
		<div class="control-group">
			<label class="control-label" for="firstName">Estado</label>
			<div class="controls">
					
				<select class="span12" name="estadoF" id="estadoF">
					<option value="">Todos</option>                                
					<option value="1"> En tratamiento</option>                                
					<option value="D">En descarte</option>                                
					<option value="O">En observacion</option>                                                   
					
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
	
	<div class="span2">
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

	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">&nbsp;</label>
			<div class="controls">

			<button type="button" class="btn blue" onclick="Search(0)">Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
									
			</div>
		</div>
	</div>
</div>


<hr class="clearfix" />

</form>
