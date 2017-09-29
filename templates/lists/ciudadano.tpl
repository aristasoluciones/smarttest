{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre</div></th>
            <th class="hidden-480" width="150"><div align="center">Telefono</div></th>
            <th class="hidden-480" width="200"><div align="center">Email</div></th>
            <th class="hidden-480"><div align="center">Usuario</div></th>
            <th class="hidden-480"><div align="center">Tipo</div></th>
            <th class="hidden-480" width="100"><div align="center">Status</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registrosC.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.nombre}</td>
            <td><div align="center">{$item.telefono}</div></td>
            <td><div align="center">{$item.email}</div></td>
            <td><div align="center">{$item.usuario}</div></td>
            <td><div align="center">{$item.tipo}</div></td>
            <td><div align="center">{if $item.activo}S&iacute;{else}No{/if}</div></td>
            <td><div align="center">
            <a href="javascript:void(0)" onClick="ViewRegCiudadano({$item.idReg})" title="Ver Detalles">
            	<img src="{$WEB_ROOT}/images/icons/view.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="EditRegCiudadano({$item.idReg})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="DeleteRegCiudadano({$item.idReg})" title="Eliminar">
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