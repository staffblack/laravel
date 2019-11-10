<style type="text/css">
<!--
.Estilo2 {color: #FF0000}
.Estilo3 {color: #000000}
-->
</style>
<?php


if(session('perfil')=='Docente')
{
    
 $page="usuario_docente";   
}
elseif(session('perfil')=='Secretaria'){
$page="usuario_secretaria";    
}

?>
@extends('plantilla')
@section('content')
 <script>
alert("Bienvenido.... usuario Validado Exitosamente ");
</script>   
@endsection


