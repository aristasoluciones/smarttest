<div class="control-group">
	<label class="control-label"><span class="reqIcon">*</span>Que tratamiento?</label>
	<div class="controls">
		{if !$infoCal.view}
			<select class="span12 chosen" data-placeholder="Seleccione tratamiento"  name="tratamientoId" id="tratamientoId" onchange="AccionActual(this.value,'actualizar_tratamiento_2')" tabindex="1">
					<option value=""></option>
					{foreach from=$listTratamiento item=item key=key}
						<option {if $item.tratamientoId eq $infoCal.tratamientoId} selected {/if} value="{$item.tratamientoId}">{$item.nombre}, Num: {$item.numTratamiento}</option>
					{/foreach}
			</select>
		{else}
			{$infoCal.nombreTratamiento}, Num: {$infoCal.numTratamiento}
		{/if}
	</div>
</div>

<div id="actualizar_tratamiento_2">
	{if $infoCal.tratamientoId > 0}
		{include file="{$DOC_ROOT}/templates/boxes/actualizar-tratamiento_2.tpl"}
	{/if}
</div>

