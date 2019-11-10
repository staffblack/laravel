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
                    <div class="card-header">Usuario {{ $usuario->nombres }} {{ $usuario->apellidos }}</div>
                    <div class="card-body">

                        <a href="{{ url('/usuario') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <a href="{{ url('/usuario/' . $usuario->id . '/edit') }}" title="Edit Usuario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('usuario' . '/' . $usuario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Usuario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th> Id </th><td> {{ $usuario->id }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Login </th><td> {{ $usuario->login }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nombre </th><td> {{ $usuario->nombres }} {{ $usuario->apellidos }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
</div>
@endsection
