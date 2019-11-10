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

</style>
@extends('layouts.plantilla')
@section('content')  
<div class="col-lg-12 panel">
  
    <div class="table-responsive">
        <table class="table">
      <tr>
        <td class="Estilo30">
            <a href="nivel_estudiantes" class="btn btn-primary">Nivel Estudiantes </a>  {{$descripcion_nivel}}</td>
      </tr>
      <tr>
        <td width="778" valign="top"><form name="form1" method="post" action="/portal/public/nivel_estudiantes" enctype="multipart/form-data">
          {{ csrf_field() }}
          <table width="700" border="1" cellspacing="0" class="table table-striped table-bordered table-hover" id="tableMonedas">
                
                  <tr>
                    <th colspan="6" class="text-center Estilo20 Estilo16">Estudiantes asignados a {{$descripcion_nivel}} </th>
                  </tr>
                  <tr>
                    <th width="100" class="text-center Estilo20 Estilo16">Cédula</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Nombres</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Apellidos</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Password</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Foto</th>
                    <th width="20" class="text-center Estilo20 Estilo16">Seleccionar</th>
                  </tr>
                <tbody>
                
            @foreach($estudiantesa as $estudiantea)
            <tr>
              <td class="Estilo16 Estilo20 text-center"><div align="left">{{$estudiantea->cedula}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiantea->nombres }}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiantea->apellidos}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiantea->password}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="center"> <img src="data:image/png;base64,{{ chunk_split(base64_encode($estudiantea->foto)) }}" height="80" width="70"> </div></td>
              <td class="text-center Estilo20 Estilo16"><input type="checkbox" name="{{$estudiantea->cedula}}a"  value="{{$estudiantea->cedula}}a" >              </td>
            </tr>
            @endforeach
            <tfoot>
            </tfoot>
              </table>
          <p>
                <input type="submit" name="opcion" value="Eliminar">
              </p>
          <input name="id_nivel" type="hidden" id="id_nivel" value="{{$id_nivel}}">
              <input name="descripcion_nivel" type="hidden" id="descripcion_nivel" value="{{$descripcion_nivel}}">
              <input name="modalidad_nivel" type="hidden" id="modalidad_nivel" value="{{$modalidad_nivel}}">
              <br>
              <table width="700" border="1" cellspacing="0" class="table table-striped table-bordered table-hover" id="tableMonedas">
                
                  <tr>
                    <th colspan="6" class="text-center Estilo20 Estilo16">Asignar Estudiantes al Nivel </th>
                  </tr>
                  <tr>
                    <th width="100" class="text-center Estilo20 Estilo16">Cédula</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Nombres</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Apellidos</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Password</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Foto</th>
                    <th width="20" class="text-center Estilo20 Estilo16">Seleccionar</th>
                  </tr>
                <tbody>
                
                @foreach($estudiantes as $estudiante)
                <tr>
                  <td class="Estilo16 Estilo20 text-center"><div align="left">{{$estudiante->cedula}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->nombres }}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->apellidos}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->password}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="center"> <img src="data:image/png;base64,{{ chunk_split(base64_encode($estudiante->foto)) }}" height="80" width="70"> </div></td>
                  <td class="text-center Estilo20 Estilo16"><input type="checkbox" name="{{$estudiante->cedula}}"  value="{{$estudiante->cedula}}" >                  </td>
                </tr>
                @endforeach
                <tfoot>
                </tfoot>
              </table>
          <p>
                <input type="submit" name="opcion" value="Asignar">
              </p>
          <p>&nbsp;</p>
        </form>
            <p>&nbsp;</p></td>
      </tr>
    </table>
  </div>
</div>
@endsection