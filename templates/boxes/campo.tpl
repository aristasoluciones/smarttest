<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1"> {$titleFrm}</h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    {include file="{$DOC_ROOT}/templates/forms/{$page}.tpl"}
    <!-- END FORM -->
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    {if !$info.view}
    <button class="btn yellow" onclick="SaveRegCampo()">{if $info.idReg}Actualizar{else}Guardar{/if}</button>
    {/if}
</div>