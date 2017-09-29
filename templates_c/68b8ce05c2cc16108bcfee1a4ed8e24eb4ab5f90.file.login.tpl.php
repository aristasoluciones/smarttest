<?php /* Smarty version Smarty3-b7, created on 2016-04-17 09:09:06
         compiled from "C:/wamp/www/customerswm/templates/forms/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1117257139902226813-78755613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68b8ce05c2cc16108bcfee1a4ed8e24eb4ab5f90' => 
    array (
      0 => 'C:/wamp/www/customerswm/templates/forms/login.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '1117257139902226813-78755613',
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