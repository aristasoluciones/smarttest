{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Clave</div></th>
            <th class="hidden-480" width="150"><div align="center">Pregunta</div></th>
            <th class="hidden-480" width="200"><div align="center">Tipo</div></th>
            <th class="hidden-480"><div align="center">Parametros</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.preguntaId}</td>
            <td><div align="center">{$item.pregunta}</div></td>
            <td><div align="center">{$item.tiporespuesta}</div></td>
            <td>	
				<div align="center">{$item.parametros}
					{if $item.tiporespuesta eq "punto"}
						{$item.rango}
					{else if $item.tiporespuesta eq "opcional"}
						{$item.opcional}
					{else if $item.tiporespuesta eq "abierta"}
						{$item.numCaracter}
					{/if}
			
			</div></td>
            <td><div align="center">
			<!--
            <a href="javascript:void(0)" onClick="ViewReg({$item.idReg})" title="Ver Detalles">
            	<img src="{$WEB_ROOT}/images/icons/view.png" border="0">
            </a>
			-->
            <a href="javascript:void(0)" onClick="EditReg({$item.idReg})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
            </a>
		
            <a href="javascript:void(0)" onClick="DeleteReg({$item.idReg})" title="Eliminar">
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