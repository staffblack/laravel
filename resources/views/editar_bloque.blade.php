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

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 0px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<script type="text/javascript">
<!--
function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
}
-->
</script>
@extends('layouts.plantilla')
<div class="container">
    <div class="row">
@section('content')
&nbsp;&nbsp;
    
           
            <div class="col-lg-10 panel"><br>
  <div style="overflow-x:auto;">
      <table width="100%" border="0" cellspacing="3">
        <tr>
          <td valign="top">
            <span class="Estilo30">
              <a href="nota_estudiante" class="btn btn-primary">Notas de Bloque  </a>
              <a href="materia_docentes?id_nivel={{$id_nivel}}&&descripcion_nivel={{$descripcion_nivel}}" class="btn btn-primary">{{$descripcion_nivel }}</a>
              <a href="estudiante_docentes?id_nivel={{$id_nivel}}&&descripcion_nivel={{$descripcion_nivel}}&&id_bloque={{$id_bloque}}&&nombre_bloque={{$nombre_bloque}}" class="btn btn-primary">{{$id_bloque.' '.$nombre_bloque}} </a> Editar </span>
          </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
          <form name="form1" method="post" action="/portal/public/ingresar_bloque">
          <p>{{ csrf_field() }}
            <input name="id_nivel" type="hidden" id="id_nivel" value="{{$id_nivel}}">
            <input type="hidden" name="descripcion_nivel" id="descripcion_nivel" value="{{$descripcion_nivel}}" >
            <input name="id_bloque" type="hidden" id="id_bloque" value="{{$id_bloque}}">
            <input name="nombre_bloque" type="hidden" id="nombre_nivel" value="{{$nombre_bloque}}" >
          <table width="100%" class="table table-striped table-bordered table-hover" id="tableMonedas">
            <thead>
              <tr>
                  <th width="10%" rowspan="2"><FONT SIZE=1>Cédula</FONT></th>
                <th width="10%" rowspan="2" ><FONT SIZE=1>Nombres</FONT></th>
                <th width="10%" rowspan="2" class="text-center Estilo20 Estilo16 Estilo4"><FONT SIZE=1>Apellidos</FONT></th>
                <th width="10%" colspan="6" class="text-center Estilo20 Estilo16 Estilo4"><FONT SIZE=1>{{$nombre_bloque}}</FONT></th>
                <th></th>
              </tr>
              <tr> @foreach($materias as $materia)
                <td class="text-center">
                    <span class="Estilo4 Estilo32">
                        <strong><FONT SIZE=1>{{$materia->nombre}}</FONT></strong></span></td>
                        
                @endforeach <td>DHI</td><td>Proyecto E</td><td>Observacion</td></tr>
            </thead>
            <tbody>
            
            @foreach($estudiantes as $estudiante)
            <tr>
              <td  class="text-center Estilo20 Estilo16 Estilo4"><FONT SIZE=1>{{$estudiante->cedula}}</FONT></td>
              <td  class="text-center"><span class="text-center Estilo20 Estilo16 Estilo4"><FONT SIZE=1>{{$estudiante->nombres}}</FONT></span></td>
              <td  class="text-center"><span class="text-center Estilo20 Estilo16 Estilo4"><FONT SIZE=1>{{$estudiante->apellidos}}</FONT></span></td>
              @foreach($materias as $materia)
              <td  class="text-center Estilo4"><input type="hidden" name="var" id="var" value="{{$var=''}}" >
                @foreach($notas as $nota)
                @if (($materia->id==$nota->id_materia) && ($estudiante->cedula==$nota->cedula_estudiante))
                <input type="hidden" name="var" id="var" value="{{$var=$nota->nota}}" >
                @endif
                @endforeach
                <input name="nota{{$estudiante->cedula}}{{$materia->id}}" id="nota{{$estudiante->cedula}}{{$materia->id}}" type="text" size="1" value="{{$var}}" maxlength="5" pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$">
                
                </td>
              
              @endforeach
              
              <?php 
              
              if(($niveles=='Octavo')or($niveles=='Noveno')or($niveles=='Decimo'))
              {
              
              ?>
            <td>
                <input name="notadhi{{$estudiante->cedula}}" id="notadhi{{$estudiante->cedula}}" type="text"></td>
            <td>
                <input name="notaproyecto{{$estudiante->cedula}}" id="notadhi{{$estudiante->cedula}}" type="text">
            </td>
            <td>
                <input name="notainforme{{$estudiante->cedula}}" id="notadhi{{$estudiante->cedula}}" type="text">
            </td>
            <?php 
              }
              ?>
            </tr>
            @endforeach
            <tfoot>
            </tfoot>
          </table>
        <p>
            <label>
            <input type="submit" name="Submit" value="Guardar">
            </label>
          </p>
        <p>&nbsp;</p>
      </form></td>
    </tr>
  </table>
</div>
  <p>&nbsp;</p>
</div>
 @endsection