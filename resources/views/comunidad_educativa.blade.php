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
$page='comunidad_educativa';
?>
@extends('plantilla')
@section('content')

    <div class="container">
        <div class="row">  
            <div class="container">
            <br>
        <div class="col-lg-12">
            <div class="col-lg-12">
            </div>
                <div class="col-lg-12">
                    &nbsp;
                </div>
            <div class="col-lg-4 panel  ">
                <div class="col-lg-12">
                    <h4 class="lighter widget-title Estilo3">
                        <span class="Estilo4">@foreach($rectores as $rector)
                            <p align="center">
                                Rectora
                            </p>
                        </span>
                    </h4>
                    <p align="center">
                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($rector->foto)) }}" width="50%" height="90">
                    </p>
                </div>
                <div class="col-lg-12">
                    <h4 class="lighter widget-title Estilo3">
                        <span class="Estilo4">
                            <p align="center">
                                {{$rector->grado }} {{$rector->nombres }} {{$rector->apellidos }}
                            </p>
                        </span> 
                    </h4>
		@endforeach
                </div> 
            </div>
            
            <div class="col-lg-4 panel">
                <div class="col-lg-12">
                    <h4 class="lighter widget-title Estilo3">
                        <span class="Estilo4">@foreach($vicerrectores as $vicerrector)
                            <p align="center">
                                vicerrector
                            </p>
                        </span>
                    </h4>
                    <p align="center">
                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($vicerrector->foto)) }}" width="50%" height="90">
                    </p>
                </div>
                <div class="col-lg-12">
                    <h4 class="lighter widget-title Estilo3">
                        <span class="Estilo4">
                            <p align="center">
                                {{$vicerrector->grado }} {{$vicerrector->nombres }} {{$vicerrector->apellidos }}
                            </p>
                        </span> 
                    </h4>
		@endforeach
                </div> 
            </div>
            
            <div class="col-lg-4 panel">
                <div class="col-lg-12">
                    <h4 class="lighter widget-title Estilo3">
                        <span class="Estilo4">@foreach($inspectores as $inspector)
                            <p align="center">
                                Inspectora
                            </p>
                        </span>
                    </h4>
                    <p align="center">
                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($inspector->foto)) }}" width="50%" height="90" >
                    </p>
                </div>
                <div class="col-lg-12">
                    <h4 class="lighter widget-title Estilo3">
                        <span class="Estilo4">
                            <p align="center">
                                {{$inspector->grado }} {{$inspector->nombres }} {{$inspector->apellidos }}
                            </p>
                        </span> 
                    </h4>
		@endforeach
                </div> 
            </div>
            
            </div>
            
          
             </div>
        </div>
</div>
        @endsection