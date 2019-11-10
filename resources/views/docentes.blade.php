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
            <br>
        <div class="panel panel-default col-lg-12 widget-header">
  <table width="1000" border="0">
    <tr>
      <td class="Estilo30"><a href="docentes">Docentes</a></td>
    </tr>
    <tr>
      <td width="700"><form action="/portal/public/docentes" method="post" enctype="multipart/form-data" name="form1">
        {{ csrf_field() }}
        <table width="300"  border="1" class="table table-bordered"  >
              <thead>
                
                <tr>
                  <th width="63" class="text-center Estilo20 Estilo16"><div align="left">Cédula</div></th>
                  <th colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                      <label>
                      <input name="cedula_docente" type="text" id="cedula_docente" value="{{$cedula_docente}}">
                      </label>
                      <span class="Estilo31 Estilo1">*</span>
                      <input name="opcion" type="submit" id="opcion" value="Buscar">
                      <input name="hidden2" type="hidden" >
                      <input name="hidden" type="hidden" >
                  </div></th>
                </tr>
                </thead>
              <tbody>
              <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Grado</strong></div></td>
                  <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                      <label>
                      <input name="grado_docente" type="text" id="grado_docente" value="{{$grado_docente}}" size="50">
                      </label>
                      <span class="Estilo31 Estilo1">*</span></div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Nombres</strong></div></td>
                <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                    <label>
                    <input name="nombres_docente" type="text" id="nombres_docente" value="{{$nombres_docente}}" size="50">
                    </label>
                    <span class="Estilo31 Estilo1">*</span></div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Apellidos</strong></div></td>
                <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                    <label>
                    <input name="apellidos_docente" type="text" id="apellidos_docente" value="{{$apellidos_docente}}" size="50">
                    </label>
                    <span class="Estilo31 Estilo1">*</span></div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>E-mail</strong></div></td>
                <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                    <label>
                    <input name="email_docente" type="text" id="email_docente" value="{{$email_docente}}" size="50">
                    </label>
                    <span class="Estilo31 Estilo1">*</span></div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Telefono</strong></div></td>
                <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                    <label>
                    <input name="telefono_docente" type="text" id="telefono_docente" value="{{$telefono_docente}}" size="10">
                    </label>
                    <span class="Estilo31 Estilo1">*</span></div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Cargo</strong></div></td>
                <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                  <select name="cargo_docente" id="cargo_docente">
                    <option value="{{$cargo_docente}}">{{$cargo_docente}}</option>
                    <option value="DOCENTE">DOCENTE</option>
                    <option value="RECTOR">RECTOR</option>
                    <option value="RECTORA">RECTORA</option>
                    <option value="VICERRECTOR">VICERRECTOR</option>
                    <option value="VICERRECTORA">VICERRECTORA</option>
                    <option value="INSPECTOR GENERAL">INSPECTOR GENERAL</option>
                    <option value="INSPECTORA GENERAL">INSPECTORA GENERAL</option>
                    <option value="JEFE DE ÁREA">JEFE DE ÁREA</option>
                    <option value="SUB JEFE DE ÁREA">SUB JEFE DE ÁREA</option>
                  </select>
                </div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Área</strong></div></td>
                <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                  <select name="area_docente" id="area_docente">
                    <option value="{{$area_docente}}">{{$area_docente}}</option>
                    <option value="LENGUA Y LITERATURA">LENGUA Y LITERATURA</option>
                    <option value="MATEMÁTICAS">MATEMÁTICAS</option>
                    <option value="CIENCIAS NATURALES">CIENCIAS NATURALES</option>
                    <option value="EDUCACIÓN FÍSICA">EDUCACIÓN FÍSICA</option>
                    <option value="INGLÉS">INGLÉS</option>
                    <option value="CULTURA ESTÉTICA">CULTURA ESTÉTICA</option>
                    <option value="CIENCIAS SOCIALES">CIENCIAS SOCIALES</option>
                  </select>
                </div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Password</strong></div></td>
                <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                    <label>
                    <input name="password_docente" type="text" id="password_docente" value="{{$password_docente}}" size="20" maxlength="20">
                    </label>
                </div></td>
              </tr>
              <tfoot>
                <tr>
                  <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Foto</strong></div></td>
                  <td colspan="3" class="text-center Estilo20 Estilo16"><div align="left">
                      <label></label>
                      <p class="Estilo31">
                        <input type="file" name="foto_docente" class="Estilo16" id="foto_docente" size="10" maxlength="10">
                      </p>
                  </div></td>
                  <td width="201" class="text-center Estilo20 Estilo16"><img src="data:image/png;base64,{{ chunk_split(base64_encode($foto_docente)) }}" height="80" width="70"></td>
                </tr>
                <tr>
                  <th colspan="5" class="text-center Estilo20 Estilo16 Estilo1">{{$mensaje}}<br>
                    <span class="text-center Estilo20 Estilo16 Estilo8">
                    <input name="opcion" type="submit" id="opcion" value="Nuevo" {{$nuevo}} >
                    <input name="opcion" type="submit" id="opcion" value="Registrar" {{$registrar}}>
                    <input name="opcion" type="submit" id="opcion" value="Modificar" {{$modificar}}>
                    <input name="opcion" type="submit" id="opcion" value="Eliminar" {{$eliminar}}>
                  </span></th>
                </tr>
              </tfoot>
            </table>
      </form>
          <form name="form1" method="post" action="">
            <p>&nbsp;</p>
        <table width="769" border="1" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th width="89" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo5 Estilo6">Cédula</div></th>
                  <th width="86" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo5">Grado</div></th>
				  <th width="91" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo5">Nombres</div></th>
                  <th width="100" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo5">Apellidos</div></th>
			      <th width="101" class="text-center Estilo16 Estilo35 Estilo37"><div align="center" class="Estilo5">Password</div></th>
                  <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo5">Foto</div></th>
                  <th width="43" class="text-center Estilo16 Estilo37 Estilo7">Modificar</th>
                </tr>
              </thead>
              <tbody>
              
              @foreach($docentes as $docente)
              <tr>
                <td class="Estilo16 Estilo20 text-center"><div align="left" class="Estilo38 Estilo7">{{$docente->cedula}}</div></td>
                <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38 Estilo7">{{$docente->grado}}</div></td>
				<td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38 Estilo7">{{$docente->nombres }}</div></td>
                <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38 Estilo7">{{$docente->apellidos}}</div></td>
			    <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38 Estilo7">{{$docente->password}}</div></td>
                <td class="text-center Estilo20 Estilo16"><div align="center" class="Estilo38 Estilo7"> <img src="data:image/png;base64,{{ chunk_split(base64_encode($docente->foto)) }}" height="60" width="50"> </div></td>
                <td class="text-center Estilo16 Estilo35 Estilo37"><a href="modificar_docente?cedula_docente={{$docente->cedula}}" class="btn btn-info Estilo20 Estilo16 Estilo7">Modificar</a></td>
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


@endsection