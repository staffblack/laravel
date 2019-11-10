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

@extends('layouts.plantilla')
@section('content')
<div class="col-lg-12 panel">
    <div class="card-header">Cronograma </div>
        <a href="{{ url('/cronograma') }}" title="Volver"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <a href="{{ url('/cronograma/' . $cronograma->id . '/edit') }}" title="Editar Cronograma"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('cronograma' . '/' . $cronograma->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Cronograma" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div>
                            <table class="table">
                                <tbody>
                                   
                                    <tr></tr><tr><th> Fecha </th><td> {{ $cronograma->fecha }} </td></tr><tr><th> Hora </th><td> {{ $cronograma->hora }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
@endsection
