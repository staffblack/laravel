


<div class="encabezado" id="encabezado" >
  <table border="1" cellspacing="0" class="table table-bordered" id="tableMonedas">
    <thead>
      <tr>
        <th colspan="6" class="text-center Estilo20 Estilo16">Horario de Clases </th>
      </tr>
      <tr>
        <th colspan="6" class="text-center Estilo20 Estilo16"><div align="left"></div></th>
      </tr>
      <tr>
        <th width="50" class="text-center Estilo20 Estilo16">Hora</th>
        <th width="50" class="text-center Estilo20 Estilo16">Lunes</th>
        <th width="50" class="text-center Estilo20 Estilo16">Martes</th>
        <th width="50" class="text-center Estilo20 Estilo16">Miércoles</th>
        <th width="50" class="text-center Estilo20 Estilo16">Jueves</th>
        <th width="50" class="text-center Estilo20 Estilo16">Viernes</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach($horas as $hora)
  <tr>
    <td class="Estilo16 Estilo20 text-center"><div align="center">{{$hora->nombre.' '.$hora->hora_inicio.' '.$hora->hora_fin }}</div></td>
    <td class="text-center Estilo20 Estilo16"><div align="center">@foreach($horarios as $horario)
      
      @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Lunes'))
      {{ $horario->nombre_materia.' '.$horario->oferta.' '.$horario->curso.' '.$horario->paralelo}}@endif
      @endforeach </div></td>
    <td class="text-center Estilo20 Estilo16"><div align="center">@foreach($horarios as $horario)
      
      @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Martes'))
      {{ $horario->nombre_materia.' '.$horario->oferta.' '.$horario->curso.' '.$horario->paralelo}}@endif
      @endforeach</div></td>
    <td class="text-center Estilo20 Estilo16"><div align="center">@foreach($horarios as $horario)
      
      @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Miércoles'))
      {{ $horario->nombre_materia.' '.$horario->oferta.' '.$horario->curso.' '.$horario->paralelo}}  
      
      @endif
      @endforeach</div></td>
    <td class="text-center"><div align="center">@foreach($horarios as $horario)
      
      @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Jueves'))
      {{ $horario->nombre_materia.' '.$horario->oferta.' '.$horario->curso.' '.$horario->paralelo}}@endif
      @endforeach </div></td>
    <td class="text-center"><div align="center">@foreach($horarios as $horario)
      
      @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Viernes'))
      {{ $horario->nombre_materia.' '.$horario->oferta.' '.$horario->curso.' '.$horario->paralelo}} 
      
      @endif
      @endforeach </div></td>
  </tr>
    @endforeach
  <tfoot>
  </tfoot>
  </table>
  <p>&nbsp;</p>
</div>
  