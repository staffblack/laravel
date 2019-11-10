<style type="text/css">
<!--
.Estilo1 {color: #FF0000}
-->
</style>

@extends('plantilla')
@section('content')


<div class="encabezado" id="encabezado" >
  <div>
    <table border="0">
      <tr>
        <td width="192" rowspan="2" align="left" valign="top" ><table width="150" border="0" cellspacing="3">
            <tr>
              <td width="252" ><span class="Estilo25"> @if (Session::has('login'))
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
          </table>
            <table width="121" bgcolor="#EFEFEF">
              <tr>
                <td width="118">@include('nav_administrador')</td>
              </tr>
        </table></td>
        <td class="Estilo30"><a href="estudiantes">Estudiantes</a></td>
      </tr>
      <tr>
        <td width="805"><form action="/portal/public/estudiantes" method="post" enctype="multipart/form-data" name="form1">
          {{ csrf_field() }}
          <table width="404" class="table table-bordered" id="tableMonedas">
                <thead>
                  
                  <tr>
                    <th width="63" class="text-center Estilo20 Estilo16"><div align="left">Cédula</div></th>
                    <th colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="cedula_estudiante" type="text" id="cedula_estudiante" value="{{$nombres_estudiante}}">
                        </label>
                        <span class="Estilo31 Estilo1">*</span>
                        <input name="opcion" type="submit" id="opcion" value="Buscar">
                        <input name="hidden2" type="hidden" >
                        <input name="hidden" type="hidden" >
                    </div></th>
                  </tr>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Nombres</strong></div></td>
                    <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="nombres_estudiante" type="text" id="nombres_estudiante" value="{{$nombres_estudiante}}" size="50">
                        </label>
                        <span class="Estilo31 Estilo1">*</span></div></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Apellidos</strong></div></td>
                    <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="apellidos_estudiante" type="text" id="apellidos_estudiante" value="{{$apellidos_estudiante}}" size="50">
                        </label>
                        <span class="Estilo31 Estilo1">*</span></div></td>
                  </tr>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Password</strong></div></td>
                    <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="password_estudiante" type="text" id="password_estudiante" value="{{$password_estudiante}}" size="20" maxlength="20">
                        </label>
                    </div></td>
                  </tr>
                <tfoot>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Foto</strong></div></td>
                    <td colspan="3" class="text-center Estilo20 Estilo16"><div align="left">
                        <label></label>
                        <p class="Estilo31">
                          <input name="foto_estudiante" type="file" class="Estilo16" id="foto_estudiante" size="10" maxlength="10">
                        </p>
                    </div></td>
                    <td width="181" class="text-center Estilo20 Estilo16"><img src="data:image/png;base64,{{ chunk_split(base64_encode($foto_estudiante)) }}" height="80" width="70"></td>
                  </tr>
                  <tr>
                    <th colspan="5" class="text-center Estilo20 Estilo16"><span class="Estilo1">{{$mensaje}}</span><br>
                      <input name="opcion" type="submit" id="opcion" value="Nuevo" {{$nuevo}} >
                      <input name="opcion" type="submit" id="opcion" value="Registrar" {{$registrar}}>
                      <input name="opcion" type="submit" id="opcion" value="Modificar" {{$modificar}}>
                      <input name="opcion" type="submit" id="opcion" value="Eliminar" {{$eliminar}}></th>
                  </tr>
                </tfoot>
          </table>
        </form>
            <form name="form1" method="post" action="">
              <p>&nbsp;</p>
              <table width="800" border="1" cellspacing="0" class="table table-bordered" id="tableMonedas">
                <thead>
                  <tr>
                    <th width="100" class="text-center Estilo20 Estilo16">Cédula</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Nombres</th>
                    <th width="100" class="text-center Estilo20 Estilo16">Apellidos</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Password</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Foto</th>
                    <th width="20" class="text-center Estilo20 Estilo16">Modificar</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach($estudiantes as $estudiante)
                <tr>
                  <td class="Estilo16 Estilo20 text-center"><div align="left">{{$estudiante->cedula}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->nombres }}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->apellidos}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$estudiante->password}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="center"> <img src="data:image/png;base64,{{ chunk_split(base64_encode($estudiante->foto)) }}" height="80" width="70"> </div></td>
                  <td class="text-center Estilo20 Estilo16"><a href="modificar_estudiante?cedula_estudiante={{$estudiante->cedula}}" class="btn btn-info Estilo20 Estilo16">Modificar</a></td>
                </tr>
                @endforeach
                <tfoot>
                </tfoot>
              </table>
            </form>
          <p></p>
          <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      </tr>
    </table>
  </div>
@endsection