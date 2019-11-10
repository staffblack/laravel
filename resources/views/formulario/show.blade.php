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
<div class="col-lg-12 panel panel-default">
<a href="{{ url('/formulario') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <a href="{{ url('/formulario/' . $formulario->id . '/edit') }}" title="Edit Formulario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('formulario' . '/' . $formulario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Formulario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div >
                            <table class="table">
                                <tbody>
                                    
                                    <tr></tr><tr><th> Nombre </th><td> {{ $formulario->nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $formulario->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

</div>
@endsection
