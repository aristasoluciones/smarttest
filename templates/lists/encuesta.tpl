{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Clave</div></th>
            <th class="hidden-480" width="150"><div align="center">Nombre</div></th>
            <th class="hidden-480" width="200"><div align="center">Fecha Registro</div></th>
            <th class="hidden-480"><div align="center">Usuario Registro</div></th>
            <th class="hidden-480"><div align="center">Vigencia</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$data.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.encuestaId}</td>
            <td><div align="center">{$item.nombre}</div></td>
            <td><div align="center">{$item.fechaRegistro}</div></td>
            <td><div align="center">{$item.usuario}</div></td>
            <td><div align="center">{$item.inicio} - {$item.fin}</div></td>
            <td><div align="center">
            <a href="{$WEB_ROOT}/pregunta/x/{$item.encuestaId}"  title="AGREGAR PREGUNTAS">
            	<img src="{$WEB_ROOT}/images/icons/calendar_edit.png" border="0">
            </a>
			
            <a  href="{$WEB_ROOT}/encuesta-analisis/x/{$item.encuestaId}" title="ANALISIS">
            	<img src="{$WEB_ROOT}/images/chart-pie.png" border="0">
            </a>
			
            <a href="javascript:void(0)" onClick="EditReg({$item.idReg})" title="EDITAR">
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