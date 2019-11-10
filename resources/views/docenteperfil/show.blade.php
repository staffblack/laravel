@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">docenteperfil {{ $docenteperfil->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/docenteperfil') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/docenteperfil/' . $docenteperfil->id . '/edit') }}" title="Edit docenteperfil"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('docenteperfil' . '/' . $docenteperfil->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete docenteperfil" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $docenteperfil->id }}</td>
                                    </tr>
                                    <tr><th> Cedula </th><td> {{ $docenteperfil->cedula }} </td></tr><tr><th> Nombres </th><td> {{ $docenteperfil->nombres }} </td></tr><tr><th> Apellidos </th><td> {{ $docenteperfil->apellidos }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
