@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">PerfilEstudiante {{ $perfilestudiante->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/perfil-estudiante') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/perfil-estudiante/' . $perfilestudiante->id . '/edit') }}" title="Edit PerfilEstudiante"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('perfilestudiante' . '/' . $perfilestudiante->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete PerfilEstudiante" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $perfilestudiante->id }}</td>
                                    </tr>
                                    <tr><th> Id </th><td> {{ $perfilestudiante->id }} </td></tr><tr><th> Cedula </th><td> {{ $perfilestudiante->cedula }} </td></tr><tr><th> Nombres </th><td> {{ $perfilestudiante->nombres }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
