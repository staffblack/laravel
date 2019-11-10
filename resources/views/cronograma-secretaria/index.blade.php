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
    
            <div class="col-lg-12">
                    <div class="card-header">Cronograma</div>
                    
                       <div class="col-lg-4">
                            </div>
                            <div class="col-lg-3">
                        <a href="{{ url('/cronograma-secretaria/create') }}" class="btn btn-success btn-sm" title="Agregar Cronograma">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo
                        </a>
</div>
                        <form method="GET" action="{{ url('/cronograma-secretaria') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <br><br>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <br>&nbsp;
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>                                    
                                </span>
                                <br>&nbsp;
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                               
                                    <tr>
                                        <th>#</th><th>Fecha</th><th>Nombre</th><th>Foto</th><th>Opciones</th>
                                    </tr>
                              
                                <tbody>
                                @foreach($cronogramasecretaria as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fecha }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>
                                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($item->foto)) }}" width="50" height="50" />
                                        </td>
                                        <td>
                                            <a href="{{ url('/cronograma-secretaria/' . $item->id) }}" title="View Cronograma"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/cronograma-secretaria/' . $item->id . '/edit') }}" title="Edit Cronograma"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/cronograma-secretaria' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Cronograma" onclick="return confirm(&quot;Confirma Eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-3">
                            <div class="pagination-wrapper"> {!! $cronogramasecretaria->appends(['search' => Request::get('search')])->render() !!} 
                            </div>
                            </div>
                            </div>
                    </div>
        </div>
    </div>
@endsection
