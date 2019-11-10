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
    &nbsp;&nbsp;
    <div class="col-lg-1" >
        &nbsp;
    </div>
            <div class="col-lg-9 panel panel-default">
  <table width="100%" border="0" cellspacing="3">
    <tr>
      <td valign="top"><span class="Estilo30"><a href="cronograma">Cronograma</a></span></td>
    </tr>
    <tr>
      <td width="797" valign="top"><form action="/portal/public/cronograma" method="post" enctype="multipart/form-data" name="form1">
        {{ csrf_field() }}
        <table width="402" class="table table-bordered" id="tableMonedas">
              
              <tr>
                <th class="text-center Estilo20 Estilo16"><div align="left"><strong>Fecha</strong></div></th>
                <th colspan="3" class="text-center Estilo20 Estilo16"><div align="left">
                    
                  <div align="left">
                    <input type="text" id="fecha_cronograma" name="fecha_cronograma" value="{{$fecha_cronograma}}" readonly="true">
                    <img src="/portal/public/images/calendario.png" name="lanzador" width="16" height="16" border="0" id="lanzador" title="fecha" onclick="calendario()" /> 
                    <input name="id_cronograma" type="hidden" id="id_cronograma" value="{{$id_cronograma}}">
                      </div></th>
              </tr>
              <tr>
                <th width="86" class="text-center Estilo20 Estilo16"><div align="left"><strong>Hora</strong></div></th>
                <th colspan="3" class="text-center Estilo20 Estilo16">
                    
                  <div align="left">
                        <select name="hora_cronograma" id="hora_cronograma">
                          <option value="{{$hora_cronograma}}">{{$hora_cronograma}}</option>
                          <option value="00:00">00:00</option>
                          <option value="00:30">00:30</option>
                          <option value="01:00">01:00</option>
                          <option value="01:30">01:30</option>
                          <option value="02:00">02:00</option>
                          <option value="02:30">02:30</option>
                          <option value="03:00">03:00</option>
                          <option value="03:30">03:30</option>
                          <option value="04:00">04:00</option>
                          <option value="04:30">04:30</option>
                          <option value="05:00">05:00</option>
                          <option value="05:30">05:30</option>
                          <option value="06:00">06:00</option>
                          <option value="06:30">06:30</option>
                          <option value="07:00" >07:00</option>
                          <option value="07:30">07:30</option>
                          <option value="08:00">08:00</option>
                          <option value="08:30">08:30</option>
                          <option value="09:00">09:00</option>
                          <option value="09:30">09:30</option>
                          <option value="10:00">10:00</option>
                          <option value="10:30">10:30</option>
                          <option value="11:00">11:00</option>
                          <option value="11:30">11:30</option>
                          <option value="12:00">12:00</option>
                          <option value="12:30">12:30</option>
                          <option value="13:00">13:00</option>
                          <option value="13:30">13:30</option>
                          <option value="14:00">14:00</option>
                          <option value="14:30">14:30</option>
                          <option value="15:00">15:00</option>
                          <option value="15:30">15:30</option>
                          <option value="16:00">16:00</option>
                          <option value="16:30">16:30</option>
                          <option value="17:00">17:00</option>
                          <option value="17:30">17:30</option>
                          <option value="18:00">18:00</option>
                          <option value="18:30">18:30</option>
                          <option value="19:00">19:00</option>
                          <option value="19:30">19:30</option>
                          <option value="20:00">20:00</option>
                          <option value="20:30">20:30</option>
                          <option value="21:00">21:00</option>
                          <option value="21:30">21:30</option>
                          <option value="22:00">22:00</option>
                          <option value="22:30">22:30</option>
                          <option value="23:00">23:00</option>
                          <option value="23:30">23:30</option>
                        </select>
                      <span class="Estilo31 Estilo39">*</span></div></th>
              </tr>
              <tr>
                <td class="Estilo16 Estilo20 text-center"><div align="left"><strong>Tipo</strong></div></td>
                <td colspan="3" class="text-center Estilo20 Estilo16">
                  
                     <div align="left">
                        <select name="tipo_cronograma" id="tipo_cronograma">
                          <option value="{{$tipo_cronograma}}">{{$tipo_cronograma}}</option>
                          <option value="Evento" >Evento</option>
                          <option value="Noticia">Noticia</option>
                          <option value="Actividad">Actividad</option>
                        </select>
                        <span class="Estilo31 Estilo39">*</span>
                       </label>
                </div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Nombre</strong></div></td>
                <td colspan="3" class="text-center Estilo20 Estilo16">
                  <div align="left">
                    <input name="nombre_cronograma" type="text" id="nombre_cronograma" value="{{$nombre_cronograma}}" size="40">
                  <span class="Estilo31 Estilo39">*</span></div></td>
              </tr>
              <tr>
                <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Descripción</strong></div></td>
                <td colspan="3" class="text-center Estilo20 Estilo16">
                    <label></label>                    <p align="left" class="Estilo31">
                      <textarea name="descripcion_cronograma" cols="60" rows="5" id="descripcion_cronograma">{{$descripcion_cronograma}}</textarea>
                </p></td>
              </tr>
              <tbody>
                <tr>
                  <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Responsable</strong></div></td>
                  <td colspan="3" class="text-center Estilo20 Estilo16">
                      <label>
                      <div align="left">
                        <input name="responsable_cronograma" type="text" id="responsable_cronograma" value="{{$responsable_cronograma}}" size="50">
                      </div>
                      </label>
                      <div align="left"><span class="Estilo31 Estilo39">*</span></div></td>
                </tr>
              <tfoot>
                <tr>
                  <th class="text-center Estilo20 Estilo16"><div align="left"><strong>Foto</strong></div></th>
                  <th width="229" class="text-center Estilo20 Estilo16"><div align="left"></div> <p align="left">
                    <input type="file" name="foto_cronograma" id="foto_cronograma"  >
                  </p></th>
                  <th width="71" class="text-center Estilo20 Estilo16"><div align="left"><img src="data:image/png;base64,{{ chunk_split(base64_encode($foto_cronograma)) }}" height="80" width="70"></div></th>
                </tr>
                <tr>
                  <th colspan="4" class="text-center Estilo20 Estilo16"><p class="text-center Estilo20 Estilo16 Estilo31"><span class="Estilo39">{{$mensaje}}</span><br>
                      <span class="Estilo40">
                    <input  name="opcion" type="submit" id="opcion"  value="Nuevo">
                    <input name="opcion" type="submit" id="opcion" value="Registrar" {{$registrar}}>
                    <input name="opcion" type="submit" id="opcion" value="Modificar" {{$modificar}}>
                    <input name="opcion" type="submit" id="opcion" value="Eliminar" {{$eliminar}}>
                      </span></p>                  </th>
                </tr>
              </tfoot>
            </table>
        <br>
        </form>
          <table width="840" border="1" cellspacing="0" class="table table-striped table-bordered table-hover" id="tableMonedas">
            <thead>
              <tr>
                <th colspan="8" class="text-center Estilo16 Estilo38">EVENTOS</th>
              </tr>
              <tr>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Fecha</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Hora</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Tipo</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Nombre</div></th>
                <th width="100" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Descripción</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Responsable</div></th>
                <th width="60" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Foto</div></th>
                <th width="46" class="text-center Estilo16 Estilo38">Modificar</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach($lista_eventos as $evento)
            <tr>
              <td class="Estilo16 Estilo20 text-center"><div align="left" class="Estilo38">{{$evento->fecha}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$evento->hora}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$evento->tipo}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$evento->nombre}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$evento->descripcion}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$evento->responsable}}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="center" class="Estilo38"> <img src="data:image/png;base64,{{ chunk_split(base64_encode($evento->foto)) }}" height="120'" width="150"> </div></td>
              <td class="text-center Estilo16 Estilo35 Estilo37"><a href="modificar_cronograma?id_cronograma={{$evento->id}}" class="btn btn-info Estilo16 Estilo38">Modificar</a></td>
            </tr>
            @endforeach
            <tfoot>
            </tfoot>
          </table>
        <p>&nbsp;</p>
        <table width="840" border="1" cellspacing="0" class="table table-striped table-bordered table-hover" id="tableMonedas">
            <thead>
              <tr>
                <th colspan="8" class="text-center Estilo16 Estilo38">NOTICIAS</th>
              </tr>
              <tr>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Fecha</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Hora</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Tipo</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Nombre</div></th>
                <th width="100" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Descripción</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Responsable</div></th>
                <th width="60" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Foto</div></th>
                <th width="46" class="text-center Estilo16 Estilo38">Modificar</th>
              </tr>
            </thead>
            <tbody>
            
          @foreach($lista_noticias as $noticia)
          <tr>
            <td class="Estilo16 Estilo20 text-center"><div align="left" class="Estilo38">{{$noticia->fecha}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$noticia->hora}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$noticia->tipo}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$noticia->nombre}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$noticia->descripcion}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$noticia->responsable}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="center" class="Estilo38"> <img src="data:image/png;base64,{{ chunk_split(base64_encode($noticia->foto)) }}" height="120'" width="150"> </div></td>
            <td class="text-center Estilo16 Estilo35 Estilo37"><a href="modificar_cronograma?id_cronograma={{$noticia->id}}" class="btn btn-info Estilo16 Estilo38">Modificar</a></td>
          </tr>
          @endforeach
          <tfoot>
          </tfoot>
          </table>
        <p>&nbsp;</p>
        <table width="840" border="1" cellspacing="0" class="table table-striped table-bordered table-hover" id="tableMonedas">
            <thead>
              <tr>
                <th colspan="8" class="text-center Estilo16 Estilo38">ACTIVIDADES</th>
              </tr>
              <tr>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Fecha</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Hora</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Tipo</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Nombre</div></th>
                <th width="100" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Descripción</div></th>
                <th width="50" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Responsable</div></th>
                <th width="60" class="text-center Estilo16 Estilo37"><div align="center" class="Estilo32 Estilo38">Foto</div></th>
                <th width="46" class="text-center Estilo16 Estilo38">Modificar</th>
              </tr>
            </thead>
            <tbody>
            
          @foreach($lista_actividades as $actividad)
          <tr>
            <td class="Estilo16 Estilo20 text-center"><div align="left" class="Estilo38">{{$actividad->fecha}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$actividad->hora}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$actividad->tipo}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$actividad->nombre}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$actividad->descripcion}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="left" class="Estilo38">{{$actividad->responsable}}</div></td>
            <td class="text-center Estilo20 Estilo16"><div align="center" class="Estilo38"> <img src="data:image/png;base64,{{ chunk_split(base64_encode($actividad->foto)) }}" height="120'" width="150"> </div></td>
            <td class="text-center Estilo16 Estilo35 Estilo37"><a href="modificar_cronograma?id_cronograma={{$actividad->id}}" class="btn btn-info Estilo16 Estilo38">Modificar</a></td>
          </tr>
          @endforeach
          <tfoot>
          </tfoot>
          </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
 
@endsection