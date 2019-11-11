<?php
$page='notas_bloque';
include '../conexion3.php';
?>
<style type="text/css">




body {
  color: #6a6c6f;
  background-color: #f1f3f6;
  margin-top: 30px;
}

.container {
  max-width: 960px;
}

.panel-default>.panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #e4e5e7;
  padding: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.panel-default>.panel-heading a {
  display: block;
  padding: 10px 15px;
}

.panel-default>.panel-heading a:after {
  content: "";
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;
}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #eee;
}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\2212";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\002b";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.accordion-option {
  width: 100%;
  float: left;
  clear: both;
  margin: 15px 0;
}

.accordion-option .title {
  font-size: 20px;
  font-weight: bold;
  float: left;
  padding: 0;
  margin: 0;
}

.accordion-option .toggle-accordion {
  float: right;
  font-size: 16px;
  color: #6a6c6f;
}

.accordion-option .toggle-accordion:before {
  content: "Expand All";
}

.accordion-option .toggle-accordion.active:before {
  content: "Collapse All";
}












.Estilo2 {color: #FF0000}
.Estilo3 {color: #000000}
.Estilo4 {font-size: 12px}
.Estilo5 {font-size: 12}
.Estilo7 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo8 {font-family: Verdana, Arial, Helvetica, sans-serif}
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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php
if(isset($_REQUEST['accion']))
{
    $accion=$_REQUEST['accion'];
}
else
{
    $accion='';
}

if($accion=='inicio'){
   ?>
<script>
alert("A iniciado la session Satisfactoriamente");
</script> 





<script>
$(document).ready(function() {

$(".toggle-accordion").on("click", function() {
  var accordionId = $(this).attr("accordion-id"),
    numPanelOpen = $(accordionId + ' .collapse.in').length;
  
  $(this).toggleClass("active");

  if (numPanelOpen == 0) {
    openAllPanels(accordionId);
  } else {
    closeAllPanels(accordionId);
  }
})

openAllPanels = function(aId) {
  console.log("setAllPanelOpen");
  $(aId + ' .panel-collapse:not(".in")').collapse('show');
}
closeAllPanels = function(aId) {
  console.log("setAllPanelclose");
  $(aId + ' .panel-collapse.in').collapse('hide');
}
   
});    
</script> 
 <?php
    
    
}
?>

<div class="container">
    <div class="row">
@extends('plantilla')
@section('content')
<div class="col-md-12">
    <?php //col-md-3 lin 56?>





<div class="col-md-12 panel"><?php //col-md-12 lin 55?>
    <div class="container">
               
                    <div class="col-sm-12">
                       <h3><?php
                       if(isset($_REQUEST['paralelo']))
                                {
                                    echo 'Curso: '.$_REQUEST['curso'].' '.$_REQUEST['paralelo'];
                                    $nivel=$_REQUEST['nivel'];
                                }
                                else{
                                    $nivel="";
                                }
                        include '../conexion3.php';
                        $tutor=mysqli_query($conexion,"select * from tutor_nivel AS tn INNER JOIN docente AS do ON tn.cedula_docente=do.cedula  WHERE tn.id_nivel='$nivel' ") or
                               die("Problemas en el select:".mysqli_error($conexion));

                            if ($tn=mysqli_fetch_array($tutor))
                            {
                                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutor(a):'.utf8_encode($tn['nombres'].' '.$tn['apellidos']);
                            }
                       ?>
                       </h3>
                    </div>
                    <table class="table">
                    </table>
                    <div style="overflow-x:auto;">
                    
                        <table class="table">
                            <thead>
                                <?php
                                
                                if(isset($_REQUEST['curso']))
                                {
                                    $var_curso=1;
                                }
                                else{
                                    $var_curso=0;
                                }
                                if(isset($_REQUEST['paralelo']))
                                {
                                    $var_paralelo=1;
                                }
                                else{
                                    $var_paralelo=0;
                                }
                                if(isset($_REQUEST['modalidad']))
                                    {
                                        $modalidad=$_REQUEST['modalidad'];
                                    }
                                    else
                                    {
                                        $modalidad='Bachillerato General Unificado';
                                    }
                                    if(($var_curso==1)&&($var_paralelo==1) ){
                                       ?>
                                        <table class="table">
                            <thead>
                                <?php
                                if(isset($_REQUEST['modalidad']))
                                    {
                                        $modalidad=$_REQUEST['modalidad'];
                                    }
                                    else
                                    {
                                        $modalidad='Bachillerato General Unificado';
                                    }
                                    if(isset($_REQUEST['modalidad'])){
                                       ?>
                                        <tr>
                                <th WIDTH="25%"></th>
                                <th WIDTH="15%">Lunes</th>
                                <th WIDTH="15%">Martes</th>
                                <th WIDTH="15%">Miercoles</th>
                                <th WIDTH="15%">Jueves</th>
                                <th WIDTH="15%">Viernes</th>
                              </tr>
                                     <?php
                                        
                                    }
                                    else{
                                        ?>
                              <div class="panel-group" id="accordion">
                        
                        
                    </div>
                                        <?php
                                        
                                    }
                                ?>
                              
                            </thead>
                                <tbody>

                                    <?php
                                    
                                       include '../conexion3.php';
                                      $hora=mysqli_query($conexion,"select * from hora WHERE modalidad='$modalidad' and adicional='0' ") or
                               die("Problemas en el select:".mysqli_error($conexion));

                            while ($reg=mysqli_fetch_array($hora))
                            {

                                //condicional para bachillerato internacional
                                if(($nivel==34)or($nivel==37))
                                {
                                   // echo 'Mostrar'.$nivel;
                                }
                                else{
                                   // echo 'Ocultar'.$nivel;
                                }
                                      ?>
                                    <tr >
        <td class="success"><?php echo $reg['hora_inicio'].' - '.$reg['hora_fin'];?></td>
        <?php 
        
        ?>
        <td class="active">
        <?php
        $horaid=$reg['id'];
        $dia=1;
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre'].'<br>');
                    echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);
                   
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
                    if($reg['id']==19){
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
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre'].'<br>');
                    echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);
                   
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
                    if($reg['id']==19){
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
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre'].'<br>');
                    echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);
                   
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
                    if($reg['id']==19){
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
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre'].'<br>');
                    echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);
                   
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
                    if($reg['id']==19){
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
        $horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
                die("Problemas en el select:".mysqli_error($conexion));

                if ($h=mysqli_fetch_array($horario))
                {
                    echo utf8_encode($h['nombre'].'<br>');
                    echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);
                   
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
                    if($reg['id']==19){
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




<?php
//////////adicional/////////////
  if($nivel==34 or $nivel==37)  
  {                                
include '../conexion3.php';
$hora=mysqli_query($conexion,"select * from hora WHERE modalidad='$modalidad' and adicional='1' ") or
die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($hora))
{

//condicional para bachillerato internacional
if(($nivel==34)or($nivel==37))
{
//echo 'Mostrar'.$nivel;
}
else{
//echo 'Ocultar'.$nivel;
}
?>
<tr >
<td class="success"><?php echo $reg['hora_inicio'].' - '.$reg['hora_fin'];?></td>
<?php 

?>
<td class="active">
<?php
$horaid=$reg['id'];
$dia=1;
$horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
die("Problemas en el select:".mysqli_error($conexion));

if ($h=mysqli_fetch_array($horario))
{
echo utf8_encode($h['nombre'].'<br>');
echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);

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
if($reg['id']==19){
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
$horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
die("Problemas en el select:".mysqli_error($conexion));

if ($h=mysqli_fetch_array($horario))
{
echo utf8_encode($h['nombre'].'<br>');
echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);

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
if($reg['id']==19){
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
$horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
die("Problemas en el select:".mysqli_error($conexion));

if ($h=mysqli_fetch_array($horario))
{
echo utf8_encode($h['nombre'].'<br>');
echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);

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
if($reg['id']==19){
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
$horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
die("Problemas en el select:".mysqli_error($conexion));

if ($h=mysqli_fetch_array($horario))
{
echo utf8_encode($h['nombre'].'<br>');
echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);

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
if($reg['id']==19){
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
$horario=mysqli_query($conexion,"SELECT * FROM horario AS ho INNER JOIN materia AS ma ON ho.id_materia=ma.id INNER JOIN docente AS do ON ho.cedula_docente=do.cedula WHERE ho.id_nivel='$_REQUEST[nivel]' and ho.id_dia='$dia' and ho.id_hora='$horaid'") or
die("Problemas en el select:".mysqli_error($conexion));

if ($h=mysqli_fetch_array($horario))
{
echo utf8_encode($h['nombre'].'<br>');
echo utf8_encode('<br>'.$h['nombres'].'<br>'.$h['apellidos']);

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
if($reg['id']==19){
echo 'Recreo';
}
else{

}
?>
</td>


</tr>
<?php
    }
}
   ////////////adicional//////////////       
?>









                                </tbody>
    </table>
    <div class="col-lg-12">
        <br>
        <FONT FACE="Open Sans" SIZE=3 COLOR="black"><strong>Listado de Estudiantes</strong></font>
                   
               </div>
               <table class="table">
                   <tr>
                       <td>
                           Nombre
                       </td>
                       <td>
                           Apellido
                       </td>
                   </tr>
                   <?php
                   include '../conexion3.php';
                   $nivel=mysqli_query($conexion,"select * from nivel AS ni where ni.curso='$_REQUEST[curso]' and paralelo='$_REQUEST[paralelo]'") or
                        die("Problemas en el select:".mysqli_error($conexion));

                      if ($niv=mysqli_fetch_array($nivel))
                      {
                         $nivel=$niv['id']; 
                      }
                      
    $registros=mysqli_query($conexion,"select es.nombres AS nombres, es.apellidos AS apellidos, es.cedula AS cedula from nivel_estudiante AS ne INNER JOIN estudiante AS es ON ne.cedula_estudiante = es.cedula where ne.id_nivel='$nivel'") or
        die("Problemas en el select:".mysqli_error($conexion));

                      while ($reg=mysqli_fetch_array($registros))
                      {
                          
                          ?>
                        <tr>
                            <td>
                            <?php
                            echo utf8_encode($reg['nombres']);
                            ?>
                            </td>
                            <td>
                            <?php
                            echo utf8_encode($reg['apellidos']);
                            ?> 
                            </td>
                        </tr>     
                              
                              <?php
                      }
                   ?>
                   
               </table>
                                     <?php
                                        
                                    }
                                    else
                                    {
                                        ?>
                                </table>
                        <?php 
                        
                                    
                                        
                                    
                        ?>
            <div class="panel-group" id="accordion">
                        
                <div class="panel">
                    <div class="col-sm-12 panel">
                        <h4> <?php
                                if($var_curso==1){
                                 echo $_REQUEST['curso'];
                                   
                                }
                                //xxxx
                                ?>
                        </h4>
                    </div>
                    <?php
                            if($var_curso==1){
                                
                            //echo $_REQUEST['oferta'];
                                $curso= html_entity_decode($_REQUEST['curso']);
                                if ($curso=='Décimo'){
                                    $curso='Decimo';
                                }
                            //echo $curso;
                            $registros2=mysqli_query($conexion,"SELECT * FROM nivel WHERE oferta='$_REQUEST[oferta]' and curso='$curso' ORDER BY paralelo") or
                              die("Problemas en el select:".mysqli_error($conexion));

                            while ($reg2=mysqli_fetch_array($registros2))
                            {
                            
                                

                            ?>
                       
                            <div class="col-sm-2 panel">
                                <h5 align="center">
                                   <a href="notas_bloque2?nivel=<?php echo $reg2['id'];?>&oferta=<?php echo $reg2['oferta'];?>&modalidad=<?php echo $reg2['modalidad'];?>&curso=<?php echo $reg2['curso'];?>&paralelo=<?php echo $reg2['paralelo'];?>" style="color:#000000;" align="center"> <?php echo $_REQUEST['curso'];?> <?php echo $reg2['paralelo'];?></a></h5>
                            </div>
                            <?php
                            }
                            }
                            else{
                            
                                ?>
                       
                            
                                <h4> Seleccione Un curso</h4>
                            
                            <?php
                                
                            }
                                
                            ?>
                </div>
            </div>
                <?php 
                }
                ?>
                        
        </div>                                
    </div>
</div>
   </div>
             
</div>
    </div>  
</div><?php //col-md-12 lin 55?>  

<link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>


<?php
if(($var_curso==1)&&($var_paralelo)){
    ?>
    <div class="bs-example">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. What is HTML?</button>									
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. What is Bootstrap?</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. What is CSS?</button>                     
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
?>



 @endsection



    
        



                                                      