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
<div class="container">
    <div class="row">
@section('content')
&nbsp;&nbsp;
    <div class="col-lg-1" >
        &nbsp;
    </div>
<div class="col-lg-9 panel panel-default">
  <table width="100%" border="0">
    <tr>
      <td class="Estilo30"><a href="docentes">Formularios</a></td>
    </tr>
    <tr>
      <td width="700" height="392"><form action="/portal/public/formulario" method="post" enctype="multipart/form-data" name="form1">
        {{ csrf_field() }}
        <table width="300"  border="1" class="table table-bordered"  >
              <thead>
                
                <tr>
                  <th width="63" class="text-center Estilo20 Estilo16"><div align="left" class="Estilo6">Nombre</div></th>
                  <th class="text-center Estilo20 Estilo16"><div align="left" class="Estilo6">
                      <label>
                      <input name="nombre_formulario" type="text" id="nombre_formulario" value="{{$nombre_formulario}}">
                      </label>
                      <span class="Estilo31 Estilo1">*</span>
                      <input name="id_formulario" type="hidden" id="id_formulario" value="{{$id_formulario}}" >
                      <input name="hidden" type="hidden" >
                  </div></th>
                </tr>
                </thead>
              <tbody>
              <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo6"><strong>Descripción</strong></div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo6">
                      <label>
                      <input name="descripcion_formulario" type="text" id="descripcion_formulario" value="{{$descripcion_formulario}}" size="50">
                      </label>
                      <span class="Estilo31 Estilo1">*</span></div></td>
              </tr>
              
              <tfoot>
                <tr>
                  <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo7"><strong>Documento</strong></div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo7">
                      <label></label>
                      <p class="Estilo31">
                        <input type="file" name="documento_formulario" class="Estilo16" id="documento_formulario" size="10" maxlength="10">
                      </p>
                  </div>                    <span class="text-center Estilo16 Estilo35 Estilo37">
                    <object data="data:application/pdf;base64,{{ chunk_split(base64_encode($documento_formulario)) }}" type="application/pdf" width="200" height="200" style="height:200px;width:200px">
                    </object>
                    </span></td>
                </tr>
                <tr>
                  <th colspan="2" class="text-center Estilo20 Estilo16 Estilo1 Estilo7">{{$mensaje}}<br>
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
            <table width="670" border="1" class="table table-striped table-bordered table-hover" >
              <thead>
                <tr>
                  <th width="168" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo5 Estilo6">Nombre</div></th>
                  <th width="192" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo5">Descripción</div></th>
				  <th width="200" class="text-center Estilo16 Estilo37 Estilo7"><div align="center">Documento</div></th>
				  <th width="82" class="text-center Estilo16 Estilo37 Estilo7"><div align="center">Modificar</div></th>
                </tr>
              </thead>
              <tbody>
              
              @foreach($formularios as $formulario)
              <tr>
                <td class="Estilo16 Estilo20 text-center"><div align="left" class="Estilo38 Estilo7">{{$formulario->nombre}}</div></td>
                <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38 Estilo7">{{$formulario->descripcion}}</div></td>
				<td class="text-center Estilo16 Estilo35 Estilo37"><object data="data:application/pdf;base64,{{ chunk_split(base64_encode($formulario->documento)) }}" type="application/pdf" width="200" height="200" style="height:200px;width:200px">
                </object></td>
				<td class="text-center Estilo16 Estilo35 Estilo37"><a href="modificar_formulario?id_formulario={{$formulario->id}}" class="btn btn-info Estilo20 Estilo16 Estilo7">Modificar</a></td>
              </tr>
              @endforeach
              <tfoot>
              </tfoot>
            </table>
          </form>        </td>
    </tr>
  </table>


@endsection