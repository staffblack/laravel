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
  border: 1px solid #ddd;
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
   <div class="col-lg-10">
                 <?php $cedula=session('login');
 include '../conexion3.php';
 
 $registros = mysqli_query($conexion, "select * FROM tutor_nivel as tutor INNER JOIN nivel_estudiante AS estudiante ON tutor.id_nivel=estudiante.id_nivel INNER JOIN docente AS doc ON doc.cedula= tutor.cedula_docente WHERE estudiante.cedula_estudiante='$cedula'" ) or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
	  $tutor=$reg['nombres'].''.$reg['apellidos'];
	  $nivel=$reg['id_nivel'];
  }
 ?>
<p align="center">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Ver Notas
            </a>
</p>
<div class="collapse" id="collapseExample2">
  
    <div class="col-lg-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapsebloque1" role="button" aria-expanded="false" aria-controls="collapseExample">
                Bloque 1
        </a>
        <div class="collapse" id="collapsebloque1">
            <br>
            
            <div style="overflow-x:auto;">
            <table class="table table-striped table-bordered table-hover">
             <tr>
            <td>#</td><td>Materia</td><td>Bloque</td><td>Nota</td><td>Alcance</td>
        </tr>
        <?php
        
        //echo 'Cedula:'.$cedula;
        include '../conexion3.php';
        $registros=mysqli_query($conexion,"select * from notas AS no INNER JOIN materia AS ma  ON no.id_materia=ma.id where no.cedula_estudiante='$cedula' and id_bloque = '1' ORDER BY ma.id ") or
  die("Problemas en el select:".mysqli_error($conexion));
$contador=0;
while ($reg=mysqli_fetch_array($registros))
{
    $contador=$contador+1;
    ?>
   
        <tr>
            <td><?php echo $contador;?></td><td><?php echo utf8_encode($reg['nombre']);?></td><td><?php echo 'Bloque '.$reg['id_bloque'];?></td><td><?php echo $reg['nota'];?></td><td><?php echo $reg['alcance'];?></td>
         
        </tr>
    
    <?php
    
    $bloque1=1;
}
        ?>
         </table>
                <br>
                <?php 
                if(isset($bloque1)){
                  ?>
                <a href="../public/pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=1&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-info">Imprimir Nota de Bloque 1 existe</a>
                  <?php
                }
                else{
                  ?>
                <a href="#" class="btn btn-info">Imprimir Nota de Bloque 1 no existe</a>
                  <?php  
                }
                ?>
                
        <br><hr>
            </div>        
        </div>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapsebloque2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Bloque 2
        </a>
		
        <div class="collapse" id="collapsebloque2">
            <div style="overflow-x:auto;">
            
            <table class="table">
             <tr>
            <td>#</td><td>Materia</td><td>Bloque</td><td>Nota</td><td>Alcance</td>
        </tr>
        <?php
        $cedula=session('login');
        echo 'Cedula:'.$cedula;
        include '../conexion3.php';
        $registros=mysqli_query($conexion,"select * from notas AS no INNER JOIN materia AS ma  ON no.id_materia=ma.id where no.cedula_estudiante='$cedula' and id_bloque = '2' ORDER BY ma.id ") or
  die("Problemas en el select:".mysqli_error($conexion));
