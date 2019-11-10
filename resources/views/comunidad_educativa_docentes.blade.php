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
<?php
$page='comunidad_educativa_docentes';
?>

@extends('plantilla')
@section('content')

    <div class="container">
        <div class="row">  
            <div class="container">
            <br>
        <div class="panel panel-default col-lg-12">
            <form name="form1" method="post" action="">
                <input name="contador" type="hidden" id="contador" value="{{$contador=0}}">
<div class="container">
  <div class="row"> 
      <section id="top-a" class="grid-block">
        <div class="grid-box width5 grid-h">
            <div class="module mod-line  deepest" style="min-height: 5px;">
                <h3> <span class="Estilo30"><?php 
                if(isset($_REQUEST['area']))
                {
                    echo 'ÁREA DE '.$_REQUEST['area'];
                }
                ?>
                </h3>
            </div>
        </div>
    </section>
      <br>
            
            <div class="col-lg-12">
                <div class="col-lg-12 ">
                    &nbsp;
                </div>
    @foreach($areas_docentes as $area_docente)
    
    
                
           <div class="col-lg-3 panel">
      
               <h4><a href="resultado?id={{$area_docente->cedula }}&accion=2" style="color:#007bff;"></a></h4>
               <br>
               <p align="center">
               <img src="data:image/png;base64,{{ chunk_split(base64_encode($area_docente->foto)) }}"  width="50%" height="100" ><br>
                </p>
            
                
                <h5>
                    <p align="center" id="heading">
                        <a href="resultado?id={{$area_docente->cedula }}&accion=2" style="color:#007bff; ">
                                          {{$area_docente->grado }}
                                    {{$area_docente->nombres }}
                                    {{$area_docente->apellidos }}
                    </p>
                 </h5>                   
                
            
    </div>
                
            




    
   
    
  
                <input name="contador2" type="hidden" id="contador" value="{{$contador=$contador+1}}">
                @if ($contador==2)
                <input name="contador2" type="hidden" id="contador" value="{{$contador=0}}">
               @endif
                @endforeach
                </div>
                 </div>
</div>
          </form>
    </div>
</div>

@endsection