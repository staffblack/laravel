@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card-header">Create New Horario</div>
                    <div class="card-body">
                        <a href="{{ url('/horario') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/horario') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('horario.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
@endsection
