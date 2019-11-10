<style type="text/css">
<!--
.Estilo2 {color: #FF0000}
.Estilo3 {color: #000000}
.Estilo4 {font-size: 12px}
.Estilo5 {font-size: 12}
.Estilo7 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo8 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->


</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <div class="row">
        @extends('plantilla')
        @section('content')
            <div class="col-sm-12 panel panel-default">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <span class="glyphicon glyphicon-user">
                                                    
                                                </span>
                                                Login
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div align="center">
                                                <form class="form-search" action="notas_bloque" method="post" enctype="multipart/form-data" id="save_post">
                                                    {{ csrf_field() }}
                                <div align="center" class="Estilo16 Estilo5">
                                    <strong>Iniciar Sesión </strong>
                                </div>
                                <br>
                                <span class="Estilo3 Estilo30 Estilo5">
                                    <strong>
                                        Usuario
                                    </strong>
                                </span>
                                <br>
                                    <input name="login" type="text" id="login" value="{{ old('login') }}" >
                                    <br>
                                    <span class="Estilo3 Estilo30 Estilo5"><strong>Password</strong></span>
                                    <br>
                                    <input name="password" type="text" id="password" value="{{ old('password') }}">
                                  <br>
                                    <span class="Estilo3 Estilo30 Estilo5"><strong>Perfil</strong></span>
                                 <br>
                                    <span class="Estilo5">
                                      <select name="perfil" id="perfil">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Docente">Docente</option>
                                        <option value="Estudiante">Estudiante</option>
                                        <option value="Secretaria">Secretaria</option>
                                      </select>
                                    </span>
                                    <br>
                                      <label><span class="Estilo2">{{ $mensaje }}</span>
                                      <input type="hidden" name="hiddenField">
                                      </label>
                                    </span>
                                    <div align="center">
                                        <input name="acceder" type="submit" id="acceder" value="Acceder">
                                    </div><br>
                                    <div align="center">
                                        <input name="cancelar" type="submit" id="cancelar" value="Cancelar">
                                    </div>
                                  <div align="justify" class="Estilo37 Estilo4">Nota: Si ingresa por primera vez el password va ser el mismo que su Logín. </div></td>

                              </form>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

                                        <span class="glyphicon glyphicon-th">
                                    </span>   Educacion Basica General</a>
                                </h6>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <?php
                                        include '../conexion3.php';
                                        $registros=mysqli_query($conexion,"SELECT * FROM nivel WHERE oferta='Educacion Basica General'") or
                                              die("Problemas en el select:".mysqli_error($conexion));

                                            while ($reg=mysqli_fetch_array($registros))
                                            {
                                                
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="notas_bloque?nivel=<?php echo $reg['id'];?>&modalidad=<?php echo $reg['modalidad'];?>&curso=<?php echo $reg['curso'];?>&paralelo=<?php echo $reg['paralelo'];?>" style="color: #0069d9"><?php echo utf8_encode('('.$reg['curso'].' '.$reg['paralelo'].')')?></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title" >
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                        </span>Bachillerato General Unificado</a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <?php
                                        include '../conexion3.php';
                                        $registros=mysqli_query($conexion,"SELECT * FROM nivel WHERE oferta='Bachillerato General Unificado'") or
                                              die("Problemas en el select:".mysqli_error($conexion));

                                            while ($reg=mysqli_fetch_array($registros))
                                            {
                                                
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="notas_bloque?nivel=<?php echo $reg['id'];?>&modalidad=<?php echo $reg['modalidad'];?>&curso=<?php echo $reg['curso'];?>&paralelo=<?php echo $reg['paralelo'];?>" style="color: #0069d9"><?php echo utf8_encode('('.$reg['curso'].' '.$reg['paralelo'].')')?></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                                    </span>Bachillerato Internacional</a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <?php
                                        include '../conexion3.php';
                                        $registros=mysqli_query($conexion,"SELECT * FROM nivel WHERE oferta='Bachillerato Internacional'") or
                                              die("Problemas en el select:".mysqli_error($conexion));

                                            while ($reg=mysqli_fetch_array($registros))
                                            {
                                                
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="notas_bloque?nivel=<?php echo $reg['id'];?>&modalidad=<?php echo $reg['modalidad'];?>&curso=<?php echo $reg['curso'];?>&paralelo=<?php echo $reg['paralelo'];?>" style="color: #0056b3"><?php echo utf8_encode('('.$reg['curso'].' '.$reg['paralelo'].')')?></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="well">
                        <!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.4/two-menu-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Oct 2015 17:12:17 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
		<title>Portal académico</title>

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
.Estilo1 {font-weight: bold}
.body {
  color: #ffffff;
}
.Estilo4 {
	color: #007bff;
	font-weight: bold;
}
-->
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
        <div class="container-fluid" >
            
        
        <div class="row">
            
            
            <div id="navbar" class="navbar navbar-default    navbar-collapse" style="background:#FFFFFF">
		<script type="text/javascript">
                    try{ace.settings.check('navbar' , 'fixed')}catch(e){}
		</script>
        <div class="navbar-container" id="navbar-container" align="center">
		<div class="navbar-header pull-left" align="center">
                    <a href="#" class="navbar-brand">							
                        <img src="{{asset('images/fondos/sello.jpg')}}"  width="30%" /> 
                    </a>
                </div>
                <div class="col-sm-7 widget-container-col" align="center">
                </div>
                <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
                    
                </div>
        </div><!-- /.navbar-container -->
		</div>
<div class="topnav" id="myTopnav">
  
    <button data-target="#sidebar2" data-toggle="collapse" type="button" class="pull-left navbar-toggle collapsed">
										<span class="sr-only">Toggle sidebar</span>

										<i class="fa fa-bars"></i>									</button>

									<div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse">
										<ul class="nav nav-list">
											<li class="hover">
												<a href="index">
													
													<span class="menu-text"> Inicio </span>												</a>

												<b class="arrow"></b>											</li>

											<li class="hover">
												<a href="#">
											
													<span class="menu-text">Nuestro colegio</span>												</a>

												<b class="arrow"></b>										
												
												
												
												<ul class="submenu">
													<li class="hover">
													
													
													
														

														<b class="arrow"></b>													</li>

												<li class="hover">
														<a href="quienes_somos">
															<i class="menu-icon fa fa-caret-right"></i>
															Quienes somos												</a>

														<b class="arrow"></b>													</li>


												
												</ul>
												
												
												
										  </li>
													
													
													
													
													<li class="hover">
												<a href="#">
											
													<span class="menu-text">Oferta académica</span>												</a>

												<b class="arrow"></b>										
												
												
												
												<ul class="submenu">
													<li class="hover">
														<a href="seccion_matutina">
															<i class="menu-icon fa fa-caret-right"></i>
															Sección Matutina															</a>

														<b class="arrow"></b>													</li>

												<li class="hover">
														<a href="seccion_vespertina">
															<i class="menu-icon fa fa-caret-right"></i>
															Sección Vespertina												</a>

														<b class="arrow"></b>													</li>

													
												
												</ul>
												
												
												
													</li>

										<li class="hover">
												<a href="#">
											
													<span class="menu-text">Comunidad educativa</span>												</a>

												<b class="arrow"></b>										
												
												
												
												<ul class="submenu">
												
												
												<li class="hover">
														<a href="comunidad_educativa">
															<i class="menu-icon fa fa-caret-right"></i>
															Directivos													</a>

														<b class="arrow"></b>													</li>
												
												
													<li class="hover">
														<a href="comunidad_educativa_docentes">
															<i class="menu-icon fa fa-caret-right"></i>
															Docentes													</a>

														<b class="arrow"></b>													</li>

												<li class="hover">
														<a href="comunidad_educativa_docentes?trabajador=Administrativo">
															<i class="menu-icon fa fa-caret-right"></i>
															Administrativos													</a>

														<b class="arrow"></b>													</li>

													<li class="hover">
														<a href="comunidad_educativa_docentes?trabajador=Servicio">
															<i class="menu-icon fa fa-caret-right"></i>
															Servicio												</a>

														<b class="arrow"></b>													</li>
												
												</ul>
												
												
												
										  </li>


											
                                                    <li class="hover">
							<a href="cronograma1">
                                                            <span class="menu-text">Cronograma</span>
                                                        </a>
                                                        <b class="arrow"></b>				
                                                    </li>
                                                    <li class="hover">
							<a href="notas_bloque">
							<span class="menu-text">Notas de bloque</span>											

							<b class="arrow"></b>
                                                        </a>
                                                    </li>
                                                    <li class="hover">
                                                        <a href="formularios1">
								<span class="menu-text">Formularios</span>												
							</a>		
                                                    </li>
						</ul>												
					</div><!-- .sidebar -->
				
  
</div>
            
            <div class="main-container" id="main-container">
                
		<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>
<div class="main-content">
    <div class="main-content-inner">
        
        <div class="page-content">
                                           
		<div class="ace-settings-container" id="ace-settings-container">
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
		<div class="container">
                    
                        <div class="col-sm-3">
                            <ul class="nav nav-list">
					

					<li class="active open">
					
							<a href="#" class="dropdown-toggle">
							
							<span class="menu-text"> Comunidad educativa</span>

							<b class="arrow fa fa-angle-down"></b>						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						
						<li class="">
								<a href="comunidad_educativa">
									<i class="menu-icon fa fa-caret-right"></i>
									Directivos							</a>

								<b class="arrow"></b>
                                                </li>
	<li class="">
            <a href="comunidad_educativa_docentes">
		<i class="menu-icon fa fa-caret-right"></i>
                Docentes<b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>							
        </li>
        
        <li class=""><a href="comunidad_educativa_docentes?area=MATEMÁTICAS">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Matemáticas</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=LENGUA Y LITERATURA">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Lengua y Literatura</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=CIENCIAS NATURALES">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Ciencias Naturales</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=EDUCACIÓN FÍSICA">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Educación Física</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=INGLÉS">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Inglés</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=CULTURA ESTÉTICA">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Cultura Estética</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=CIENCIAS SOCIALES">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Ciencias Sociales</a></li>
            </a>							
       

<li class="">
								<a href="comunidad_educativa_docentes?trabajador=Administrativo">
									<i class="menu-icon fa fa-caret-right"></i>
									Administrativos						</a>

								<b class="arrow"></b>							</li>

							<li class="">
								<a href="comunidad_educativa_docentes?trabajador=Servicio">
									<i class="menu-icon fa fa-caret-right"></i>
									Servicio							</a>

								<b class="arrow"></b>							</li>
						</ul>
					</li>



</ul>
                            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>				
</div>
                        </div>
                    <div class="col-lg-9">
                    <div class="col-sm-12">
                    <?php
    include '../conexion3.php';
    
    if(isset($_REQUEST['accion'])){
        $accion=$_REQUEST['accion'];
    }
    else
    {
        $accion=0;
    }
    
    if ($accion==1){//directivo
        
        $cedula=$_REQUEST['id'];
        $registros=mysqli_query($conexion,"select * from docente where cedula='$cedula'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
    

        ?>
        
                       <a href="#demo" class="btn btn-info" data-toggle="collapse">Datos Perfil</a>
                       <div id="demo" class="grid-box width66 grid-h"> 
            <table width="200" cellpadding="2" cellspacing="2" class="table table-bordered" id="tableMonedas">
                    <thead>
                      <tr>
                        <th colspan="2" align="center" class="Estilo44"><a href="resultado?id=&accion=1"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <tr>
                        <td width="91" valign="top" class="Estilo45">
                            <div>
            <p class="text-center"><br>
              <img src="data:image/gif;base64,<?php echo base64_encode($reg['foto']);?>" width="20%" title="Título de la imágen" />
              <br><br>
            <label style="color:black">Nombre:</label>
            <label><?php echo utf8_encode($reg['nombres'].' '.$reg['apellidos']);?></label>
            <br>
            <label style="color:black">Email:</label>
            <label><?php echo utf8_encode($reg['email']);?></label>
            <br>
            <label style="color:black">Telefono:</label>
            <label><?php echo utf8_encode($reg['telefono']);?></label>
            <br>
            <label style="color:black">Cargo:</label>
            <label><?php echo utf8_encode($reg['cargo']);?></label>
            <br>
            <label style="color:black">Area:</label>
            <label><?php echo utf8_encode($reg['area']);?></label>
            </p>
      </div>
                        </td>
                    </table>
      
            <?php 
     }   
    }
    elseif ($accion==2) {//docente//directivo
        
        $cedula=$_REQUEST['id'];
        $registros=mysqli_query($conexion,"select * from docente where cedula='$cedula'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
    

        ?>
            
    <div class="col-sm-8">
                <a href="#demo" class="btn btn-info" data-toggle="collapse">Datos Perfil</a>
      <table width="200" cellpadding="2" cellspacing="2" class="table table-bordered" id="tableMonedas">
                    <thead>
                      <tr>
                        <th colspan="2" align="center" class="Estilo44"><a href="resultado?id=&accion=1"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <tr>
                        <td>
                            <div>
          <p class="text-center"><br>
              <img src="data:image/gif;base64,<?php echo base64_encode($reg['foto']);?>" width="20%" title="Título de la imágen" />
              <br><br>
          <label style="color:black">Nombre:</label>
          <label><?php echo utf8_encode($reg['nombres'].' '.$reg['apellidos']);?></label>
          <br>
          <label style="color:black">Email:</label>
          <label><?php echo utf8_encode($reg['email']);?></label>
          <br>
          <label style="color:black">Telefono:</label>
          <label><?php echo utf8_encode($reg['telefono']);?></label>
          <br>
          <label style="color:black">Cargo:</label>
          <label><?php echo utf8_encode($reg['cargo']);?></label>
          <br>
          <label style="color:black">Area:</label>
          <label><?php echo utf8_encode($reg['area']);?></label>
          </p>
      </div>
                            
                        </td>    
                    </tr>
      </table>
      
            <?php 
     }   
    }
    elseif ($accion==3){//Administrativo y servicios
        
        
        $cedula=$_REQUEST['id'];
        $registros=mysqli_query($conexion,"select * from trabajador where cedula='$cedula'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
    

        ?>
                <div class="col-lg-12">
      <table class="table table-bordered" id="tableMonedas">
                    <thead>
                      <tr>
                        <th colspan="2" align="center" class="Estilo44"><a href="resultado?id=&accion=1"></a></th>
                      </tr>
                    </thead>
                    
                    <tr>
                        <td>
                            <div>
          <p class="text-center"><br>
              <img src="data:image/gif;base64,<?php echo base64_encode($reg['foto']);?>" width="20%" title="Título de la imágen" />
              <br><br>
          <label style="color:black">Nombre:</label>
          <label><?php echo utf8_encode($reg['nombres'].' '.$reg['apellidos']);?></label>
          <br>
          <label style="color:black">Email:</label>
          <label><?php echo utf8_encode($reg['email']);?></label>
          <br>
          <label style="color:black">Telefono:</label>
          <label><?php echo utf8_encode($reg['telefono']);?></label>
          <br>
          <label style="color:black">Cargo:</label>
          <label><?php echo utf8_encode($reg['cargo']);?></label>
          <br>
          <label style="color:black">Area:</label>
          <label><?php echo utf8_encode($reg['funcion']);?></label>
          </p>
      </div>
                            
                        </td>    
                    </tr>
      </table>
                </div>
      
            <?php 
     }   
    
        
    
    }
    else{//servicios

    }
    
    ?>
  </div>
</div>
                       

                        <a href="#demo2" class="btn btn-info" data-toggle="collapse">Datos del Horario</a>
                            <div id="demo2" class="collapse">
    <table class="table">
    <thead>
      <tr>
        <th WIDTH="25%"></th>
        <th WIDTH="15%">Lunes</th>
        <th WIDTH="15%">Martes</th>
        <th WIDTH="15%">Miercoles</th>
        <th WIDTH="15%">Jueves</th>
        <th WIDTH="15%">Viernes</th>
      </tr>
    </thead>
    <tbody>
      
          <?php
          $hora=mysqli_query($conexion,"select * from hora") or
   die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($hora))
{
    

          ?>
        <tr >
        <td class="success"><?php echo $reg['hora_inicio'].' - '.$reg['hora_fin'];?></td>
        
        <td class="active">
        <?php
        $horaid=$reg['id'];
        $dia=1;
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$_REQUEST[id]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo $h['nombre'];
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        <td class="warning">
            
            <?php
        $horaid=$reg['id'];
        $dia=2;
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$_REQUEST[id]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo $h['nombre'];
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        <td class="active">
            <?php
        $horaid=$reg['id'];
        $dia=3;
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$_REQUEST[id]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo $h['nombre'];
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        <td class="warning">
            <?php
        $horaid=$reg['id'];
        $dia=4;
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$_REQUEST[id]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo $h['nombre'];
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        <td class="active">
            <?php
        $horaid=$reg['id'];
        $dia=5;
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$_REQUEST[id]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo $h['nombre'];
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        
       
        </tr>
        <?php
}          
          ?>
            
    </tbody>
  </table>
                            </div>
                        
                    </div>
                    </div>
                    
  
       
           

    </div>        
          
    </div>
    </div><!-- /.main-content -->

			<!-- /.main-container -->
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
                    </div>
                </div>
            <div class="footer">
                            
    <div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Colegio Pintag @ Todos los derechos reservados </span>						</span>

								
				</div>
    </div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>			</a></div>
            </div>
        </div> 
    </body>

<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.4/two-menu-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Oct 2015 17:12:17 GMT -->
</html>

                    </div>
                </div>
            </div>
</div>
        </div>
    </div>
</div>  
 @endsection