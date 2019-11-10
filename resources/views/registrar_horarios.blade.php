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
<?php
if(isset($mensaje))
{
    $accion=$mensaje;
}
else
{
    $accion='';
}

if(isset($_REQUEST['si']))
{
     ?>
        <script>
        alert("Horario Editado Satisfactoriamente");
        </script> 
 <?php
}

if($accion=='registrado'){
   ?>
<script>
alert("Registrado Satisfactoriamente");
</script> 
 <?php
    }
if($accion=='editado'){
   ?>
<script>
alert("Horario Editado Satisfactoriamente");
</script> 
 <?php
    
    
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@extends('layouts.plantilla')
@section('content')
    <div class="col-lg-12 panel">
        <table width="100%" border="0">
            <tr>
                <td class="Estilo30"><a href="javascript:history.back()" class="btn btn-primary"> Volver Atrás</a>&nbsp;&nbsp;&nbsp;<span class="Estilo16">{{$descripcion_nivel}}</span></td>
            </tr>
            <tr>
                <td width="778">
                    <form name="form1" method="post" action="/portal/public/horarios">
                    <p>{{ csrf_field() }} </p>
          <table width="100%" class="table table-striped table-bordered table-hover" id="tableMonedas">
              
                <tr>
                  <th colspan="3" class="text-center Estilo20 Estilo16">Responsable Nivel </th>
                </tr>
                <tr>
                  <th width="98" class="text-center Estilo20 Estilo16"><div align="left">Responsable</div></th>
                  <th width="320" class="text-center Estilo20 Estilo16"><select name="cedula_tutor" id="cedula_tutor">
                    
                      
                      
                          
		  @foreach($docentes as $docente)
        
        
                          
                      
                      
                    <option value="{{$docente->cedula}}">{{$docente->nombres.' '.$docente->apellidos }}</option>
                    
                      
                      
                          
		 @endforeach
        
                        
                    
                    
                  </select>                  </th>
                  <th width="180" class="text-center Estilo20 Estilo16">
                      <input name="opcion" type="submit" id="opcion" value="Registrar Responsable" class="btn btn-primary"></th>
                </tr>
              <tbody>
              <tfoot>
              </tfoot>
          </table>
          <br>
            <table width="807" class="table table-striped table-bordered table-hover" id="tableMonedas">
              
                <tr>
                  <td colspan="3" class="text-center Estilo20 Estilo16"><input type="hidden" name="nivel" id="nivel" value="{{$id_nivel}}" >
                      <input type="hidden" name="modalidad_nivel" id="modalidad_nivel" value="{{$modalidad_nivel}}" >
                      <input type="hidden" name="descripcion_nivel" id="descripcion_nivel" value="{{$descripcion_nivel}}" >
                    Horario de Clases </td>
                </tr>
                <tr>
                  <th class="text-center Estilo20 Estilo16"><div align="left">Responsable</div></th>
                  <th colspan="2" class="text-center Estilo20 Estilo16"><div align="left"> @foreach($tutores as $tutor)
                    {{$tutor->nombres.' '.$tutor->apellidos}}
                    
                    @endforeach </div></th>
                </tr>
                <tr>
                  <th width="133" class="text-center Estilo20 Estilo16"><div align="left">Día</div></th>
                  <th colspan="2" class="text-center Estilo20 Estilo16"><div align="left">
                      <select name="dia" id="dia">
                        
                        
                      
	  @foreach($dias as $dia)
        
        
                      
                        
                        <option value="{{$dia->id}}">{{$dia->nombre}}</option>
                        
                        
                      
		 @endforeach
      
                    
                      
                      </select>
                  </div></th>
                </tr>
              <tbody>
                <tr>
                  <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Hora</strong></div></td>
                  <td colspan="2" class="text-center Estilo20 Estilo16"><div align="left">
                    <select name="hora" id="hora">
                      
                    
      
                        
                      
	  @foreach($horas as $hora)
        
        
                      
                        
      
                    
                      <option value="{{$hora->id}}">{{$hora->numero.' '.$hora->nombre.' '.$hora->hora_inicio.' '.$hora->hora_fin}}</option>
                      
                    
      
                        
                      
		 @endforeach
      
                    
                      
    
                  
                    </select>
                  </div></td>
                </tr>
                <tr>
                  <td class="Estilo16 Estilo20 text-center"><div align="left"><strong>Materia</strong></div></td>
                  <td colspan="2" class="text-center Estilo20 Estilo16"><div align="left">
                      <select name="materia" id="materia">
                        
          
	  @foreach($materias as $materia)
        
        
          
                        <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                        
          
		 @endforeach
      
        
                      </select>
                  </div></td>
                </tr>
              <tfoot>
                <tr>
                  <th class="text-center Estilo20 Estilo16"><div align="left">Docente</div></th>
                  <th colspan="2" class="text-center Estilo20 Estilo16"> <div align="left">
                      <select name="docente" id="docente">
                        
            
		  @foreach($docentes as $docente)
        
        
            
                        <option value="{{$docente->cedula}}">{{$docente->nombres.' '.$docente->apellidos }}</option>
                        
            
		 @endforeach
        
          
                      </select>
                  </div></th>
                </tr>
                <tr>
                  <th class="text-center Estilo20 Estilo16">&nbsp;</th>
                  <th width="377" class="text-center Estilo20 Estilo16"><div align="left">
                      <input name="opcion" type="submit" id="opcion" value="Registrar Horario" class="btn btn-primary">
                      <input name="id_nivel" type="hidden" value="<?php echo $_REQUEST['id_nivel']?>">
                </div></th>
                  <th width="281" class="text-center Estilo20 Estilo16"><a href="mostrar_horario_nivel?id_nivel={{$id_nivel}}&&modalidad_nivel={{$modalidad_nivel}}&&descripcion_nivel={{$descripcion_nivel}}" target="_blank">Ver Horario </a></th>
                </tr>
              </tfoot>
            </table>
          <p>&nbsp;</p>
        </form>
            <table width="100%" border="1" cellspacing="0" class="table table-striped table-bordered table-hover"  id="tableMonedas">
              
                <tr>
                  <th class="text-center Estilo16 Estilo33">&nbsp;</th>
                  <th colspan="5" class="text-center Estilo16 Estilo33">Horario {{$descripcion_nivel}} </th>
                </tr>
                <tr>
                  <th width="10%" class="text-center Estilo16 Estilo33">Hora</th>
                  <th width="15%" class="text-center Estilo16 Estilo33">Lunes</th>
                  <th width="15%" class="text-center Estilo16 Estilo33">Martes</th>
                  <th width="15%" class="text-center Estilo16 Estilo33">Miércoles</th>
                  <th width="15%" class="text-center Estilo16 Estilo33">Jueves</th>
                  <th width="15%" class="text-center Estilo16 Estilo33">Viernes</th>
                </tr>
              <tbody>              
              @foreach($horas as $hora)
              <tr>
                <td class="Estilo16 Estilo20 text-center"><div align="center" class="Estilo33">{{$hora->nombre.' '.$hora->hora_inicio.' '.$hora->hora_fin }}</div></td>
                <td class="text-center Estilo20 Estilo16">
                    <div align="center" class="Estilo33">
                    @foreach($horarios as $horario)
                        @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Lunes'))
                            {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}
                            
                            <br>
                                
                  <a href="horarion/{{$horario->id}}/edit" class="btn btn-default"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>&nbsp;&nbsp;
                  <form method="POST" action="{{ url('/horarion' . '/' . $horario->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id_nivel" value="<?php echo $_REQUEST['id_nivel']?>">
                                                <button type="submit" class="btn btn-default" title="Delete Horarion" onclick="return confirm(&quot;Confirm delete?&quot;)">&nbsp;<i class="fa fa-trash" style="font-size:24px;color:red"></i>&nbsp;</button>
                    </form>
                  @endif
                  @endforeach  
                    </div> 
                </td>
                <td class="text-center Estilo20 Estilo16">
                    <div align="center" class="Estilo33">
                    @foreach($horarios as $horario)
                        @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Martes'))
                            {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}
                            
                            <br>
                                
                  <a href="horarion/{{$horario->id}}/edit" class="btn btn-default"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>&nbsp;&nbsp;
                  <form method="POST" action="{{ url('/horarion' . '/' . $horario->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id_nivel" value="<?php echo $_REQUEST['id_nivel']?>">
                                                <button type="submit" class="btn btn-default" title="Delete Horarion" onclick="return confirm(&quot;Confirm delete?&quot;)">&nbsp;<i class="fa fa-trash" style="font-size:24px;color:red"></i>&nbsp;</button>
                    </form>
                  @endif
                  @endforeach  
                    </div> </td>
                <td class="text-center Estilo20 Estilo16">
                    <div align="center" class="Estilo33">
                    @foreach($horarios as $horario)
                        @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Miércoles'))
                            {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}
                            
                            <br>
                                
                  <a href="horarion/{{$horario->id}}/edit" class="btn btn-default"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>&nbsp;&nbsp;
                  <form method="POST" action="{{ url('/horarion' . '/' . $horario->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id_nivel" value="<?php echo $_REQUEST['id_nivel']?>">
                                                <button type="submit" class="btn btn-default" title="Delete Horarion" onclick="return confirm(&quot;Confirm delete?&quot;)">&nbsp;<i class="fa fa-trash" style="font-size:24px;color:red"></i>&nbsp;</button>
                    </form>
                  @endif
                  @endforeach  
                    </div>  
                
                </td>
                <td class="text-center">
                    <div align="center" class="Estilo33">
                    @foreach($horarios as $horario)
                        @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Jueves'))
                            {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}
                            
                            <br>
                                
                  <a href="horarion/{{$horario->id}}/edit" class="btn btn-default"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>&nbsp;&nbsp;
                  <form method="POST" action="{{ url('/horarion' . '/' . $horario->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id_nivel" value="<?php echo $_REQUEST['id_nivel']?>">
                                                <button type="submit" class="btn btn-default" title="Delete Horarion" onclick="return confirm(&quot;Confirm delete?&quot;)">&nbsp;<i class="fa fa-trash" style="font-size:24px;color:red"></i>&nbsp;</button>
                    </form>
                  @endif
                  @endforeach  
                    </div> 
                </td>
                <td class="text-center">
                    <div align="center" class="Estilo33">
                    @foreach($horarios as $horario)
                        @if (($hora->nombre==$horario->nombre_hora) && ($horario->nombre_dia=='Viernes'))
                            {{ $horario->nombre_materia.' '.$horario->grado.' '.$horario->nombre_docente.' '.$horario->apellido_docente}}
                            
                            <br>
                                
                  <a href="horarion/{{$horario->id}}/edit" class="btn btn-default"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>&nbsp;&nbsp;
                  <form method="POST" action="{{ url('/horarion' . '/' . $horario->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id_nivel" value="<?php echo $_REQUEST['id_nivel']?>">
                                                <button type="submit" class="btn btn-default" title="Delete Horarion" onclick="return confirm(&quot;Confirm delete?&quot;)">&nbsp;<i class="fa fa-trash" style="font-size:24px;color:red"></i>&nbsp;</button>
                    </form>
                  @endif
                  @endforeach  
                    </div>
                </td>
              </tr>
              @endforeach
              <tfoot>
              </tfoot>
          </table>
          <p></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
    </table>
  </div>
@endsection