{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Folio</div></th>
            <th width="200"><div align="center">Fecha Elaboracion</div></th>
            <th width="200"><div align="center">Numero de Listas</div></th>
            <th width="200"><div align="center">Clientes</div></th>
            <th class="hidden-480" width="150"><div align="center">Usuario</div></th>
            <th class="hidden-480" width="150"><div align="center">Estatus</div></th>
            <th class="hidden-480" width="100"><div align="center">Imprimir Listas Generales</div></th>
            <th class="hidden-480" width="100"><div align="center">Acciones</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.suma_listaId}</td>
            <td>{$item.fechaElaboracion}</td>
            <td>{$item.numListas}</td>
            <td>
				{foreach from=$item.clientes item=item2 key=key} 
					{$item2.nombre}/
				{/foreach}
			</td>
            <td><div align="center">{$item.nombre}</div></td>
            <td><div align="center">{$item.status}</div></td>
            <td>
			<div align="center">
				<!--<a href="javascript:void(0)" onClick="EditReg({$item.idReg})" title="Editar">
					<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
				</a>-->
				<!--<a href="javascript:void(0)" onClick="DeleteReg({$item.idReg})" title="Eliminar">
					<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
				</a>
			
				<a href="javascript:void(0)" onClick="pdfUnitario({$item.idReg})"  class="btn blue" style="width:100px">
					Por Menu
				</a>
				<a href="javascript:void(0)" onClick="pdfTotal({$item.idReg})" class="btn yellow" style="width:100px">
					 General
				</a>
				
				<a href="{$WEB_ROOT}/add-list/q/{$item.idReg}" onClick="" class="btn gray" style="width:100px">
					 Editar
				</a>
				-->
			
				<a href="javascript:void(0)" onClick="pdfProveedor({$item.idReg})"    style="background:#B43104; color:white">
					Lista&nbsp;Compras
				</a><br>
				<!--<a href="javascript:void(0)" onClick="vistaPreviaAdd({$item.idReg})"   style="background:#2E9AFE; color:white" style="width:100px">
					General
				</a>-->
            </div>
            </td>
			<td>
				<a href="javascript:void(0)" onClick="verLista({$item.idReg})"    style="background:#2E9AFE; color:white">
					Ver Listas
				</a>
				<!--<a href="{$WEB_ROOT}/add-list/var/{$item.idReg}" onClick="" class="btn gray" style="width:100px">
					<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
				</a>-->
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