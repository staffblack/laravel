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
@section('content')
<div class="col-lg-12 panel">
    <div class="card-header">Formulario </div>
        <div class="col-lg-4">
                        <a href="{{ url('/formulario/create') }}" class="btn btn-success btn-sm" title="Add New Formulario">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo
                        </a>
        </div>
                        <form method="GET" action="{{ url('/formulario') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                                <table class="table">
                                
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Actions</th>
                                    </tr>
                                <tbody>
                                @foreach($formulario as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td width="20">
                                            <a href="{{ url('/formulario/' . $item->id) }}" title="View Formulario"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/formulario/' . $item->id . '/edit') }}" title="Edit Formulario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/formulario' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Formulario" onclick="return confirm(&quot;Confirma Eliminar ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-4">
                                </div>   
                                    <div class="col-lg-4">
                                    <div class="pagination-wrapper"> {!! $formulario->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
    </div>
</div>
@endsection
