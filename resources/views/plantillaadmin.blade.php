<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.4/two-menu-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Oct 2015 17:12:17 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title>Portal académico</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
<link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
<script src="{{asset('js/ace-extra.min.js')}}"></script>
	
		
		
	
		
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/slider-pro.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/jquery.bxslider.min.css')}}">
 
 
 <link rel="stylesheet" type="text/css" href="{{asset('css/slider-pro.min1.css')}}" media="screen"/>

 
 <link href="{{asset('css/calendario.css')}}" type="text/css" rel="stylesheet">
<script src="{{asset('js/calendar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar-es.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar-setup.js')}}" type="text/javascript"></script>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.left{
    float: left;
    background:write
}
.right{
    float: right;
    background:writete
}
.center{
    background:write;
    }
.topnav {
  overflow: hidden;
  background-color: #9dd2d6;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#example5' ).sliderPro({
			width: 490,
			height: 300,
			orientation: 'vertical',
			loop: false,
			arrows: true,
			buttons: false,
			thumbnailsPosition: 'right',
			thumbnailPointer: true,
			thumbnailWidth: 290,
			breakpoints: {
				800: {
					thumbnailsPosition: 'bottom',
					thumbnailWidth: 270,
					thumbnailHeight: 100
				},
				500: {
					thumbnailsPosition: 'bottom',
					thumbnailWidth: 120,
					thumbnailHeight: 50
				}
			}
		});
	});
</script>
</head>
    <body class="no-skin">
        <div class="container">
            <div class="header">
                <div class="row">
                    <div class="col-lg-1"  >

                    </div>
                        <div class="col-lg-10">
                            <div class="col-lg-4" >
                                <img src="{{asset('images/fondos/sello.jpg')}}"  width="80%" />

                            </div>
                            <div class="col-lg-6">

                            </div>
                            <div class="col-lg-2">
                                <input placeholder="Buscar..." type="search">
                            </div>


                        </div>
      <div class="col-lg-1"  >
        
      </div>
    </div> 
                
            </div>
        <div class="container-fluid">
       
            <html lang="es">

