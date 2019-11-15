
<?php
$page='index';
?>
<script>
var cont=0
function cambia() {
cont++;
switch(cont%4+1)
 {
     <?php
     $url1='https://www.educarecuador.gob.ec';
     $url2='https://educacion.gob.ec';
     $url3='https://educacion.gob.ec/sime';
     $url4='https://educacion.gob.ec/amie/';
     $url5='https://www.espe.edu.ec/';
     $url6='https://eva-mecapacito.educacion.gob.ec/';
     $url7='https://educacion.gob.ec/?s=SIGEE';
     $url8='https://www.epn.edu.ec/';
     ?>
 case 1:
 document.getElementById("fotocambia").src="images/iconos/1.png";
 document.getElementById("fotocambiau1").href="<?php echo $url1;?>";
 
 document.getElementById("fotocambia2").src="images/iconos/2.png";
 document.getElementById("fotocambiau2").href="<?php echo $url2;?>";
 
 
 document.getElementById("fotocambia3").src="images/iconos/3.png"; 
 document.getElementById("fotocambiau3").href="<?php echo $url3;?>";

 break;
 case 2:
 document.getElementById("fotocambia").src="images/iconos/3.png";
 document.getElementById("fotocambiau1").href="<?php echo $url3;?>";
 
 document.getElementById("fotocambia2").src="images/iconos/4.png";
 document.getElementById("fotocambiau2").href="<?php echo $url4;?>";
 
 
 document.getElementById("fotocambia3").src="images/iconos/5.png"; 
 document.getElementById("fotocambiau3").href="<?php echo $url5;?>";
 
 break;
 case 3:
 document.getElementById("fotocambia").src="images/iconos/6.png";
 document.getElementById("fotocambiau1").href="<?php echo $url6;?>";
 
 document.getElementById("fotocambia2").src="images/iconos/7.png";
 document.getElementById("fotocambiau2").href="<?php echo $url7;?>";
 
 
 document.getElementById("fotocambia3").src="images/iconos/8.png"; 
 document.getElementById("fotocambiau3").href="<?php echo $url8;?>";
 break;
 case 4:
document.getElementById("fotocambia").src="images/iconos/1.png";
 document.getElementById("fotocambiau1").href="<?php echo $url1;?>";
 
 document.getElementById("fotocambia2").src="images/iconos/2.png";
 document.getElementById("fotocambiau2").href="<?php echo $url2;?>";
 
 
 document.getElementById("fotocambia3").src="images/iconos/7.png"; 
 document.getElementById("fotocambiau3").href="<?php echo $url7;?>";
 
 break;
 }

}
function inicio() {
setInterval(cambia, 1000);
}
window.onload=inicio;
</script>

