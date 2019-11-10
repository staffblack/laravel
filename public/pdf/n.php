<?php
if(isset($_REQUEST['accion']))
{
    $accion=$_REQUEST['accion'];
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


$redireccion='estudiante?accion=editado';
return redirect($redireccion)->with('flash_message', 'Estudiante updated!');