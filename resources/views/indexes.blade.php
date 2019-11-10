<style type="text/css">
<!--
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


@extends('plantilla')
<div class="container">
    <div class="row"> 
        
    @section('content')
       <div class="col-lg-12 panel panel-default"> 

    <div class="col-sm-1">
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
        
        <li class=""><a href="comunidad_educativa_docentes?area=MATEMATICAS">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Matemáticas</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=LENGUA Y LITERATURA">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Lengua y Literatura</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=CIENCIAS NATURALES">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Ciencias Naturales</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=EDUCACION FISICA">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Educación Física</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=INGLES">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Inglés</a> </li>
                <li class=""><a href="comunidad_educativa_docentes?area=CULTURA ESTETICA">&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk"></i>&nbsp;Cultura Estética</a> </li>
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
</div>
           <div class="col-sm-1">
                &nbsp;
            </div>
           <div class="col-lg-10">
           
            
            <div class="col-sm-10">
    <?php
    include '../conexion3.php';
    
    if(isset($_REQUEST['accion'])){
        $accion=$_REQUEST['accion'];
    }
    else
    {
        $accion=0;
    }
    ?>
   



                    <?php
    if ($accion==2){//directivo
        
        $cedula=$_REQUEST['id'];
        $registros=mysqli_query($conexion,"select * from docente where cedula='$cedula'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
    

        ?>
                       
     <div id="demo" class="grid-box width66 grid-h"> 
        <table width="100%" class="table">
            <tr>
                <td>
                    <div>
                    <p class="text-center">
                        <br>
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
     }   ////////
    }
    elseif ($accion==3) {//docente//directivo
        
        $cedula=$_REQUEST['id'];
        $registros=mysqli_query($conexion,"select * from docente where cedula='$cedula'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
    

        ?>
            
    <div class="col-sm-8">
      <a href="#demo" class="btn btn-info" data-toggle="collapse">Datos Perfil</a>
      <table width="100%" cellpadding="2" cellspacing="2" class="table table-bordered" id="tableMonedas">
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
    elseif ($accion==4){//Administrativo y servicios
        
        
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
                
   <a href="#demo2" class="btn btn-info" data-toggle="collapse">Datos del Horario Matutino</a>
    <div id="demo2" class="collapse">
        <h2>Matutino</h2>
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
          $hora=mysqli_query($conexion,"select * from hora where modalidad = 'Matutina'") or
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
                    echo utf8_encode($h['nombre']);
                   
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
                    echo utf8_encode($h['nombre']);
                   
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
                    echo utf8_encode($h['nombre']);
                   
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
                   echo utf8_encode($h['nombre']);
                   
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
                    echo utf8_encode($h['nombre']);
                   
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
   
   <a href="#demo3" class="btn btn-info" data-toggle="collapse">Datos del Horario Vespertino</a>
   <div id="demo3" class="collapse">
       <h2>Vespertino</h2>
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
          $hora=mysqli_query($conexion,"select * from hora where modalidad = 'Vespertina'") or
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
                    echo utf8_encode($h['nombre']);
                   
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
                    echo utf8_encode($h['nombre']);
                   
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
                    echo utf8_encode($h['nombre']);
                   
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
                   echo utf8_encode($h['nombre']);
                   
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
                    echo utf8_encode($h['nombre']);
                   
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
        @endsection
        


		<script src="{{asset('js/jquery.min.js')}}"></script>


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
</div>