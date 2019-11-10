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
</script> 
 <?php
    
}
?>

   
@extends('layouts.plantilla')
@section('content')

<div class="col-lg-12 panel panel">
                <div class="col-lg-12 card-header">
                        Estudiante
                </div>
                <div class="col-lg-7">
                    <p align="right">
                            <a href="{{ url('/estudiante/create') }}" class="btn btn-success    btn-sm" title="Add New Estudiante">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Estudiante
                            </a>
                    </p>
                </div>
                    
                    <div class="col-lg-5">
                        <form method="GET" action="{{ url('/estudiante') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                <br><br>
                            </div>
                        </form>
                    </div>    

                        

                        <br/>
                        <br/>
                        <div class="table-responsive">
                                <table class="table">
                                
                                    <tr>
                                        <th>N</th><th>Cedula</th><th>Nombres</th><th>Telefono Representante</th><th>Accion</th>
                                    </tr>
                                <tbody>
                                @foreach($estudiante as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->cedula }}</td><td>{{ $item->nombres }}</td><td>{{ $item->telefono_representante }}</td>
                                        <td>
                                            <a href="{{ url('/estudiante/' . $item->id) }}" title="Ver Estudiante"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/estudiante/' . $item->id . '/edit') }}" title="Edit Estudiante"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/estudiante' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Estudiante" onclick="return confirm(&quot;Confirma eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-4">
                                </div>
                                <div class="col-lg-7">
                                         {!! $estudiante->appends(['search' =>   Request::get('search')])->render() !!}
                                </div>   
                        </div>
                            <div class="col-lg-12">
                    
                                
            <div class="col-lg-3">
        </div>
    </div>
</div>

@endsection
