<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">

	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha desde</label>
			<div class="controls">
						<input type="text" name="fechaInicioF" id="fechaInicioF" class="m-wrap span12" value="{$info.fechaInicioF}" onmousemove="Calendario('fechaInicioF')" />

			</div>
		</div>
	</div>
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha hasta</label>
			<div class="controls">
						<input type="text" name="fechaFinF" id="fechaFinF" class="m-wrap span12" value="{$info.fechaFinF}" onmousemove="Calendario('fechaFinF')" />

			</div>
		</div>
	</div>
	
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Diagnostico</label>
			<div class="controls">
				<select class="span12"  name="diagnosticoIdF" id="diagnosticoIdF" >
					<option value="">Todo</option>
					{foreach from=$listDiagnostico item=item key=key}
						<option value="{$item.diagnosticoId}">{$item.nombre}</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
	
	<div class="span4 ">
	
	
	

	</div>
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">&nbsp;</label>
			<div class="controls">

			<button type="button" class="btn blue" onclick="Search()">Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
									
			</div>
		</div>
	</div>
</div>

<hr class="clearfix" />

</form>