@extends('plantilla')
<div class="col-lg-12 panel panel-default "  >
@section('content')

            
            <div class="col-lg-6"><?php //izquierda?>
                <div class="col-sm-12 widget-container-col">
                    <div class="widget-box transparent">
                        <div id="carousel-home" class="flexslider">
                            <ul class="slides">
                                <li> <img src="{{asset('images/principal/pic1.jpg')}}" /> </li>
                                <li> <img src="{{asset('images/principal/pic2.jpg')}}" /> </li>
                                <li> <img src="{{asset('images/principal/pic3.jpg')}}" /> </li>
                                <li> <img src="{{asset('images/principal/pic4.jpg')}}" /> </li>
                                <li> <img src="{{asset('images/principal/pic5.jpg')}}" /> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-6" ><?php //derecha?>
                <div class="col-sm-12 widget-container-col">
                        <div class="flexslider">
                            <a href="evento?search=Actividad" type="button" class="btn btn-primary btn-block">
                                <br><br><h5>Minutos Civicos</h5><br><br></a>
                            
                            <br><br>
                            <a href="evento?search=Evento" type="button" class="btn btn-primary btn-block"><br><br><h5>Eventos</h5><br><br></a>
                            
                            <br><br>
                            <a href="evento?search=Noticia" type="button" class="btn btn-primary btn-block"><br><br><h5>Noticias</h5><br><br></a>
                            
                        </div>
                    </div>
            </div>

   
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <h4 class="Estilo1 lighter widget-title"><strong><strong>PRÓXIMOS EVENTOS </strong></h4>
                        <p align="center">
                            @foreach($eventos as $evento) </p>
                    <div class="col-sm-12" align="center">
                        <table width="489" border="0" cellpadding="0" cellspacing="6" class="table table-bordered" id="tablaeventos">
                            <tr>
                                <td>
                                    <div align="justify">
                                    <p align="center"><span class="text-center Estilo1 Estilo6"><span class="text-center">
                                                <strong>{{$evento->nombre}}<br />
                                                </strong></span></span></p>
                                                <p align="center">
                                                    <span class="text-center Estilo1 Estilo6">
                                                        <span class="text-center">
                                                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($evento->foto)) }}"  class="img-fluid" alt="Responsive image" width="100" height="100" /></span></span></p>
                                                    <p align="justify">
                                                        <?php 
                                                        $cadena = $evento->descripcion; //Esta es la cadena que se quiere acortar
                                                        echo substr($cadena, 0, 120).'...<a href="evento?id='.$evento->id.'&tipo=Evento" style="color:#000000;">Continuar</a>'; //con esto se cogen los 4 primeros caracteres
                                                        ?>

                                                    </p>
                                                    <p align="justify" class="Estilo45"><em> <strong>Fecha:</strong> {{ $evento->fecha }}</em></p>
                                    </div>
                                </td>
                            </tr>
                    </table>
                  </div>
          @endforeach
                
            </div>
            <div class="col-lg-6">
                <h4 class="Estilo1 lighter widget-title"><strong><p align="left">NOTICIAS DESTACADAS</p> </strong></h4>
                <p align="center">        
                    @foreach($noticias as $noticia) </p>
                    <table width="489" border="0" cellpadding="0" cellspacing="6" class="table table-bordered" id="tablaeventos">
                        <tr>
                            <td width="263" height="39" class="text-justify Estilo8 Estilo16 Estilo17">
                                <div align="justify" class="Estilo44">
                                    <div class="col-sm-12 pricing-box" align="center">
                                        <p align="center"><span class="text-center Estilo1 Estilo6"><span class="text-center">
                                                <strong>{{$noticia->nombre}}<br />
                                                </strong></span></span></p>
                                        <div align="justify" class="Estilo44"><br>
                                            <p align="center">
                                                
                                                <span class="text-center Estilo1 Estilo6">
                                                <span class="text-center">
                                                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($noticia->foto)) }}" class="img-fluid" alt="Responsive image" width="100" height="100" />
                                                </span>
                                                </span>
                                            </p>
                                      <?php 
                                                        $cadena = $noticia->descripcion; //Esta es la cadena que se quiere acortar
                                                        echo substr($cadena, 0, 110).'...<a href="evento?id='.$noticia->id.'&tipo=Noticia" style="color:#000000;">Continuar</a>'; //con esto se cogen los 4 primeros caracteres
                                                        ?>

                                      <br><br>
                                     
                                      <p align="justify" class="Estilo45"><em><strong>Fecha: </strong>{{ $noticia->fecha }}</em></p>
                                        </div>
                            </td>
                        </tr>
                    </table>
                @endforeach
            </div>     
            </div>

    
            
             
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 widget-container-col">
                            <div class="widget-box transparent">
                                    <h4 class="Estilo1 lighter widget-title"><strong>MINUTOS CIVICOS </strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-sm-12 panel panel-default">  
                    @foreach($actividades as $actividad)
                        <div class="col-sm-6 pricing-box" align="center"> 
                            <h4 >
                                <strong>
                                    <p align="center">
                                        {{ $actividad->nombre}}
                                    </p> </strong>
                                    {{ $actividad->descripcion}}
                            </h4>
                                <br>
                                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($actividad->foto)) }}" class="img-fluid" alt="Responsive image" width="100" height="100" />
                                <br>
                                <h4>
                                <strong>Responsable: </strong>{{$actividad->responsable}}
                                <br />
                                  {{ $actividad->fecha}}
                                </h4>
                        </div>
                    @endforeach
                    </div>
                
        <div class="col-lg-12" >
            <div class="row">
                    <div class="row">
                        <div class="col-sm-12 widget-container-col">
                            <div class="widget-box transparent">
                                <div class="widget-header">
                                    <h4 class="Estilo1 lighter widget-title"><strong>Enlaces de Interes</strong></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 panel panel-defaul">  
                            
                            <div class="col-sm-4" align="center"> 
                                <a href="https://educacion.gob.ec/" id="fotocambiau1"> 
                                    <img id="fotocambia" src="images/iconos/4.png" class="img-fluid" alt="Responsive image"  width="200"> 
                                </a>
                            </div>
                            <div class="col-sm-4" align="center"> 
                                <a href="1.png" id="fotocambiau2">
                                    <img id="fotocambia2" src="images/iconos/5.png"class="img-fluid" alt="Responsive image" width="200"> 
                                </a>
                            </div>
                    
                            <div class="col-sm-4" align="center"> 
                                <a href="1.png" id="fotocambiau3">
                                    <img id="fotocambia3" src="images/iconos/6.png" class="img-fluid" alt="Responsive image" width="200"> 
                                </a>
                            </div>
                        </div>                         
                        <div class="col-sm-12 widget-container-col">
                            <div class="col-sm-1 widget-container-col" align="center"> 
                                <a href="https://www.facebook.com/ADRISS.BASTI">
                                <img  src="images/iconos/facebook.png" class="img-fluid" alt="Responsive image" width="100" height="100">
                                </a>
                                <br>
                                <h4 ><strong>Siguenos</strong></h4>                                
                            </div>
                             
                             <div class="col-sm-1 widget-container-col" align="center"> 
                                    <a href="mailto: adriepn.asi@gmail.com"><img src="images/iconos/mail.jpg" class="img-fluid" alt="Responsive image" width="100" height="100"> </a>
                                <br>
                                <h4><strong>Contactanos&nbsp;&nbsp;&nbsp;&nbsp;</strong></h4>
                            </div>
                            <div class="col-sm-1 widget-container-col" align="center"> 
                                    <a href="mailto:17h01943@gmail.com"><img src="images/iconos/sugerencias.jpg" class="img-fluid" alt="Responsive image" width="100" height="100"></a>
                                <br>
                                <h4><strong>Sugerencias&nbsp;</strong></h4>
                            </div>
                            <div class="col-sm-9 widget-container-col" align="center"> 
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7333084079933!2d-78.3750486852467!3d-0.37402599972711026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5b951d557628d%3A0xa0742ac73982c2d6!2sColegio%20Nacional%20General%20Pintag!5e0!3m2!1ses-419!2sec!4v1568949449484!5m2!1ses-419!2sec" width="100%" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                </div>
            </div>         
        </div>
        
    </div>
</div>



  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>


<?php 
/*
 session_start();
  unset($_SESSION["login"]); 
  unset($_SESSION["password"]);
  unset($_SESSION["perfil"]);
  unset($_SESSION["nombres_usuario"]);
  unset($_SESSION["apellidos_usuario"]);
  session_destroy();
  //header("Location: index.php");
  exit;
 * 
 */
?>
@endsection