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
<div class="container">
    <div class="row">
@section('content')

    &nbsp;
    <div class="col-lg-1" >
        
    </div>
<div class="col-lg-10 panel panel-default">
    <div class="col-lg-12" >
        <br>
        <section class="content-header">
        	@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
            <h1>
                Estudiante
            </h1>
        </section>
        <div class="content panel panel-default">

            <div class="box box-primary ">

                    <div class="col-sm-12" >
                        
                        <form action="{{ route('estudiantes.update',$estudiantes->id) }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="col-sm-6" >
                          
                                <label for="cedula">{{'Cedula'}}</label><br>
                                <input type="number" id='cedula' value="{{$estudiantes->cedula}}" name="cedula">
                            </div>
                            
                            <div class="col-sm-6" >
                                <label for="nombres">{{'Nombres'}}</label><br>
                                <input type="text" id='nombres' value="{{$estudiantes->nombres}}" name="nombres">
                            </div>
                            
                            <div class="col-sm-6" >
                                <label for="apellidos">{{'Apellidos'}}</label><br>
                                <input type="text" id='apellidos' value="{{$estudiantes->apellidos}}" name="apellidos">
                            </div>
                            
                            <div class="col-sm-6" >
                                <label for="password">{{'password'}}</label><br>
                                <input type="password" id='password' value="{{$estudiantes->password}}" name="password">
                            </div>
                            
                            <div class="col-sm-6" >
                                <label for="foto">{{'Foto'}}</label><br>
                                <input type="file" id='foto' value="" name="foto"><br>
                                <img src="{{asset('storage').'/'.$estudiantes->foto}}" width="100"><br>
                                
                            </div>
                            <div class="col-sm-6" 
                            <br><br><br><br><br><br>
                            <input type="submit" value="Agregar" class="btn btn-primary btn-block">
                            </div>
                            
                            
                        </form>
                    </div>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection