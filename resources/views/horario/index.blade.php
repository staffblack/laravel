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
<div class="col-lg-12 panel">
                    <div class="card-header">Horario</div>
                    <div class="card-body">
                       <form method="GET" action="{{ url('/horario') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Curso</th><th>Paralelo</th><th>oferta</th><th>Modalidad</th><th>Accion</th>
                                    </tr>
                                
                                <tbody>
                                @foreach($nivel as $item)
                                
                                    <tr>
                                        <td>{{ $item->curso }}</td>
                                        <td>{{ $item->paralelo }}</td>
                                        <td>{{ $item->oferta }}</td>
                                        <td>{{ $item->modalidad }}</td>
                                        <td>
                                          
                                            <a href="registrar_horarios?id_nivel={{$item->id}}&&modalidad_nivel={{$item->modalidad}}&descripcion_nivel={{$item->oferta}}{{$item->curso}}{{$item->paralelo}}" class="btn btn-info Estilo20 Estilo16">Horario</a>
                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-3">
                            </div>    
                            <div class="col-lg-3">
                                <div class="pagination-wrapper">
                                     {!! $nivel->appends(['search' =>   Request::get('search')])->render() !!} 
                                 </div>
                            </div>
                            </div>

                    </div>
                </div>
@endsection
