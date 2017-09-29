<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                <!--Dependencia-->
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    <div class="portlet box ">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Mensajes</div>
            <div class="actions">            
            	<!--<a href="{$WEB_ROOT}/add-chat" class="btn green" >
                	<i class="icon-plus"></i> Nuevo Mensaje
                </a>-->
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
        </div>
        <div class="portlet-body" id="tblContent" style="height:300px; overflow:scroll" class="showScroll lion">
            {include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
        </div>
		<div>
		<center>
			<form id="frmGral">
			<input type="hidden" name="type" value="SaveMensaje">
			<input type="hidden" name="chatId" value="{$chatId}">
			<textarea name="mensaje" id="mensaje" style="width:900px"></textarea>
			</form>
			<br>
			<div id="loader">
			</div>
			 <button class="btn yellow" onclick="SaveMensaje()">Enviar</button>
		</center>
		
		</div>
    </div>
</div>