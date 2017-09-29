<div class="control-group">
	<label class="control-label"><span class="reqIcon">*</span>Dias de tratamiento a partir de hoy:</label>
	<div class="controls">
		{if !$infoCal.view}
		<input type="number" class="m-wrap span12" name="diaTratamiento" value="{$infoCal.diaTratamiento}" onkeypress="return soloDigito(event)" maxlength="10" />
		{else}
			{$infoCal.diaTratamiento}
		{/if}
	</div>
</div>