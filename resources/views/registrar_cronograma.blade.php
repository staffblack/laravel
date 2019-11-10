<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es"><head>
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
.Estilo31 {color: #FF0000}
-->
</style>
</head>  
<body>


<div class="encabezado" id="encabezado" >





<table width="1000" border="0" align="center" cellpadding="0" cellspacing="5" background="images/fondos/fondo.jpg" bgcolor="#D4D4D4">
  <tr>
    <td width="210" height="88" align="center" valign="top"><p><img src="images/fondos/logo colegio.png" alt="Fondo de la pagina" width="134" height="140" ><br>
    </p>      </td>
    <td width="210" align="center" valign="top"><img src="images/fondos/sello colegio.png" alt="Fondo de la pagina" width="146" height="150"></td>
    <td colspan="2" rowspan="2" valign="top"><div class="slider-pro" id="slider_pro">
      <div class="sp-slides">
        <div class="sp-slide">
          <div align="center"><img   src="images/principal/pic1.jpg" alt="Colegio"> </div>
        </div>
        <div class="sp-slide">
          <div align="center"><img src="images/principal/pic2.jpg" alt="Aulas"> </div>
        </div>
        <div class="sp-slide">
          <div align="center"><img  src="images/principal/pic3.jpg" alt="Profesores"></div>
        </div>
        <div class="sp-slide">
          <div align="center"><img  src="images/principal/pic4.jpg" alt="Abanderados"></div>
        </div>
        <div class="sp-slide">
          <div align="center"><img  src="images/principal/pic5.jpg" alt="Monumento"><br>
    </div>
        </div>
      </div>
    </div>      </td>
    </tr>
  <tr>
    <td height="19" colspan="2" align="center" valign="top"><span class="Estilo16"><em><span class="Estilo23">Unidad Educativa Fiscal </span><br>
          <strong>&quot;General Pintag&quot;</strong></em></span></td>
    </tr>
  <tr  >
    <td colspan="4">	</td>
  </tr>
  <tr  >
    <td height="100" colspan="4" valign="top"><ul id="nav">
        
            <li><a href="eventos">Inicio</a></li>
            <li><a href="nuestro_colegio">Nuestro colegio</a></li>
            <li><a href="oferta_academica">Oferta académica</a></li>
			<li><a href="comunidad_educativa">Comunidad educativa</a></li>
            <li><a href="cronograma1">Cronograma</a></li>
            <li><a href="notas_bloque">Notas de Bloque</a></li>
			 <li><a href="formularios">Formularios</a></li>
    </ul>	</td>
  </tr>
  <tr  >
    <td height="180" colspan="4" align="center" valign="top"><div>
      <table width="1000" border="0">
          <tr>
            <td width="212" rowspan="2" align="left" valign="top" ><table width="150" border="0" cellspacing="3">
              <tr>
                <td width="252" ><span class="Estilo25"> @if (Session::has('login'))
                  {{ session('login')}}
                  @else
                  {{route('notas_bloque')}}
                  @endif </span></td>
              </tr>
              <tr>
                <td ><span class="Estilo25">{{ session('nombres_usuario')}} {{ session('apellidos_usuario')}} </span></td>
              </tr>
              <tr>
                <td><span class="Estilo25">{{ session('perfil')}}</span></td>
              </tr>
            </table>
              <table width="121" bgcolor="#EFEFEF">
                <tr>
                  <td width="118">    <ul class="nav nav-list" >
					<li class=""> 
                        <a href="usuarios">Usuarios</a></li>
                     <li class=""> 
					  <a href="docentes">Docentes</a></li>
					  <li class=""> 
					  <a href="estudiantes">Estudiantes</a></li>
                      <li class=""> <a href="nivel_estudiantes">Nivel Estudiantes</a></li>
                      <li class=""> 
                        <a href="horarios">Horarios</a></li>
                      <li class=""> 
                        <a href="cronograma"> Cronograma </a>	</li>
						<li class=""> 
                        <a href="formularios"> Formularios</a></li>
						<li class=""> 
                        <a href="notas_bloque"> Salir</a></li>
                    </ul>	</td>
                </tr>
              </table></td>
            <td class="Estilo30"><span class="Estilo30"><a href="mes">Cronograma</a>	 &gt; <a href="mes">Día</a> &gt; </span><span class="Estilo16">{{$id_mes.' '. $nombre_mes }}</span></td>
          </tr>
          <tr>
            <td width="778"><form name="form1" method="post" action="/portal/public/cronograma">
			{{ csrf_field() }}
              <table class="table table-bordered" id="tableMonedas">
                <thead>
                  <tr>
                    <th class="text-center Estilo20 Estilo16"><input type="hidden" name="id_mes" id="id_mes" value="{{$id_mes}}" >
                      <input type="hidden" name="nombre_mes" id="nombre_mes" value="{{$nombre_mes}}" >
                    <th class="text-center Estilo20 Estilo16"><div align="left" class="Estilo31">aaaa-mm-aa</div></th>
                    </tr>
                  <tr>
                    <th class="text-center Estilo20 Estilo16"><div align="left">Fecha</div></th>
                    <th class="text-center Estilo20 Estilo16"><label>
                      <div align="left">
                        <input type="text" id="fecha" name="fecha" value="" readonly="true">
                        <img src="/portal/public/images/calendario.png" name="lanzador" width="16" height="16" border="0" id="lanzador" title="fecha" onclick="calendario()" /></div>
                    </label></th>
                  </tr>
                  <tr>
                    <th width="89" class="text-center Estilo20 Estilo16">Hora</th>
                    <th width="393" class="text-center Estilo20 Estilo16"><div align="left">
                      <select name="select">
                        <option value="00:00">00:00</option>
                        <option value="00:30">00:30</option>
                        <option value="01:00">01:00</option>
                        <option value="01:30">01:30</option>
                        <option value="02:00">02:00</option>
                        <option value="02:30">02:30</option>
                        <option value="03:00">03:00</option>
                        <option value="03:30">03:30</option>
                        <option value="04:00">04:00</option>
                        <option value="04:30">04:30</option>
                        <option value="05:00">05:00</option>
                        <option value="05:30">05:30</option>
                        <option value="06:00">06:00</option>
                        <option value="06:30">06:30</option>
                        <option value="07:00">07:00</option>
                        <option value="07:30">07:30</option>
                        <option value="08:00">08:00</option>
                        <option value="08:30">08:30</option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                        <option value="19:00">19:00</option>
                        <option value="19:30">19:30</option>
                        <option value="20:00">20:00</option>
                        <option value="20:30">20:30</option>
                        <option value="21:00">21:00</option>
                        <option value="21:30">21:30</option>
                        <option value="22:00">22:00</option>
                        <option value="22:30">22:30</option>
                        <option value="23:00">23:00</option>
                        <option value="23:30">23:30</option>
                      </select>
                    </div></th>
                    </tr>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><strong>Descripción</strong></td>
                    <td class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="descripcion" type="text" id="descripcion" size="60">
                        </label>
                    </div></td>
                  </tr>
                </thead>
                <tbody>                
               
  <tr>
    <td class="text-center Estilo20 Estilo16"><strong>Responsable</strong></td>
    <td class="text-center Estilo20 Estilo16"><div align="left">
      <label>
      <input name="responsable" type="text" id="responsable" size="50">
      </label>
    </div></td>
  </tr>
  <tfoot>
    <tr>
      <th class="text-center Estilo20 Estilo16">&nbsp;</th>
      <th class="text-center Estilo20 Estilo16"><input type="submit" name="Submit" value="Guardar"></th>
      </tr>
  </tfoot>
              </table>
                          <p>&nbsp;</p>
            </form>
              <form name="form1" method="post" action="">
                <table width="701" border="1" cellspacing="0" class="table table-bordered" id="tableMonedas">
                  <thead>
                    <tr>
                      <th width="171" class="text-center Estilo20 Estilo16">Fecha</th>
                      <th width="225" class="text-center Estilo20 Estilo16">Descripcion</th>
                      <th width="225" class="text-center Estilo20 Estilo16">Responsable</th>
                      <th width="62" class="text-center Estilo20 Estilo16">Eliminar</th>
                      </tr>
                  </thead>
                  <tbody>
                  
				
                    @foreach($cronogramas as $cronograma)
                  <tr>
                    <td class="Estilo16 Estilo20 text-center"><div align="center">{{$cronograma->fecha }}</div></td>
                    <td class="text-center Estilo20 Estilo16"><div align="center">{{$cronograma->descripcion }}</div></td>
                    <td class="text-center Estilo20 Estilo16"><div align="center">{{$cronograma->responsable }}</div></td>
                    <td class="text-center Estilo20 Estilo16"><a href="borra?cronograma_id={{$cronograma->id}}&&id_mes={{$id_mes}}&&nombre_mes={{$nombre_mes}}" class="btn btn-info Estilo20 Estilo16">X</a></td>
                    </tr>
				  @endforeach
      
                  <tfoot>
                  </tfoot>
                </table>
              </form>
              <p></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p></td>
          </tr>
        </table>
        </div>    </td>
    </tr>
  <tr  >
    <td height="20" colspan="3" align="center" valign="top"><table width="490" height="32" border="0" cellpadding="0" cellspacing="0" bgcolor="#B4D2D8">
      <tr>
        <td height="32"><div align="center"><span class="Estilo15">ENLACES DE INTERÉS </span></div></td>
      </tr>
    </table>
      <table width="490" height="143" border="0" cellpadding="0" cellspacing="0" bgcolor="#F0EEEE">
      <tr>
        <td><div class="container"  >
            <!--OWL CAROUSEL-->
            <section class="contenedor-interno">
              <div class="bxSlider" >
                <div>
                  <div align="center">
				  <a href="https://educacion.gob.ec/" target="_blank"><img src="images/enlaces/logo1.jpg" alt="Ministerio de educación" width="200" height="86" border="0" > </a>				  </div>
                </div>
				
				
                <div>
                  <div align="center"> <a href="https://www.educarecuador.gob.ec/index.php" target="_blank"><img src="images/enlaces/logo2.jpg" alt="Educar Ecuador" width="200" height="76" border="0"> </a> </div>
                </div>
				
				
                <div></div>
                <div>
                  <div align="center"><a href="http://admision.senescyt.gob.ec/" target="_blank"><img src="images/enlaces/logo3.jpg" alt="Ser bachiller" width="203" height="75" border="0" lowsrc="http://admision.senescyt.gob.ec/"></a></div>
                </div>
                <div></div>
                <div>
                  <div align="center"><a href="https://educacion.gob.ec/quiero-ser-maestro-6/" target="_blank"><img src="images/enlaces/logo4.jpg" alt="Quiero ser maestro 6" width="201" height="84" border="0"></a></div>
                </div>
                <div></div>
              </div>
            </section>
        </div></td>
      </tr>
    </table></td>
    <td width="508" height="20" align="center" valign="top"><table width="490" height="32" border="0" cellpadding="0" cellspacing="0" bgcolor="#B4D2D8">
      <tr>
        <td height="32"><div align="center"><span class="Estilo15">SÍGUENOS EN: </span></div></td>
      </tr>
    </table>
      <table width="490" height="56" border="0" cellpadding="0" cellspacing="0" bgcolor="#F0EEEE">
      <tr>
        <td height="56"><div align="center"><a href="https://www.facebook.com/Colegio-Nacional-General-Pintag-1580832042202149/" target="_blank"><img src="images/redes/facebook.png" alt="Todos aprender" width="70" height="40" border="0"></a> <a href="https://www.youtube.com/watch?v=F4anpfNAE5g" target="_blank"><img src="images/redes/youtube.png" alt="Todos aprender" width="70" height="40" border="0"></a> <a href="https://twitter.com/search?f=images&vertical=default&q=colegio general pintag&src=typd" target="_blank"><img src="images/redes/twitter.png" alt="Todos aprender" width="70" height="40" border="0"></a> <a href="https://www.instagram.com/explore/locations/942540181/colegio-nacional-general-pintag/?hl=es-la" target="_blank"><img src="images/redes/instagram.png" alt="Todos aprender" width="70" height="40" border="0"></a> </div></td>
      </tr>
    </table>
      <p class="Estilo1">&nbsp;</p></td>
  </tr>
  <tr  >
    <td height="59" colspan="4" align="center" valign="middle" bgcolor="#666666"><span class="Estilo10 Estilo20"><span class="Estilo25"><strong>Dirección:</strong> Pintag-Quito-Ecuador; <strong>Correo institucional :</strong> contacto@pintag.edu.ec; <br>
      <strong>Teléfono:</strong> 07-4089590; <strong>Celular: </strong>0934090143 </span></span></td>
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