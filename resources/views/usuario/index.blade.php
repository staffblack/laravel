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

@extends('layouts.plantilla')
@section('content')
                <div class="col-lg-12 card-header">
                        Usuario
                </div>
                 <div class="col-lg-9">
                    <p align="center">
                    <a href="{{ url('/usuario/create') }}" class="btn btn-success btn-sm" title="Add New Usuario">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>
                    </p>
                </div>
                 <div class="col-lg-3">
                    <form method="GET" action="{{ url('/usuario') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                </div>
                    <div class="card-body">
                        

                        

                        <br/>
                        <br/>
                        <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>#</th><th>Login</th><th>Nombre</th><th>Apellido</th><th>Acción</th>
                                    </tr>
                                <tbody>
                                @foreach($usuario as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->login }}</td>
                                        <td>{{ $item->nombres }}</td>
                                        <td>{{ $item->apellidos }}</td>
                                        <td>
                                            <a href="{{ url('/usuario/' . $item->id) }}" title="View Usuario"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/usuario/' . $item->id . '/edit') }}" title="Edit Usuario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/usuario' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Usuario" onclick="return confirm(&quot;Confirma eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                <div class="col-lg-12">
                    
                        <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6">
                         {!! $usuario->appends(['search' =>   Request::get('search')])->render() !!}
                    </div>
                        
                    <div class="col-lg-3">
                    </div>
                    </div>
                    
                </div> 
                </div>    
            </div>
        </div>
    </div>
@endsection
