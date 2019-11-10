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
@section('content')
<div class="col-lg-12 panel">
    <div class="card-body">
                    <div class="card-header">Nivel</div>
                    <div class="col-lg-3" >
                        
                    </div>    
                    <div class="col-lg-3" >
                        <h3>Lista de Niveles</h3>
                            <a href="{{ route('nivel.create') }}" class="btn btn-info" >Añadir Nivel</a>
                    </div>    

                        <form method="GET" action="{{ url('/nivel') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                            <table class="table table-striped table-bordered table-hover">
                                
                                    <tr>
                                        <th>#</th><th>Curso</th><th>Paralelo</th><th>Oferta</th><th>Modalidad</th><th>Accion</th>
                                    </tr>
                                
                                <tbody>
                                @foreach($nivel as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->curso }}</td><td>{{ $item->paralelo }}</td><td>{{ $item->oferta }}</td><td>{{ $item->modalidad }}</td>
                                        <td>
                                            <a href="asignar_estudiantes?id_nivel={{$item->id}}&&modalidad_nivel={{$item->modalidad}}&&descripcion_nivel={{$item->oferta.' '.$item->curso.' '.$item->paralelo}}" class="btn btn-primary btn-sm">Estudiantes</a>
                                            <a href="{{ url('/nivel/' . $item->id) }}" title="Ver"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/nivel/' . $item->id . '/edit') }}" title="Editar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/nivel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Nivel" onclick="return confirm(&quot;Confirma Eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-3" >
                            </div>
                                <div class="col-lg-3" >
                                    <div class="pagination-wrapper"> {!! $nivel->appends(['search' => Request::get('search')])->render() !!} </div>
                                </div>
                            
        </div>
    </div>
</div>
@endsection
