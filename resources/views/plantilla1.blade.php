<!DOCTYPE html>
<html lang="en" >
	

<head >
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Portal Web</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

		
		<script src="{{asset('js/ace-extra.min.js')}}"></script>
		
		
		
		
	
		
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

 
  <link rel="stylesheet" href="{{asset('css/slider-pro.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/jquery.bxslider.min.css')}}">
 
 
 <link rel="stylesheet" type="text/css" href="{{asset('css/slider-pro.min1.css')}}" media="screen"/>
 <link rel="stylesheet" href="{{asset('css/layout.css')}}">
 
 <link href="{{asset('css/calendario.css')}}" type="text/css" rel="stylesheet">
<script src="{{asset('js/calendar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar-es.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar-setup.js')}}" type="text/javascript"></script>

<script type="text/javascript"> 
function calendario()
{
    Calendar.setup({ 
    inputField     :    "fecha_cronograma",     // id del campo de texto 
    ifFormat     :     "%Y-%m-%d",     // formato de la fecha que se escriba en el campo de texto 
    button     :    "lanzador"     // el id del botón que lanzará el calendario 
}); 
}
</script>



<script type="text/javascript" src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.sliderPro.min.js')}}"></script>



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
	

		

		
	<style type="text/css">
<!--
.Estilo5 {
	font-size: 18px;
	font-weight: bold;
	color: #990000;
}
.Estilo6 {font-size: 24px}
.Estilo9 {
	color: #000099;
	font-size: 18;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo10 {font-size: 14px}
-->
    </style>
</head>

	<body class="no-skin" >
					

		<div class="main-container" id="main-container" >
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
					  <div class="page-header">
					  
					  
					  
						  <div class="row">
							  <div class="col-xs-5 col-sm-3 pricing-box" align="center"> 
								 <img width="150" height="150" alt="150x150" src="{{asset('images/fondos/sello colegio.png')}}" />		 
						     </div>
							 
							 <div class="col-xs-1 col-sm-2 pricing-box" align="left"> 
								 <img width="150" height="150" alt="150x150" src="{{asset('images/fondos/logo colegio.png')}}" />		 
						     </div>
								  
								   <div class="col-xs-6 col-sm-3 pricing-box" align="center">
								   <br>
							         <span class="Estilo5"><br>
							         <span class="Estilo6">Unidad Educativa Fiscal									 </span></span>
							         <br>
							         <span class="Estilo9">"General Pintag"		                    </span>
									 
									 
									 </div>
								  
								  
								  
					    </div>
					  </div>
									 
									 
									 
                               
                                
                            
         
		                    <div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse">
										
		  </div>

														
							
							
							
</div><!-- /.page-header -->

						<div class="row" align="center">
							   <div class="col-xs-3 col-sm-1 pricing-box" align="center"> 
								  		
										
						  </div>	
									<div class="col-xs-6 col-sm-9 pricing-box" align="center">						

									<div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse" align="center">
									  <ul class="nav nav-list" >
											
												<a href="#">
													
													<span class="menu-text">  </span>												</a>

												<b class="arrow"></b>											</li>
											
										  <li class="hover Estilo10">
											  <a href="index">
													
											  <span class="menu-text">  Inicio    </span>												</a>    											</li>

										  <li class="hover Estilo10">
											  <a href="nuestro_colegio">
													
											  <span class="menu-text">Nuestro Colegio</span>												</a>    											</li>


                                         <li class="hover Estilo10">
											  <a href="oferta_academica">
													
											  <span class="menu-text">Oferta académica</span>												</a>    											</li>
											

										  <li class="hover Estilo10">
											  <a class="dropdown-toggle" href="comunidad_educativa">
													
												  <span class="menu-text"> Comunidad educativa</span>    												</a>


											  <ul class="submenu">
												
													  <li class="hover">
													
														<a href="comunidad_educativa_docentes">
															
														  Docentes														</a>
  													<li class="hover">
													  <a href="comunidad_educativa_docentes?trabajador=Administrativo">
															
												      Administrativos													</a>    													</li>

												  <li class="hover">
													  <a href="comunidad_educativa_docentes?trabajador=Servicio">
														
													  Servicio													</a>    													</li>
											  </ul>
										  </li>
										   <li class="hover Estilo10">
											  <a href="cronograma1">
													
											  <span class="menu-text">cronograma</span>												</a>    											</li>
												
												
												
												
																					

										   <li class="hover Estilo10">
											  <a href="notas_bloque">
													
											  <span class="menu-text">Natas de Bloque</span>												</a>    											</li>
												
												
												
												
																					
																				   <li class="hover Estilo10">
												<a href="formularios1">
											
											  <span class="menu-text">Formularios</span>												</a>										 											</li>
										</ul>
										<!-- /.nav-list -->
								</div>
								</div>

							        <div class="hidden-sm hidden-xs">
							     					
								
							
								
								
								
							  </div>

								
				  </div>
							
			  </div>
		  </div>
			  
			  
			  <div class="row" align="center">
			
			<div class="col-xs-1 col-sm-11 pricing-box" align="center"> 
			
			
			
			  <p>@yield('content')	  		  </p>
			  </div>
			
			
			</div>
			  
			  
			  
			<div class="row" align="center">
			
			<div class="col-xs-1 col-sm-11 pricing-box" align="center"> 
			
			
			
			  <p>@yield('content')	  		  </p>
			  </div>
			
			
			</div>
			  
	</div>
				
				
				
			
		
			
			
			

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">SÍGUENOS EN:</span>
					  </span>
						<span class="action-buttons" >
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-300"></i>							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-300"></i>							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-300"></i>							</a>						</span>					</div>
								
				</div>
				
				
	</div>
		

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
		

			
	</body>

</html>