$contador=0;
while ($reg=mysqli_fetch_array($registros))
{
    $contador=$contador+1;
    ?>
   
        <tr>
            <td><?php echo $contador;?></td>
			<td><?php echo utf8_encode($reg['nombre']);?></td><td><?php echo 'Bloque '.$reg['id_bloque'];?></td><td><?php echo $reg['nota'];?></td><td><?php echo $reg['alcance'];?></td>
                    
        </tr>
    
    <?php
    
    $bloque2=1;
}
        ?>
         </table>
                
                <?php 
                if(isset($bloque2)){
                  ?>
                <a href="../public/pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=2&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-info">Imprimir Nota de Bloque 1 existe</a>
                  <?php
                }
                else{
                  ?>
                <a href="#" class="btn btn-info">Imprimir Nota de Bloque 1 no existe</a>
                  <?php  
                }
                ?>
                
        </div>
            <hr>
        </div>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapsebloque3" role="button" aria-expanded="false" aria-controls="collapseExample">
                Bloque 3
        </a>
		
        
        <div class="collapse" id="collapsebloque3">
            
            <div style="overflow-x:auto;">
            <table class="table">
             <tr>
            <td>#</td><td>Materia</td><td>Bloque</td><td>Nota</td><td>Alcance</td>
        </tr>
        <?php
        $cedula=session('login');
        echo 'Cedula:'.$cedula;
        include '../conexion3.php';
        $registros=mysqli_query($conexion,"select * from notas AS no INNER JOIN materia AS ma  ON no.id_materia=ma.id where no.cedula_estudiante='$cedula' and id_bloque = '3' ORDER BY ma.id ") or
  die("Problemas en el select:".mysqli_error($conexion));
$contador=0;
while ($reg=mysqli_fetch_array($registros))
{
    $contador=$contador+1;
    ?>
   
        <tr>
            <td><?php echo $contador;?></td><td><?php echo utf8_encode($reg['nombre']);?></td><td><?php echo 'Bloque '.$reg['id_bloque'];?></td><td><?php echo $reg['nota'];?></td><td><?php echo $reg['alcance'];?></td>
			<td><a href="../../pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=3&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-default">Imprimir Nota Bloque</a></td>
        </tr>
    
    <?php
    
  $bloque3=1;  
}
        ?>
         </table>
                <?php 
                if(isset($bloque3)){
                  ?>
                <a href="../public/pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=3&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-info">Imprimir Nota de Bloque 1 existe</a>
                  <?php
                }
                else{
                  ?>
                <a href="#" class="btn btn-info">Imprimir Nota de Bloque 3 no existe</a>
                  <?php  
                }
                ?>
           </div>     
        </div>
        
        <a class="btn btn-primary" data-toggle="collapse" href="#collapsebloque4" role="button" aria-expanded="false" aria-controls="collapseExample">
                Bloque 4
        </a>
		
        <div class="collapse" id="collapsebloque4">
             <div style="overflow-x:auto;">
            <table class="table">
             <tr>
            <td>#</td><td>Materia</td><td>Bloque</td><td>Nota</td><td>Alcance</td>
        </tr>
        <?php
        $cedula=session('login');
        echo 'Cedula:'.$cedula;
        include '../conexion3.php';
        $registros=mysqli_query($conexion,"select * from notas AS no INNER JOIN materia AS ma  ON no.id_materia=ma.id where no.cedula_estudiante='$cedula' and id_bloque = '4' ORDER BY ma.id ") or
  die("Problemas en el select:".mysqli_error($conexion));
$contador=0;
while ($reg=mysqli_fetch_array($registros))
{
    $contador=$contador+1;
    ?>
   
        <tr>
            <td><?php echo $contador;?></td>
			<td><?php echo utf8_encode($reg['nombre']);?></td><td><?php echo 'Bloque '.$reg['id_bloque'];?></td>
			<td><?php echo $reg['nota'];?></td><td><?php echo $reg['alcance'];?></td>
			<td><a href="../../pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=4&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-default">Imprimir Nota Bloque</a></td>
        </tr>
    
    <?php
    
    $bloque4=1;
}
        ?>
         </table>
                 <?php 
                if(isset($bloque4)){
                  ?>
                <a href="../public/pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=4&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-info">Imprimir Nota de Bloque 1 existe</a>
                  <?php
                }
                else{
                  ?>
                <a href="#" class="btn btn-info">Imprimir Nota de Bloque 4 no existe</a>
                  <?php  
                }
                ?>
             </div>
        </div>
        
        <a class="btn btn-primary" data-toggle="collapse" href="#collapsebloque5" role="button" aria-expanded="false" aria-controls="collapseExample">
                Bloque 5
        </a>
		
        <div class="collapse" id="collapsebloque5">
            <div style="overflow-x:auto;">
            <table class="table">
             <tr>
            <td>#</td><td>Materia</td><td>Bloque</td><td>Nota</td><td>Alcance</td>
        </tr>
        <?php
        $cedula=session('login');
        echo 'Cedula:'.$cedula;
        include '../conexion3.php';
        $registros=mysqli_query($conexion,"select * from notas AS no INNER JOIN materia AS ma  ON no.id_materia=ma.id where no.cedula_estudiante='$cedula' and id_bloque = '5' ORDER BY ma.id ") or
  die("Problemas en el select:".mysqli_error($conexion));
