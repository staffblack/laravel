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
@section('content')
<div class="col-lg-12 panel panel-default">
        <div class="card-header">Horario <?php echo  $horario->id;?></div><br>
               

                        <a href="a href="javascript:history.back()"" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        
                        <form method="POST" action="{{ url('horario' . '/' . $horario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            
                        </form>
                        <br/>
                        <br/>
<?php $id=$horario->cedula_docente;?>
                        <div class="table-responsive">
                            <table class="table">
    <thead>
      <tr>
        <th WIDTH="25%"></th>
        <th WIDTH="15%">Lunes</th>
        <th WIDTH="15%">Martes</th>
        <th WIDTH="15%">Miercoles</th>
        <th WIDTH="15%">Jueves</th>
        <th WIDTH="15%">Viernes</th>
      </tr>
    </thead>
    <tbody>
      
          <?php
          include '../conexion3.php';
          $hora=mysqli_query($conexion,"select * from hora") or
   die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($hora))
{
    

          ?>
        <tr >
        <td class="success"><?php echo $reg['hora_inicio'].' - '.$reg['hora_fin'];?></td>
        
        <td class="active">
        <?php
        //echo $id;
        $horaid=$reg['id'];
        $dia=1;
        $horario=mysqli_query($conexion,"SELECT ma.nombre FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$id' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre']);
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        <td class="warning">
            
            <?php
        $horaid=$reg['id'];
        $dia=2;
        $horario=mysqli_query($conexion,"SELECT ma.nombre FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$id' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre']);
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        <td class="active">
            <?php
        $horaid=$reg['id'];
        $dia=3;
        $horario=mysqli_query($conexion,"SELECT ma.nombre FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$id' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre']);
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        <td class="warning">
            <?php
        $horaid=$reg['id'];
        $dia=4;
        $horario=mysqli_query($conexion,"SELECT ma.nombre FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$id' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                   echo utf8_encode($h['nombre']);
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        <td class="active">
            <?php
        $horaid=$reg['id'];
        $dia=5;
        $horario=mysqli_query($conexion,"SELECT ma.nombre FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id WHERE ho.cedula_docente='$id' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre']);
                   
                }
                
                 if($reg['id']==5){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
                    
                    if($reg['id']==14){
                        echo 'Recreo';
                    }
                    else{
                        
                    }
        ?>
        </td>
        
       
        </tr>
        <?php
}          
          ?>
            
    </tbody>
  </table>
                        </div>

</div>               
@endsection
