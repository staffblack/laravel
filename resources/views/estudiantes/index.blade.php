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

    
<div class="col-lg-10 panel panel-default">
    <div class="col-lg-12" >
        <h3>Lista de Estudiantes</h3><a href="{{ route('estudiantes.create') }}" class="btn btn-info" >Añadir Estudiante</a>
    </div>
          
    <div class="col-lg-12">
            <table class="table table-striped table-bordered table-hover" width="100%">
             <thead>
               <th>Nombres</th>
               <th>Apellidos</th>
               <th>Cedula</th>
               <th>Foto</th>
               <th></th>
               <th></th>
             </thead>
             <tbody>
              @if($estudiantes->count())  
              @foreach($estudiantes as $estudiante)  
              <tr>
                <td>{{$estudiante->nombres}}</td>
                <td>{{$estudiante->apellidos}}</td>
                <td>{{$estudiante->cedula}}</td>
                
                <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($estudiante->cedula)) }}" width="200" height="120" />
                    
                </td>
                <td>
                    <a class="btn btn-primary btn-xs" href="{{action('estudiantesController@edit', $estudiante->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                  
                </td>
                <td>
                    <form action="{{action('estudiantesController@destroy', $estudiante->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr  >
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        <div class="col-lg-3"></div><div class="col-lg-6">{{ $estudiantes->links() }}</div><div class="col-lg-3"></div>
</div>
          
      </div>
      
      </div>
     </div>
	@endsection
       