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

@extends('layouts.plantilla')
<div class="container">
    <div class="row">
@section('content')

<div class="col-lg-10  panel panel-default"> 
  <a href="javascript:history.back()" class="btn btn-primary"> Volver Atrás</a> 
  
        <table class="table" id="tableMonedas">
          
            <tr>
              <th>Oferta</th>
              <th >Curso</th>
              <th >Paralelo</th>
              <th >Modalidad</th>
              <th >Notas de Bloque </th>
            </tr>
          <tbody>
          
        @foreach($niveles as $nivel)
        <tr>
          <td >{{$nivel->oferta}}</td>
          <td >{{$nivel->curso}}</td>
          <td >{{$nivel->paralelo}}</td>
          <td>{{$nivel->modalidad}}</td>
          <td >
              <a href="materia_docentes?id_nivel={{$nivel->id}}&modalidad_nivel={{$nivel->modalidad}}&&descripcion_nivel={{$nivel->curso.' '.$nivel->paralelo}}" class="btn btn-primary">Notas de Bloque </a></td>
        </tr>
        @endforeach
        <tfoot>
        </tfoot>
      </table>
  </table>
  <p>&nbsp;</p>
</div>
@endsection