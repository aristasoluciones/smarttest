<?php /* Smarty version Smarty3-b7, created on 2016-08-14 12:18:42
         compiled from "C:/wamp/www/lavanderia/templates/forms/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2101257b0a7f283e9e3-90733903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff04b0108836ae32775370ab58b77355e3ff555f' => 
    array (
      0 => 'C:/wamp/www/lavanderia/templates/forms/config.tpl',
      1 => 1463322613,
    ),
  ),
  'nocache_hash' => '2101257b0a7f283e9e3-90733903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box "  style="margin-bottom:5px">
            
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
                    
					<b>Tema</b>
					<div class="control-group">
                       <div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								
								<ul class="inline">
									<li class="color-black current color-default" data-style="default" onClick="CambiarTema(1)"></li>
									<li class="color-blue" data-style="blue" onClick="CambiarTema(2)"></li>
									<li class="color-brown" data-style="brown" onClick="CambiarTema(3)"></li>
									<li class="color-purple" data-style="purple" onClick="CambiarTema(4)"></li>
									<li class="color-grey" data-style="grey" onClick="CambiarTema(5)"></li>
									<li class="color-white color-light" data-style="light" onClick="CambiarTema(6)"></li>
								</ul>
								<!--<label>
									<span>Layout</span>
									<select class="layout-option m-wrap small">
										<option value="fluid" selected>Fluid</option>
										<option value="boxed">Boxed</option>
									</select>
								</label>
								<label>
									<span>Header</span>
									<select class="header-option m-wrap small">
										<option value="fixed" selected>Fixed</option>
										<option value="default">Default</option>
									</select>
								</label>
								<label>
									<span>Sidebar</span>
									<select class="sidebar-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
								<label>
									<span>Footer</span>
									<select class="footer-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>-->
							</div>
						</div>
                       
                    </div>
					
					<b>Logos</b>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Logo 1:</label>
                        <div class="controls">
                        	
                            <input type="file" class="m-wrap span12" name="logo1"  onChange="changeLogo(1)"/>
                             <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/img_se.png" alt="" width="30%"/>
                        </div>
						<label class="control-label"><span class="reqIcon">*</span>Logo 2:</label>
                        <div class="controls">
                        	
                            <input type="file" class="m-wrap span12" name="logo2" onChange="changeLogo(2)" />
                             <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/img_se2.png" alt="" width="30%"/>
                        </div>
						<label class="control-label"><span class="reqIcon">*</span>Logo 3:</label>
                        <div class="controls">
                        	
                            <input type="file" class="m-wrap span12" name="logo3" onChange="changeLogo(3)"  />
                            <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logo.png" alt="" width="30%"/>
                        </div>
	
                    </div>
                      
                </form>
                <!-- END FORM-->                  
         
       
    </div>
    
    
</div>
    
</div>