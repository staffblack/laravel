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
@section('content')

<div class="container">
    <div class="row">
        <div class="container">
        <div class=" widget-header col-lg-12">
            <h4 class="Estilo1 lighter widget-title"><strong>General Pintag</strong></h4>
        </div>
        
        <div class="col-lg-12">
            &nbsp;
        </div>
        <div class="col-lg-1">
            &nbsp;
        </div>
        <div class="panel panel-default col-lg-12 widget-header">
            <div class="col-sm-2 widget-container-col" >
            </div>
            <div class="col-sm-8 widget-container-col" >
                <div class="widget-box transparent" style="text-align: center;">
                    <div class="flexslider">
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
        <div class="col-lg-1">
          &nbsp;
        </div>
        
        <div class="panel panel-default col-lg-12 widget-header">
            <div class="module mod-line  deepest" style="min-height: 5px;">
                <div align="center"><h4 class="lighter widget-title Estilo3"><span class="Estilo4">Mision</span></h4>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default col-lg-12 widget-header">
        <br>
            <p style="text-align: justify;">
                <font size="3" color="black">
                    La Institución  Educativa Fiscal “General Píntag”  forma  estudiantes con fortaleza visionarias, íntegros con auto confianza y  valores morales permitiéndoles ser reflexivos, creativos y prácticos;  respetándose a sí mismos y a los demás, con deseos de alcanzar nuevos  conocimientos que lideren la construcción de un mundo productivo.
                </font>
            </p>
        <br>
        </div>
        <div class="panel panel-default col-lg-12 widget-header">
            <div class="module mod-line  deepest" style="min-height: 5px;">
                <div align="center"><h4 class="lighter widget-title Estilo3"><span class="Estilo4">Reseña Historica</span></h4>
                </div>
            </div>
        </div>
        <div class="panel panel-default col-lg-12 widget-header">
        <br>
            <p style="text-align: justify;">
            <font size="3" color="black">
                        Por iniciativa del reverendo padre Carlos  Altamirano,&nbsp; y ante la necesidad de crear una Institución educativa que  brinde servicio a la juventud Pinteña; en compañía de importantes autoridades  de la parroquia consiguen a través del Presidente de la República de ese  entonces, Dr. José María Velasco Ibarra, la aprobación para la apertura del  primer establecimiento secundario de la localidad.
          . </font>
            </p>
        <br>
        </div>
        
        <div class="panel panel-default col-lg-12 widget-header">
            <div class="module mod-line  deepest" style="min-height: 5px;">
                <div align="center"><h4 class="lighter" widget-title Estilo3"><span class="Estilo4">VISIÓN</span></h4>
                </div>
            </div>
        </div>
        <div class="panel panel-default col-lg-12 widget-header">
        <br>
            <p style="text-align: justify;">
            <font size="3" color="black">
                        Conseguir una juventud dinámica, autónoma y libre  capaz de llegar al éxito si se lo propone con dedicación y esfuerzo. Creemos  necesario resaltar a todos aquellos que pertenecemos a la Institución Educativa  Fiscal “General Píntag” ya que desde ahora volveremos a reafirmar  el compromiso de que seguiremos trabajando  por el engrandecimiento postura y prestigio de nuestra Institución, compromiso  que será cumplido.
          </font>
            </p>
        <br>
        </div>
            </div>
        </div>
        </div>
                  <!-- main end -->
              
        
           
</div>
    </div>
</div>

@endsection