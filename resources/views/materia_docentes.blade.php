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

<style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 14px;
    color: #000000;
    background-color: #ffffff;
    border-radius: 5px;
    border: 2px solid #000000;
  }
</style>

@extends('layouts.plantilla')
<div class="container">
    <div class="row">
@section('content')
&nbsp;&nbsp;
<div class="col-lg-10 panel panel-default">
        <div align="center">Bloques</div></th>
<br>
            @foreach($bloques as $bloque)
            <div class="col-lg-4 panel ">
                <a href="estudiante_docentes?id_nivel={{$id_nivel}}&&descripcion_nivel={{$descripcion_nivel}}&modalidad_nivel=<?php echo $_REQUEST['modalidad_nivel']?>&id_bloque={{$bloque->id}}&&nombre_bloque={{$bloque->nombre}}" class="boton_personalizado" style="color-b">{{$bloque->nombre}}</a>
            </div>
                  

 
        @endforeach
 </div>       
</div>
</div>
 @endsection