$contador=0;
while ($reg=mysqli_fetch_array($registros))
{
    $contador=$contador+1;
    ?>
   
        <tr>
            <td><?php echo $contador;?></td>
			<td><?php echo utf8_encode($reg['nombre']);?></td>
			<td><?php echo 'Bloque '.$reg['id_bloque'];?></td>
			<td><?php echo $reg['nota'];?></td><td><?php echo $reg['alcance'];?></td>
			<td><a href="../../pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=5&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-default">Imprimir Nota Bloque</a></td>
        </tr>
    
    <?php
    
    $bloque5=1;
}
        ?>
         </table>
                
                <?php 
                if(isset($bloque5)){
                  ?>
                <a href="../public/pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=5&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-info">Imprimir Nota de Bloque 1 existe</a>
                  <?php
                }
                else{
                  ?>
                <a href="#" class="btn btn-info">Imprimir Nota de Bloque 5 no existe</a>
                  <?php  
                }
                ?>
            </div>
        </div>
        
        <a class="btn btn-primary" data-toggle="collapse" href="#collapsebloque6" role="button" aria-expanded="false" aria-controls="collapseExample">
                Bloque 6
        </a>
		
        <div class="collapse" id="collapsebloque6">
            <div style="overflow-x:auto;">
            <table class="table">
             <tr>
            <td>#</td><td>Materia</td><td>Bloque</td><td>Nota</td><td>Alcance</td>
        </tr>
        <?php
        $cedula=session('login');
        echo 'Cedula:'.$cedula;
        include '../conexion3.php';
        $registros=mysqli_query($conexion,"select * from notas AS no INNER JOIN materia AS ma  ON no.id_materia=ma.id where no.cedula_estudiante='$cedula' and id_bloque = '6' ORDER BY ma.id ") or
  die("Problemas en el select:".mysqli_error($conexion));
$contador=0;
while ($reg=mysqli_fetch_array($registros))
{
    $contador=$contador+1;
    ?>
   
        <tr>
            <td><?php echo $contador;?></td>
			<td><?php echo utf8_encode($reg['nombre']);?></td>
			<td><?php echo 'Bloque '.$reg['id_bloque'];?></td>
			<td><?php echo $reg['nota'];?></td><td><?php echo $reg['alcance'];?></td>
			<td><a href="../../pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=6&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-default">Imprimir Nota Bloque</a></td>
        </tr>
    
    <?php
    
    $bloque6=1;
}
        ?>
         </table>
                <?php 
                if(isset($bloque6)){
                  ?>
                <a href="../public/pdf/notas.php?nombretutor=<?php echo $tutor;?>&id_bloque=6&cedula=<?php echo $cedula;?>&nivel=<?php echo $nivel;?>" class="btn btn-info">Imprimir Nota de Bloque 1 existe</a>
                  <?php
                }
                else{
                  ?>
                <a href="#" class="btn btn-info">Imprimir Nota de Bloque 6 no existe</a>
                  <?php  
                }
                ?>
            </div> 
        </div>
        
    </div>   
        
    </div>
            </div>
        </div>
    </div>
@endsection
