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
@extends('layouts.plantilla')
<div class="container">
    <div class="row">
@section('content')
    &nbsp;&nbsp;
    
            <div class="col-lg-10 panel panel-default">
                <div class="card">
                    <div class="card-header">CronogramaSecretarium {{ $cronogramasecretarium->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/cronograma-secretaria') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/cronograma-secretaria/' . $cronogramasecretarium->id . '/edit') }}" title="Edit CronogramaSecretarium"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('cronogramasecretaria' . '/' . $cronogramasecretarium->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete CronogramaSecretarium" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   <tr>
                                       <th> Titulo </th><td> {{ $cronogramasecretarium->nombre }} </td>
                                   </tr>
                                   <tr>
                                       <th> Fecha </th>
                                       <td> {{ $cronogramasecretarium->fecha }} </td>
                                   </tr>
                                   <tr>
                                       <th> Hora </th>
                                       <td> {{ $cronogramasecretarium->hora }} </td>
                                   </tr>
                                   <tr>
                                       <th> Detalles </th>
                                       <td> {{ $cronogramasecretarium->descripcion }} </td>
                                   </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
