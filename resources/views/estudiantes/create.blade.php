


@extends('layouts.plantilla')
<div class="container" >
    @section('content')
    <div class="col-md-9" >
        <br>
        <section class="content-header">
            <h1>
                Estudiante
            </h1>
        </section>
        <div class="content">

            <div class="box box-primary">

                    <div class="col-sm-12 widget-container-col" >
                        
                        <form action="{{url('/estudiantes')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            
                            <div class="col-sm-12 widget-container-col" >
                                <label for="cedula">{{'Cedula'}}</label><br>
                                <input type="number" id='cedula' value="" name="cedula">
                            </div>
                            
                            <div class="col-sm-12 widget-container-col" >
                                <label for="nombres">{{'Nombres'}}</label><br>
                                <input type="text" id='nombres' value="" name="nombres">
                            </div>
                            
                            <div class="col-sm-12 widget-container-col" >
                                <label for="apellidos">{{'Apellidos'}}</label><br>
                                <input type="text" id='apellidos' value="" name="apellidos">
                            </div>
                            
                            <div class="col-sm-12 widget-container-col" >
                                <label for="password">{{'password'}}</label><br>
                                <input type="password" id='password' value="" name="password">
                            </div>
                            
                            <div class="col-sm-12 widget-container-col" >
                                <label for="foto">{{'Foto'}}</label><br>
                                <input type="file" id='foto' value="" name="foto"><br>
                                <input type="submit" value="Agregar">
                            </div>
                            
                            
                        </form>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection