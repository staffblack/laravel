<meta name="viewport" content="width=device-width, initial-scale=1">
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
    table {
      width:150px;
      height:200px;
      overflow-x:scroll;
      overflow: visible;
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
                <div class="col-lg-12 card-header">
                        Docentes
                </div>
                    
                    <div class="card-body">

                        <div class="col-lg-7">
                            <p align="right">
                            <a href="{{ url('/docente/create') }}" class="btn btn-success btn-sm" title="Agregar Dcocente">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo
                        </a>
                    </p>
                    </div>

                    <form method="GET" action="{{ url('/docente') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <td>#</td><td>Cedula</td><td>Nombre</td><td>Apellido</td><td>Foto</td><td>Accción</td>
                                    </tr>
                                
                                @foreach($docente as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->cedula }}</td><td>{{ $item->nombres }}</td><td>{{ $item->apellidos }}</td><td><img src="data:image/png;base64,{{ chunk_split(base64_encode($item->foto)) }}" width="50" /></td>
                                        <td>
                                            <a href="{{ url('/docente/' . $item->id) }}" title="View Docente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/docente/' . $item->id . '/edit') }}" title="Edit Docente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/docente' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Docente" onclick="return confirm(&quot;Confirma Eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </table>
                            <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <div class="pagination-wrapper"> {!! $docente->appends(['search' => Request::get('search')])->render() !!} 
                                    </div>
                                </div>
                        </div>
                            
                        </div>

            </div>
@endsection
