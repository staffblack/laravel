 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es"> 
<head>
<title>Página UECC </title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
  
  
	<!-- Responsive viewport para dispositivos móviles -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>  


<link href="{{asset('css/calendario.css')}}" type="text/css" rel="stylesheet">
<script src="{{asset('js/calendar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar-es.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar-setup.js')}}" type="text/javascript"></script>

<script type="text/javascript"> 
function calendario()
{
    Calendar.setup({ 
    inputField     :    "fecha",     // id del campo de texto 
    ifFormat     :     "%Y-%m-%d",     // formato de la fecha que se escriba en el campo de texto 
    button     :    "lanzador"     // el id del botón que lanzará el calendario 
}); 
}
</script>


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
    <input type="submit" value="Guardar">
  </div>
</form>


</body>
</html>