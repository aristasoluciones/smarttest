<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Business Portfolio Parallax HTML5 Template">
        <meta name="author" content="XpeedStudio">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Document Title -->
        <title>A1</title>
        <meta property="og:title" content="Arista Solucines" >

        <!-- Favicon and Touch Icons -->
        <link rel="shortcut icon" href="{$WEB_ROOT}/assets_a1/img/favicon.ico">
        <link rel="apple-touch-icon" href="{$WEB_ROOT}/assets_a1/img/favicon-36x36.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{$WEB_ROOT}/assets_a1/img/favicon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{$WEB_ROOT}/assets_a1/img/favicon-114x114.png">
        <meta property="og:image" content="assets/img/favicon-220x220.png" >

        <!-- StyleSheets -->
        <!-- dependencies | 3rd party components -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:100,400,300,500,700%7CDynalight' rel='stylesheet' type='text/css'>

        <link href="{$WEB_ROOT}/assets_a1/css/bootstrap.css" rel="stylesheet">
        <link href="{$WEB_ROOT}/assets_a1/css/animate.min.css" rel="stylesheet" type='text/css' media="screen">
        <link href="{$WEB_ROOT}/assets_a1/css/hover-min.css" rel="stylesheet" type='text/css' media="screen">
        <link href="{$WEB_ROOT}/assets_a1/css/magnific-popup.css" rel="stylesheet" type='text/css' media="screen">
        <link href="{$WEB_ROOT}/assets_a1/css/font-awesome.min.css" rel="stylesheet" type='text/css' media="screen">

        <!-- plugin | necessary plugins -->
        <link href="{$WEB_ROOT}/assets_a1/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">

        <!-- core | template style -->
        <link href="{$WEB_ROOT}/assets_a1/css/tersus-custom.css" rel="stylesheet" media="screen">
        <link href="{$WEB_ROOT}/assets_a1/css/tersus-responsive.css" rel="stylesheet" media="screen">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->	

    </head>

    <body class="tersus-style-01">

       
        <!-- .preloader //end -->


        <!-- NAVIGATION
        ==================================================================== !-->
       
        <!-- .tersus-navigation-1 //end -->


        <!-- INTRO
        ==================================================================== !-->
      
        <!-- tersus block intro-1 //end -->


        
        <!-- tersus block about-1 //end -->


       
        <!-- tersus block about-2 //end -->


        <!-- tersus block about-3 //begin -->
        <div class="section spacing-none overlay tersus-block-about-3">
            <div class="background" data-stellar-background-ratio="0.5"></div>
            <div class="bind-narrow bind-narrow-xs">
                <div class="container">
                    <div class="caption-container">
                      <img src="{$WEB_ROOT}/assets_a1/img/style-01/about-img.jpg" alt="tersus" style="height:300px"/>
                        <h2 class=" wow fadeIn">Bienvenido</h2>
                    </div>
                    <div class="text-container relative text-justify wow fadeInUp">
						
					  <div id="div_mensaje" style="display:none">
						<font size="8">
							Gracias por Participar
							<button type="submit" class="btn btn-highlight btn-block" onClick="continuar()">CONTINUAR</button>
						</font>
					  </div>
					
					  <div id="div_encuesta">	
						  <form id="frmGral">
						  <input type="hidden" name="type" id="type" value="sendData">
						  {foreach from=$registros item=item key=key}   
							<div class="section spacing-sm tersus-block-featured-2 pattern-dot" style="height:350px">
								<div class="parallax background" data-stellar-background-ratio="0.5"></div>
								<div class="container">
									<span class="h1 counter wow bounceInDown">{$key+1}</span>
									<p>{$item.pregunta}</p>
								</div>
								
								{if $item.tiporespuesta eq "punto"}
									Rango de {$item.rango}<br>
									<input type="text" name="answer_{$item.preguntaId}" id="answer_{$item.preguntaId}" >
								{else if $item.tiporespuesta eq "opcional"}
									{foreach from=$item.opciones item=item2 key=key}
										<input type="radio" name="answer_{$item.preguntaId}" value="{$item2|upper}" style="width:50px;height:50px"><font size="5" style="size:90px">{$item2|upper}</font>
									{/foreach}
								{else}
									<textarea style="width:300px; height:100px; color:black" name="answer_{$item.preguntaId}"></textarea>
								{/if}
							</div>
							<br>
							<br>
							{/foreach}
							</form>
							<br>
							<br>
							<br>
						<button type="submit" class="btn btn-highlight btn-block" onClick="sendData()">ENVIAR ENCUESTA</button>
						</div>
						<!---->
						
						 <!--<div class="parallax background" data-stellar-background-ratio="0.5" style="background-image:url('{$WEB_ROOT}/assets_a1/img/style-01/div-img-02.jpg');"></div>

								<div class="container">
									<div id="testimonial-1" class="carousel carousel-fade slide" data-ride="carousel">
										<div class="carousel-inner" role="listbox">
											<div class="item active">
											<span class="h1 counter wow bounceInDown">1</span>
												<p>The greatest way to live with honor in this world is to be what we pretend to be.</p>
												<div class="title">Socrates</div>
											</div>
										  
										</div>
									</div>
								</div>
							</div>-->
						
					   <!---->
                  
                </div>
            </div>
        </div>

 

        <!-- Contact
        ==================================================================== !-->
        <!-- tersus block contact-1 //begin -->
        <!--<div class="section spacing-default tersus-block-contact-1 bg-dark pattern-stripped" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                      
                        <div class="section-title  text-center">
                            <h2>Contact Us</h2>
                        </div>
                       

                        <div class="pull-left company-name">
                            Tersus Design Agency
                        </div>

                        <div class="contact-details">
                            <p>F6, 12 Floor,<br/>
                                Eleanor Building, Street 8/15C,<br/>
                                Bruisewick, Hallway, 655210 The land, Earth.</p>
                            <br/>

                            <p>Tel : +1-202-555-0144 / 202-555-0144<br/>
                                Email : tersusinfo@tersus.com</p>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <form action="assets/plugins/contactform/contact.php" method="POST" class="form-ajax form-light">
                            <div class="form-group">
                                <label>Name</label>
                                <input required name= "name" type="text" class="form-control" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input required name= "email" type="email" class="form-control" placeholder="Enter Email">
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea required name= "message" class="form-control" rows="5" placeholder="Enter Your Message"></textarea>
                            </div>

                            <button type="submit" class="btn btn-highlight btn-block">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>-->
        <!-- tersus block contact-1 //end -->


        <!-- google map //begin -->
        <!--<div id="map" class="google-map"></div>-->
        <!-- google map //end -->


        <!-- Footer
        ==================================================================== !-->
        <!-- footer //begin -->
        <div id="footer" class="footer bg-dark footer-style-01">
            <div class="footer-before">
                <a href="#top" class="scroll-to btn-scroll-top">
                    <img src="{$WEB_ROOT}/assets_a1/img/arrow-up.png" alt="tersus" />
                </a>
            </div>
            <div class="spacing-sm social-icons-style-1">
                <div class="container">
                    <!--<ul class="social-icons wow fadeInUp">
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="gplus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="behancey" href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="github" href="#"><i class="fa fa-github"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>-->
                </div>
            </div>
            <div class="footer-text">
                <div class="container">
                    <p>Arista Soluciones <a href="#"></a>2017.</p>
                </div>
            </div>

        </div>
        <!-- footer //end -->

        <div id="fixer"></div>


        <!-- JavaScript -->
        <!-- config | template seetings -->
        <script type='text/javascript'>
            var tersusConfig = {
                mapLat: '23.70992',
                mapLng: '90.40714'
            };


        </script>
        <!-- Custom Modernizr for checking css3 compablity -->
        <script src="{$WEB_ROOT}/assets_a1/js/modernizr.custom.js"></script>

        <!-- jQuery library -->
        <script src="{$WEB_ROOT}/assets_a1/js/jquery-1.11.3.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/jquery-migrate.min.js"></script>

        <!-- dependencies | 3rd party components -->
        <script src="{$WEB_ROOT}/assets_a1/js/bootstrap.min.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/smoothscroll.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/waypoints.min.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/wow.min.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/counterup.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/jquery.stellar.min.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/jquery.magnific-popup.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/isotope.pkgd.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsMtPkr4qxauBA7ci39C83IGCW7XPxaYY"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/gmaps.js"></script>

        <!-- plugin | necessary plugins -->
        <script src="{$WEB_ROOT}/assets_a1/plugins/fancybox/jquery.fancybox.pack.js"></script>

        <!-- core | template script -->
        <script src="{$WEB_ROOT}/assets_a1/js/tersus-custom.js"></script>
        <script src="{$WEB_ROOT}/assets_a1/js/styles/style-01.js"></script><!--
        <script src="{$WEB_ROOT}/js/functions.js"></script>
        <script src="{$WEB_ROOT}/js/a1.js"></script>
        <script src="{$WEB_ROOT}/templates/3-default-js.tpl"></script>-->
		{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
		

    </body>
</html>