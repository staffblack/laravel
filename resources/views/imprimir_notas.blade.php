 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es"> 
<head>
<title>Página Web </title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
  
  
	<!-- Responsive viewport para dispositivos móviles -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="{{asset('css/slider-pro.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.bxslider.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/slider-pro.min1.css')}}" media="screen"/>
    
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
    <link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
 

  



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
.Estilo1 {color: #990000}
.Estilo10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12; color: #FFFFFF; }
.Estilo15 {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo16 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo20 {font-size: 14px}
.Estilo23 {color: #990000; font-weight: bold; }
.Estilo25 {font-size: 12; }
.Estilo30 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>
</head>  
<body>


<div class="encabezado" id="encabezado" >





<table width="1000" border="0" align="center" cellpadding="0" cellspacing="5" background="images/fondos/fondo.jpg" bgcolor="#D4D4D4">
  <tr  >
    <td width="420" height="180" align="center" valign="top"><div>
      <table width="1000" border="0" cellspacing="3">
          <tr>
            <td valign="top"><span class="Estilo30"><span class="Estilo16">{{$id_nivel.' '. $descripcion_nivel }}</span></span></td>
          </tr>
          <tr>
            <td width="797" valign="top"><table width="935" class="table table-bordered" id="tableMonedas">
              <thead>
                <tr>
                  <th width="181" height="42" rowspan="2" class="text-center Estilo20 Estilo16">Cédula</th>
                  <th width="199" rowspan="2" class="text-center Estilo20 Estilo16">Nombres</th>
                  <th width="197" rowspan="2" class="text-center Estilo20 Estilo16">Apellidos</th>
                  <th width="397" colspan="6" class="text-center Estilo20 Estilo16">{{$nombre_bloque}}</th>
                </tr>
                <tr>
				@foreach($materias as $materia)
				
                  <td class="Estilo16 Estilo20 text-center"><strong>{{$materia->nombre}}</strong></td>
				   @endforeach                  </tr>
              </thead>
              <tbody>              
              @foreach($estudiantes as $estudiante)
              <tr>
    <td  width="181"  class="text-center Estilo20 Estilo16">{{$estudiante->cedula}}</td>
    <td width="199" class="text-center"><span class="text-center Estilo20 Estilo16">{{$estudiante->nombres}}</span></td>
    <td width="197" class="text-center"><span class="text-center Estilo20 Estilo16">{{$estudiante->apellidos}}</span></td>
    @foreach($materias as $materia)
	<td width="397" class="text-center"> 
	
	   @foreach($notas as $nota)
			@if (($materia->id==$nota->id_materia) && ($estudiante->cedula==$nota->cedula_estudiante))
			{{$nota->nota}}
	 		@endif
	 @endforeach	</td>
	@endforeach              </tr>
              @endforeach
  <tfoot>
  </tfoot>
            </table>
            </td>
          </tr>
        </table>
        </div>    </td>
    </tr>
</table>

<p>&nbsp;</p>
</div>
  </p>
<p>&nbsp;</p>
 <p><br>
	   
	   
	   
	      <script src="{{asset('js/jquery.min.js')}}"></script>
	      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
	      <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
	      <script src="{{asset('js/jquery.sliderPro.min.js')}}"></script>
	      <script src="{{asset('js/jquery.fitvids.js')}}"></script>
	      <script src="{{asset('js/app.js')}}"></script>	
		
	   
	   
</p>
		  
</body>
</html>