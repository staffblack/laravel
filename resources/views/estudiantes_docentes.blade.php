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

@extends('layouts.plantilla')
<div class="container">
    <div class="row">
@section('content')
&nbsp;&nbsp;
    
 <?php
if(isset($mensaje))
{
    $accion=$mensaje;
}
else
{
    $accion='';
}

if($accion=='creado'){
   ?>
<script>
alert("Creado Satisfactoriamente");
</script> 
 <?php
    }
if($accion=='editado'){
   ?>
<script>
alert("Editado Satisfactoriamente");
</script> 
 <?php
    
    
}
?>          
<div class="col-lg-12"><br>
    <div class="col-lg-12 panel panel-default">
        <a href="nota_estudiante" class="btn btn-primary">Notas de Bloque </a>
    </div>
   
    <?php 
    include '../conexion3.php';
    $modalidad=mysqli_query($conexion,"select * from nivel where id='$id_nivel'") or
                    die("Problemas en el select:".mysqli_error($conexion));

                  if ($mod=mysqli_fetch_array($modalidad))
                  {
                    $nmodalidad=$mod['modalidad'];
                  }
    ?>
    <div class="col-lg-12 panel panel-default">
        <a href="editar_bloque?id_nivel={{$id_nivel}}&modalidad_nivel=<?php echo $nmodalidad;?>&descripcion_nivel={{$descripcion_nivel}}&&id_bloque={{$id_bloque}}&&nombre_bloque={{$nombre_bloque}}&&numnota=1" class="btn btn-primary">Editar {{$nombre_bloque}}</a>
    
    </div>
    <div class="table-responsive">
        <table class="table">
            <tbody>
           <tr>   
               <?php
               $nombretutor=session('nombres_usuario').''.session('apellidos_usuario');
               ?>
          @foreach($estudiantes as $estudiante)
              

             </tr>
          @endforeach
          
          </table>
          

          <div style="overflow-x:auto;">
  <table class="table">
    <tr>
      <th>Cédula</th>
      <th >Nombres</th>
      <th>Apellidos</th>
      
       @foreach($materias as $materia)
                <th align="center">
                   
                                {{$materia->nombre}}
                  
                
                </th>
                @endforeach 
              
    </tr>
     <tr>   
               <?php
               $nombretutor=session('nombres_usuario').' '.session('apellidos_usuario');
               ?>
          @foreach($estudiantes as $estudiante)
          
              <td >
                <a href="pdf/notas.php?nombretutor={{$nombretutor}}&id_bloque={{$_REQUEST['id_bloque']}}&cedula={{$estudiante->cedula}}&modalidad=<?php echo $nmodalidad;?>&nivel=<?php echo $_REQUEST['id_nivel']?>">
                  <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: red">
                  </i>
                </a>&nbsp;&nbsp;&nbsp;{{$estudiante->cedula}}</td>
              <td class="text-center">
                <span class="text-center">
                  
                    {{$estudiante->nombres}}
                 </span>
              </td>
              <td class="text-center">
                <span class="text-center">
                  {{$estudiante->apellidos}}
                </span>
              </td>
                @foreach($materias as $materia)
              <td class="text-center">
                <div align="center">@foreach($notas as $nota)
              @if (($materia->id==$nota->id_materia) && ($estudiante->cedula==$nota->cedula_estudiante))
              
              <?php
              include '../conexion3.php';
              $registros=mysqli_query($conexion,"select * from notas where id_materia='$materia->id' and cedula_estudiante= '$estudiante->cedula'") or
                    die("Problemas en el select:".mysqli_error($conexion));

                  if ($reg=mysqli_fetch_array($registros))
                  {
                      echo $reg['nota'].'<br>';
                  }
              ?>
              @endif
              @endforeach </div>
            </td>
            @endforeach </tr>
          @endforeach
  </table>
</div>
      
  </div>
  <p>&nbsp;</p>
    </div>
</div>
@endsection