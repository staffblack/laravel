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
<div class="col-lg-12">
    <div class="card-header">Editar Estudiante #{{ $estudiante->nombres }} {{ $estudiante->apellidos }}</div>
                    <div class="card-body">
                        <a href="{{ url('/estudiante') }}" title="Volver"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/estudiante/' . $estudiante->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('estudiante.form', ['formMode' => 'edit'])

                        </form>

                    </div>
</div>
@endsection
