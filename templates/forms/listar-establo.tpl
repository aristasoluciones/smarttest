<div class="control-group">
	<label class="control-label">Establos:</label>
	<div class="controls">
		<select class="span3 chosen" data-placeholder="Choose a Category" onchange="GuardarEstablo(this.value)">
			<option value="">Seleccionar Establo</option>
			{foreach from=$listEstablos item=item}        	
			<option {if $usr.establoId eq $item.establoId} selected {/if} value="{$item.establoId}">{$item.nombre}</option>
			{/foreach}
		</select>
	</div>
</div>