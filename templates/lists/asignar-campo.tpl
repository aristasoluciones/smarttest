{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre</div></th>
           
 
        </tr>
    </thead>
    <tbody>
    	{foreach from=$lstCampo.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.documento}</td>
			 <td><div align="center">
		
            <a href="javascript:void(0)" onClick="ViewCampos({$item.tipodocumentoId})" title="Agregar Campos">
            	<img src="{$WEB_ROOT}/images/plus-circle-frame.png" border="0">
            </a>
			 <a href="javascript:void(0)" onClick="ViewCamposAsig({$item.tipodocumentoId})" title="Ver Detalles">
            	<img src="{$WEB_ROOT}/images/icons/view.png" border="0">
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