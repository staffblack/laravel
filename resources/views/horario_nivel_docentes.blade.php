<style type="text/css">
<!--
.Estilo2 {color: #FF0000}
.Estilo3 {color: #000000}
-->
</style>
<div class="col-sm-12" id="encabezado" >
  
  <table width="1000" border="0" cellspacing="3">
    <tr>
      <td valign="top"><span class="Estilo30"><a href="horario_docente">Horario Docente </a></span></td>
    </tr>
    <tr>
      <td width="797" valign="top"><table width="770" lass="table table-striped table-bordered table-hover" id="tableMonedas">
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
          <td class="text-center"><a href="mostrar_horario_docente?id_nivel={{$nivel->id}}&&modalidad_nivel={{$nivel->modalidad}}&&descripcion_nivel={{$nivel->oferta.' '.$nivel->curso.' '.$nivel->paralelo}}" class="btn btn-info Estilo20 Estilo16">Horario</a></td>
        </tr>
        @endforeach
        <tfoot>
        </tfoot>
      </table></td>
    </tr>
  </table>
</div>
 