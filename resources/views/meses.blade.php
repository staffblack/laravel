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
      <table width="1000" border="0" cellspacing="3">
          <tr>
            <td width="190" rowspan="2" align="left" valign="top"><table width="150" border="0" cellspacing="3">
              <tr>
                <td ><span class="Estilo25"> @if (Session::has('login'))
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
            </table>              <table width="121" bgcolor="#EFEFEF">
                <tr>
                  <td width="118">
                    
                    <ul class="nav nav-list" >
                      <li class="" > <a href="nivel">Horarios </a> </li>
                        <li class=""> <a href="mes">Cronograma</a></li>
						<li class=""> 
                        <a href="formularios"> Formularios</a>					</li>
						<li class=""> 
                        <a href="notas_bloque"> Salir</a>					</li>
                    </ul>				</td>
                </tr>
                </table></td>
            <td valign="top"><span class="Estilo30"><a href="mes">Cronograma</a></span></td>
          </tr>
          <tr>
            <td width="797" valign="top"><table width="316" class="table table-bordered" id="tableMonedas">
              <thead>
                <tr>
                  <th width="220" class="text-center Estilo20 Estilo16">Mes</th>
                  <th width="80" class="text-center Estilo20 Estilo16">Cronograma</th>
                </tr>
              </thead>
              <tbody>              
              @foreach($meses as $mes)
  <tr>
    <td class="text-center Estilo20 Estilo16">{{$mes->nombre}}</td>
    <td class="text-center"><a href="{{route('cronograma.index','id_mes='.$mes->id.'&&nombre_mes='.$mes->nombre)}}" class="btn btn-info Estilo20 Estilo16">Cronograma</a></td>
  </tr>
              @endforeach
  <tfoot>
  </tfoot>
            </table></td>
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