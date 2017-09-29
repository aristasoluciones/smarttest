<select class="span6 chosen" data-placeholder="Seleccione resultados"  name="resultadoId" id="resultadoId" tabindex="">
	<option value=""></option>
	{foreach from=$listResultados item=item key=key}
		<option {if $item.resultadoId eq $info.resultadoId} selected {/if} value="{$item.idReg}">{$item.nombre}</option>
	{/foreach}
</select>

<script>
		App.init();	
</script>