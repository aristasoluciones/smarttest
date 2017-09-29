<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1">{if $info.view == 1}Detalles{elseif $info.idReg}Editar{else}Agregar{/if} {$titleFrm}</h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    {include file="{$DOC_ROOT}/templates/forms/pregunta.tpl"}
    <!-- END FORM -->
</div>
<div class="modal-footer">
	 <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    {if !$info.view}
    <button class="btn yellow" onclick="SaveReg()">{if $info.idReg}Actualizar{else}Guardar{/if}</button>
    {/if}
</div>