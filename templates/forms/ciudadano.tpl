<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>{if !$info.view}Ingrese los {/if}Datos</div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="{$info.idReg}" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Nombre:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="nombre" value="{$info.nombre}" maxlength="60" />
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Apellido Paterno:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="apaterno" value="{$info.apaterno}" maxlength="60" />
                            {else}
                            	{$info.apaterno}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Apellido Materno:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="amaterno" value="{$info.amaterno}" maxlength="60" />
                            {else}
                            	{$info.amaterno}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tel&eacute;fono:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="telefono" value="{$info.telefono}" maxlength="60"> 
                             {else}
                            	{$info.telefono}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Email:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="email"  value="{$info.email}" maxlength="80"/>
                             {else}
                            	{$info.email}
                            {/if}
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Usuario:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="usuario" value="{$info.usuario}" maxlength="13" />
                            {else}
                            	{$info.usuario}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Contrase&ntilde;a:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="passwd" value="{$info.passwd}" maxlength="100">
                            {else}
                            	{$info.passwd}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Tipo:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <select class="m-wrap span12" name="tipo" id="tipo" onchange="ShowEstablo(this.value)" >
                                
                                <option value="ciudadano" {if $info.tipo == "ciudadano"}selected{/if}>Ciudadano</option>                                
                            </select> 
                             {else}
                            	{$info.tipo}
                            {/if}
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" >Activo:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="checkbox" name="activo" value="1" {if $info.activo == "1"}checked{/if} />
                             {else}
                            	{if $info.activo == 1}S&iacute;{else}No{/if}
                            {/if}
                        </div>
                    </div>  
					 <div class="control-group">
                        <label class="control-label" >Calle:</label>
                        <div class="controls">
                        	{if !$info.view}
								<input type="text" name="calle" id="calle" value="{$info.calle}">
                             {else}
								 {$info.calle}
                            {/if}
                        </div>
                    </div> 
					<div class="control-group">
                        <label class="control-label" >No. Exterior:</label>
                        <div class="controls">
                        	{if !$info.view}
								<input type="text" name="Nexterior" id="Nexterior" value="{$info.noExterior}">
                             {else}
								 {$info.noExterior}
                            {/if}
                        </div>
                    </div> 
					<div class="control-group">
                        <label class="control-label" >Colonia:</label>
                        <div class="controls">
                        	{if !$info.view}
								<input type="text" name="colonia" id="colonia" value="{$info.colonia}">
                             {else}
								 {$info.colonia}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" >Ciudad:</label>
                        <div class="controls">
                        	{if !$info.view}
								<input type="text" name="ciudad" id="ciudad" value="{$info.ciudad}">
                             {else}
								 {$info.ciudad}
                            {/if}
                        </div>
                    </div> 
						
					<div class="control-group">
                        <label class="control-label" >Estado:</label>
                        <div class="controls">
                        	{if !$info.view}
								<input type="text" name="estado" id="estado" value="{$info.estado}">
                             {else}
								 {$info.estado}
                            {/if}
                        </div>
                    </div> 	
					<div class="control-group">
                        <label class="control-label" >Pais:</label>
                        <div class="controls">
                        	{if !$info.view}
								<input type="text" name="pais" id="pais" value="{$info.pais}">
                             {else}
								 {$info.pais}
                            {/if}
                        </div>
                    </div>
									
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>