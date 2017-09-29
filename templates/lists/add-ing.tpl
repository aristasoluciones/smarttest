{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Consecutivo</div></th>
            <th width="200"><div align="center">Ingrediente</div></th>
            <th class="hidden-480" width="150"><div align="center">Cantidad</div></th>
            <th class="hidden-480" width="150"><div align="center">Unidad</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$lts item=item2 key=key}        	
        <tr class="odd gradeX">
			<td>
				{$key+1}
			</td>
            <td>
				<select name="ingredienteId_{$item2.detalle_platilloId}" id="ingredienteId_{$item2.detalle_platilloId}">
					<option></option>
					{foreach from=$ltsIngredientes item=item key=key}  
					<option value="{$item.ingredienteId}" {if $item.ingredienteId eq $item2.ingredienteId} selected {/if}>{$item.nombre}</option>
					{/foreach}
				</select>
			</td>
            <td>
				<input type="text" name="cantidad_{$item2.detalle_platilloId}" id="cantidad_{$item2.detalle_platilloId}" style="width:80px" value="{$item2.cantidad}">
			</td>
            <td>
				<select name="unidadId_{$item2.detalle_platilloId}" id="unidadId_{$item2.detalle_platilloId}">
					<option></option>
					{foreach from=$ltsunidad item=item key=key}  
					<option value="{$item.unidadId}" {if $item.unidadId eq $item2.unidadId} selected {/if}>{$item.nombre}</option>
					{/foreach}
				</select>
			</td>

            <td>
			<div align="center">
				
				<a href="javascript:void(0)" onClick="DeleteReg({$item2.detalle_platilloId})" title="Eliminar">
					<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
				</a>
				
            </div>
            </td>
        </tr>
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}