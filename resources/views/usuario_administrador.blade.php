
@extends('plantilla')
@section('content')
<?php
$page="usuario_administrador";
?>
<div class="encabezado" id="encabezado" >
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

 <?php
    
    
}
?>
    <script>
alert("Bienvenido.... usuario Validado Exitosamente ");
</script> 
  <table width="1000" border="0" cellspacing="3">
    <tr>
      <td width="797" valign="top" class="Estilo26"><p class="Estilo30 Estilo29">&nbsp;</p>
      <p class="Estilo30 Estilo29"><a href="nivel"><span class="Estilo31"><a href="nivel"></a></p></td>
    </tr>
  </table>
 @endsection