<div class="header navbar navbar-inverse navbar-fixed-top" >
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner" >
        <div class="container-fluid" >
            <!-- BEGIN LOGO -->
            <!--<a class="brand" href="{$WEB_ROOT}">
            	<img src="{$WEB_ROOT}/images/logole.jpg" border="0" width="150" height="150" />
            </a>-->
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <img src="{$WEB_ROOT}/assets/img/menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER --> 
			
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">                
                               
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img alt="" src="{$WEB_ROOT}/assets/img/avatar_small.png" />
                    <span class="username">{$Usr.nombre}</span>
                    <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">                        
                        <li><a href="{$WEB_ROOT}/logout"><i class="icon-key"></i> Salir</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>