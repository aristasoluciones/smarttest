<?php /* Smarty version Smarty3-b7, created on 2016-08-14 12:02:44
         compiled from "C:/wamp/www/lavanderia/templates/forms/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:836257b0a43413ec58-68734642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bfc3df28d501200807593bb7bd805c081743d79' => 
    array (
      0 => 'C:/wamp/www/lavanderia/templates/forms/login.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '836257b0a43413ec58-68734642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form class="form-vertical login-form" id="frmLogin">
<input type="hidden" name="type" value="doLogin">
    <h3 class="form-title">Iniciar Sesi&oacute;n</h3>			
    <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Correo Electr&oacute;nico:</label>
        <div class="controls">
            <div class="input-icon left">
                <i class="icon-user"></i>
                <input class="m-wrap placeholder-no-fix" type="text" placeholder="Usuario" name="username" id="username"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Contrase&ntilde;a:</label>
        <div class="controls">
            <div class="input-icon left">
                <i class="icon-lock"></i>
                <input class="m-wrap placeholder-no-fix" type="password" placeholder="Contrase&ntilde;a" name="password" id="password"/>
            </div>
        </div>
    </div>
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
    <div class="form-actions">
        <label class="checkbox">				
        </label>
        <button type="button" class="btn blue pull-right" onClick="DoLogin()">
        Login <i class="m-icon-swapright m-icon-white"></i>
        </button>            
    </div>			
</form>