<head>

    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="node_modules/tether/dist/css/tether.min.css">
    <style>
        body {
            background-color: #ffffff;
        }
        
        #navs {
            background-color: #79b0ce;
            border-radius: 5px;
            display: flex;
            justify-content: center;
        }
        
        .navbar {
            padding: 0;
            display: flex;
            justify-content: space-around;
        }
        
        a {
            color: whitesmoke;
        }
        
        a:hover {
            color: whitesmoke;
        }
        
        .nav-item {
            transition: ease all 0.5s;
            padding-left: 12px;
            padding-right: 12px;
        }
        
        .nav-item:hover {
            transition: ease all 0.5s;
            background-color: #1f668d;
        }
        
        .nav-link {
            padding: 0;
            height: 50px;
            display: flex;
            align-items: center;
            font-size: 10pt;
        }
        
        @media screen and (max-width: 1060px) {
            .nav-link {
                font-size: 7pt;
                ;
            }
        }
        
        @media screen and (max-width: 991px) {
            .nav-link {
                font-size: 11pt;
                ;
            }
        }
        
        @keyframes animacionMenu {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <!--NAVBAR INICIO-->
    <section class="container p-4">
        <nav id="navs" class="navbar navbar-expand-lg bg-blue container mt-4 mb-4">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
        <span class="navbar-toggler-icon">
            <img src="menu-ul.png" width="35px" height="auto" alt="">
        </span>
   
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nuestro_colegio">Nuestro Colegio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes_somos">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item dropdown" id="ofAcademics">
                        <a class="nav-link dropdown-toggle" href="oferta_academica" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Oferta académica
                    </a>
                        <div id="ofAcdemic" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="seccion_matutina">Sección Matutina</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="seccion_vespertina">Sección Vespertina</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" id="comEdu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Comunidad Educativa
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="comEduc">
                            <a class="dropdown-item" href="comunidad_educativa">Directivos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="comunidad_educativa_docentes">Docentes</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="comunidad_educativa_administrativo">Administrativos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="comunidad_educativa_docentes?trabajador=Servicio">Servicio</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cronograma1">Cronograma</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notas_bloque">Notas de bloque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formularios1">Formularios</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--NAVBAR FIN-->

        </div>
        <!--ANIMACION JS-->
        <script src="js/nav.js"></script>
    </section>
  
            <div class="main-container" id="main-container">
		<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>
                            
	<div class="main-content-inner" >
    <div class="page-content" >
                                           
		<div class="ace-settings-container" id="ace-settings-container" >
			<div class="ace-settings-box clearfix" id="ace-settings-box">
				<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" checked/>
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>										</label>
									</div>
				</div><!-- /.pull-left -->

				<div class="pull-left width-50">
					<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" checked />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
					</div>
				</div><!-- /.pull-left -->
			</div><!-- /.ace-settings-box -->
		</div><!-- /.ace-settings-container -->

						

	<div class="row">
						  <div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
											    
			</div>
					
		</div><!-- /.row -->
                                                
	</div><!-- /.page-content -->
</div>
                            
    <div class="container" >
        <div class="container" >
        <div id="sidebar" class="sidebar responsive">
            <p>
	<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>
	
				
    <div class="row" >
        <div class="col-sm-9 widget-container-col" align="center">
            <div class="widget-box transparent">
		<div class="widget-header">
			

		</div>
            </div>
	</div>
    </div>
		</div>
            </div>
	</div>

	
	</div>			
    <script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
    <div>
        <p>@yield('content')</p>
    </div>
    </div>
	</div>
        </div>
        
    </div><!-- /.main-content -->

                    <div class="footer">       
                        <div class="footer-inner">
                            <div class="footer-content">
                                <span class="bigger-120">
							<span class="blue bolder">Colegio Pintag @ Todos los derechos reservados </span>						</span>

								
                            </div>
                        </div>
                        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>			
                        </a>
                    </div><!-- /.main-container -->
                </div>
            </div>

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{asset('js/jquery.min.js')}}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		
		<script src="{{asset('js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="{{asset('js/ace-elements.min.js')}}"></script>
		<script src="{{asset('js/ace.min.js')}}"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			   $('#sidebar2').insertBefore('.page-content');
			   
			   $('.navbar-toggle[data-target="#sidebar2"]').insertAfter('#menu-toggler');
			   
			   
			   $(document).on('settings.ace.two_menu', function(e, event_name, event_val) {
				 if(event_name == 'sidebar_fixed') {
					 if( $('#sidebar').hasClass('sidebar-fixed') ) {
						$('#sidebar2').addClass('sidebar-fixed');
						$('#navbar').addClass('h-navbar');
					 }
					 else {
						$('#sidebar2').removeClass('sidebar-fixed')
						$('#navbar').removeClass('h-navbar');
					 }
				 }
			   }).triggerHandler('settings.ace.two_menu', ['sidebar_fixed' ,$('#sidebar').hasClass('sidebar-fixed')]);
			})
		</script>
		
                  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="node_modules/animejs/lib/anime.min.js"></script>


	 <script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/ace-elements.min.js')}}"></script>
		<script src="{{asset('js/ace.min.js')}}"></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
 		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
 		<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
  		<script src="{{asset('js/jquery.sliderPro.min.js')}}"></script>
 		<script src="{{asset('js/jquery.fitvids.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


		<!-- FlexSlider -->
		<script defer src="{{asset('js/jquery.flexslider-min.js')}}"></script>		
		
		<script>
		$(window).load(function() {
		  $('.flexslider').flexslider({
			animation: "slide",
		  });
		});
		</script>
                <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
      
	</body>

<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.4/two-menu-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Oct 2015 17:12:17 GMT -->
</html>
