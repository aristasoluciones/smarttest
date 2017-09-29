<ul class="page-sidebar-menu">
<br>

 <a class="brand" href="{$WEB_ROOT}">
            	<img src="{$WEB_ROOT}/images/logo.png" border="0" style="width:150px" />
            </a>
			<br>
			<br>
			&nbsp;
			&nbsp;
			&nbsp;
			<font size="4" color="red">BETA 1.00</font>
	{*}
    <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    {*}
    <li>
        <div align="center">
            <a href="{$WEB_ROOT}">
                
            </a>
			<br>
        </div>
    </li>
    <li class="{if $page == "homepage"}start active{/if}">
        <a href="{$WEB_ROOT}"> 
        <i class="icon-home"></i> 
        <span class="title">Inicio</span>
        {if $page == "homepage"}
        <span class="selected"></span>
        {/if}
        </a>
    </li>
    <li class="{if  $page == "cliente" ||  $page == "ficha" || $page == "ingrediente" ||  $page == "add-ing" || $page == "proveedor" || $page == "secretaria" || $page == "usuario" ||  $page == "dependencia"  || $page == "tipodocumento" || $page == "config" || $page == "editorial"}active{/if}">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Configuracion </span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
		<li {if $page == "cliente"}class="active"{/if}>
		<a href="{$WEB_ROOT}/cliente">Cliente</a>
		</li>
		<li {if $page == "proveedor"}class="active"{/if}>
		<a href="{$WEB_ROOT}/proveedor">Proveedor</a>
		</li>
		<li {if $page == "usuario"}class="active"{/if}>
		<a href="{$WEB_ROOT}/usuario"> Usuarios</a>
		</li>
        </ul>
	</li> 
	 
	 
	 <li class="{if   $page == "encuesta" ||  $page == "pregunta" || $page == "encuesta-analisis"}active{/if}">
        <a href="javascript:;">
        <i class="icon-table"></i> 
        <span class="title">Encuestas</span>
        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
		<li {if $page == "encuesta" || $page == "pregunta" || $page == "encuesta-analisis"}class="active"{/if}>
		<a href="{$WEB_ROOT}/encuesta">Encuesta</a>
		</li>
        </ul>
	</li> 
	
	
      
</ul>