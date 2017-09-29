{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre</div></th>
            <th width="200"><div align="center">Mensaje</div></th>
 
        </tr>
    </thead>
    <tbody>
    	{foreach from=$lstchat item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.nombre}</td>
            <td>{$item.mensaje}</td>

            <td>
				<div align="center">
		
				<a href="{$WEB_ROOT}/view-chat/q/{$item.chatId}" title="Chat">
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