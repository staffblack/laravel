@extends('layouts.plantilla')
@section('content')
            <div class="col-md-12">
                    <div class="card-header">Nivel</div>
                    <div class="card-body">

                        <a href="{{ url('/nivel') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <a href="{{ url('/nivel/' . $nivel->id . '/edit') }}" title="Edit Nivel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('nivel' . '/' . $nivel->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Nivel" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div >
                            <table class="table">
                                <tbody>
                                    
                                    <tr></tr><tr><th> Curso </th><td> {{ $nivel->curso }} </td></tr><tr><th> Paralelo </th><td> {{ $nivel->paralelo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
@endsection
