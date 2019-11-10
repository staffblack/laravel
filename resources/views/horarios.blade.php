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

a {
    color: #c12c2c;
}
-->
</style>

@extends('layouts.plantilla')
@section('content')
<div class="col-lg-12 panel">
  <table width="100%" border="0" cellspacing="3">
    <tr>
      <td valign="top"><span class="Estilo30"><a href="nivel">Horarios</a></span></td>
    </tr>
    <tr>
      <td width="772" valign="top"><table width="770" class="table table-bordered" id="tableMonedas">
          <thead>
            <tr>
              <th width="220" class="text-center Estilo20 Estilo16">Oferta</th>
              <th width="133" class="text-center Estilo20 Estilo16">Curso</th>
              <th width="148" class="text-center Estilo20 Estilo16">Paralelo</th>
              <th width="165" class="text-center Estilo20 Estilo16">Modalidad</th>
              <th width="80" class="text-center Estilo20 Estilo16">Horario</th>
            </tr>
          </thead>
          <tbody>
          
        @foreach($niveles as $nivel)
        <tr>
          <td class="text-center Estilo20 Estilo16">{{$nivel->oferta}}</td>
          <td class="text-center Estilo20 Estilo16">{{$nivel->curso}}</td>
          <td class="text-center Estilo20 Estilo16">{{$nivel->paralelo}}</td>
          <td class="text-center Estilo20 Estilo16">{{$nivel->modalidad}}</td>
          <td class="text-center"><a href="registrar_horarios?id_nivel={{$nivel->id}}&&modalidad_nivel={{$nivel->modalidad}}&&descripcion_nivel={{$nivel->oferta.' '.$nivel->curso.' '.$nivel->paralelo}}" class="btn btn-info Estilo20 Estilo16">Horario</a></td>
        </tr>
        @endforeach
        <tfoot>
        </tfoot>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
@endsection