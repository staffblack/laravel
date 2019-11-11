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
                    <div class="card-header"><img src="data:image/png;base64,{{ chunk_split(base64_encode($docente->foto)) }}" width="100" /></div>
                    <div class="card-body">

                        <a href="{{ url('/docente') }}" title="Volver"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <a href="{{ url('/docente/' . $docente->id . '/edit') }}" title="Editar Docente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('docente' . '/' . $docente->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Docente" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    
                                    <tr><th> Cedula </th><td> {{ $docente->cedula }} </td></tr>
                                    <tr><th> Grado </th><td> {{ $docente->grado }} </td></tr>
                                    <tr><th> Nombres </th><td> {{ $docente->nombres }} </td></tr>
                                    <tr><th> Apellidos </th><td> {{ $docente->apellidos }} </td></tr>
                                    <tr><th> Email </th><td> {{ $docente->email }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
@endsection
