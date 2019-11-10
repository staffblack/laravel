 <style type="text/css">
<!--
.Estilo2 {color: #FF0000}
.Estilo3 {color: #000000}
-->
</style>
@extends('plantilla')
@section('content')


<div class="encabezado" id="encabezado" >
  <table width="1000" border="0" cellspacing="3">
    <tr>
      <td valign="top"><span class="Estilo30"><a href="horario_docente">Horario Docente </a>-&gt; <span class="Estilo16">{{$id_nivel.' '. $descripcion_nivel }}</span></span></td>
    </tr>
    <tr>
      <td width="797" valign="top"><p>&nbsp;</p>
          <table border="1" cellspacing="0" class="table table-bordered" id="tableMonedas">
            <thead>
              <tr>
                <th width="157" class="text-center Estilo20 Estilo16">Hora</th>
                <th width="331" class="text-center Estilo20 Estilo16">Lunes</th>
                <th width="331" class="text-center Estilo20 Estilo16">Martes</th>
                <th width="331" class="text-center Estilo20 Estilo16">Miércoles</th>
                <th width="280" class="text-center Estilo20 Estilo16">Jueves</th>
                <th width="284" class="text-center Estilo20 Estilo16">Viernes</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach($horas as $hora)
            <tr>
              <td class="Estilo16 Estilo20 text-center"><div align="center">{{$hora->nombre.' '.$hora->hora_inicio.' '.$hora->hora_fin }}</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="center">@foreach($horarios as $horario)
                
                @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Lunes'))
                {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}  @endif
                @endforeach </div></td>
              <td class="text-center Estilo20 Estilo16"><div align="center">@foreach($horarios as $horario)
                
                @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Martes'))
                {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}  @endif
                @endforeach</div></td>
              <td class="text-center Estilo20 Estilo16"><div align="center">@foreach($horarios as $horario)
                
                @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Miércoles'))
                {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}  @endif
                @endforeach</div></td>
              <td class="text-center"><div align="center">@foreach($horarios as $horario)
                
                @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Jueves'))
                {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}  @endif
                @endforeach </div></td>
              <td class="text-center"><div align="center">@foreach($horarios as $horario)
                
                @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Viernes'))
                {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}  @endif
                @endforeach </div></td>
            </tr>
            @endforeach
            <tfoot>
            </tfoot>
          </table>
        <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
 @endsection