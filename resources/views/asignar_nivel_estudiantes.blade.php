<style type="text/css">

</style>
@extends('layouts.plantilla')
@section('content')  
<div class="col-lg-12 panel">
  
    <div class="table-responsive">
      <div class="col-lg-12">
          <a href="nivel_estudiantes" class="btn btn-primary">Nivel Estudiantes </a>  {{$descripcion_nivel}}
      </div>
        
          <form name="form1" method="post" action="/portal/public/nivel_estudiantes" enctype="multipart/form-data">
          {{ csrf_field() }}
          <table width="700" border="0" cellspacing="0" class="" >
                
                  <tr>
                    <th colspan="6" class="text-center">Estudiantes asignados a {{$descripcion_nivel}} </th>
                  </tr>
                  <tr>
                    <th width="100" class="text-center Estilo20 Estilo16">Cédula</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Nombres</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Apellidos</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Password</th>
                    <th width="20" class="text-center Estilo20 Estilo16">Seleccionar</th>
                  </tr>
                <tbody>
                
            @foreach($estudiantesa as $estudiantea)
            <tr>
              <td class=""><div align="left">{{$estudiantea->cedula}}</div></td>
              <td class="text-center"><div align="left">{{$estudiantea->nombres }}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiantea->apellidos}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiantea->password}}</div></td>
              <td class="text-center Estilo20 Estilo16"><input type="checkbox" name="{{$estudiantea->cedula}}a"  value="{{$estudiantea->cedula}}a" >              </td>
            </tr>
            @endforeach
              </table>
          <p>
                <input type="submit" name="opcion" value="Eliminar">
              </p>
          <input name="id_nivel" type="hidden" id="id_nivel" value="{{$id_nivel}}">
              <input name="descripcion_nivel" type="hidden" id="descripcion_nivel" value="{{$descripcion_nivel}}">
              <input name="modalidad_nivel" type="hidden" id="modalidad_nivel" value="{{$modalidad_nivel}}">
              <br>
              <table width="700" border="1" cellspacing="0" class="" id="tableMonedas">
                
                  <tr>
                    <th colspan="6" class="text-center Estilo20 Estilo16">Asignar Estudiantes al Nivel </th>
                  </tr>
                  <tr>
                    <th width="100" class="text-center Estilo20 Estilo16">Cédula</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Nombres</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Apellidos</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Password</th>
                    <th width="20" class="text-center Estilo20 Estilo16">Seleccionar</th>
                  </tr>
                
                @foreach($estudiantes as $estudiante)
                <tr>
                  <td class="Estilo16 Estilo20 text-center"><div align="left">{{$estudiante->cedula}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->nombres }}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->apellidos}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->password}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><input type="checkbox" name="{{$estudiante->cedula}}"  value="{{$estudiante->cedula}}" >                  </td>
                </tr>
                @endforeach
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