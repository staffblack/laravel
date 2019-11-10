@extends('layouts.plantilla')
@section('content')
<div class="col-md-12">
    <div class="card-header">Horarion</div>
            

                        <a href="{{ url('/horarion/' . $horarion->id . '/edit') }}" title="Edit Horarion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('horarion' . '/' . $horarion->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Horarion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $horarion->id }}</td>
                                    </tr>
                                    <tr><th> Id </th><td> {{ $horarion->id }} </td></tr><tr><th> Cedula Docente </th><td> {{ $horarion->cedula_docente }} </td></tr><tr><th> Id Nivel </th><td> {{ $horarion->id_nivel }} </td></tr>
                                </tbody>
                            </table>
                        </div>

</div>
                
@endsection
