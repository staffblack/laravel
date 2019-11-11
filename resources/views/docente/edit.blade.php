<style type="text/css">

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
    <div class="card-header">Editar Docente </div>
        <div class="card-body">
                        <a href="{{ url('/docente') }}" title="Volver"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/docente/' . $docente->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                           
                            
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="PATCH">

                            @include ('docente.form', ['formMode' => 'edit'])

                        </form>

                    </div>
</div>
@endsection
