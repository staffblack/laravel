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
.Estilo29 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
-->
</style>
</head>  
<body>
<h4>Creear evento</h4>
<form action="/portal/public/notas_bloque" method="post" enctype="multipart/form-data" id="save_post">
  {{ csrf_field() }}
  <div>
      <p>Id evento</p>
    <input type="text" id="id" name="id" value="{{ old('id') }}">
    </div>
  <div>
      <p>Nombre</p>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
    </div>
  <div>
      <p>Descripcion</p>
    <input type="text" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
    </div>
  <div>
      <p>Fecha</p>
    <input type="text" id="fecha" name="fecha" value="{{ old('fecha') }}" readonly="true">
      <img src="/portal/public/images/calendario.png" name="lanzador" width="16" height="16" border="0" id="lanzador" title="fecha" onclick="calendario()" />
      <p>Foto</p>
    <label>
      <input type="file" id="foto" name="foto" value="{{ old('foto') }}">
      </label>
    </div>
  <div>
      <input name="submit" type="submit" value="Guardar">
    </div>
</form>
<p>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
  <script src="{{asset('js/jquery.sliderPro.min.js')}}"></script>
  <script src="{{asset('js/jquery.fitvids.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>	
</p>
		  
</body>
</html>