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
                
                    <div class="card-header">Estudiante {{ $estudiante->id }}</div>
                    <?php
                    include '../conexion3.php';
                    ?>
                    <div class="card-body">
                        <br>

                        <a href="{{ url('/estudiante') }}" title="Volver"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <a href="{{ url('/estudiante/' . $estudiante->id . '/edit') }}" title="Edit Estudiante"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('estudiante' . '/' . $estudiante->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Estudiante" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th> Nombre </th>
                                        <td> {{ $estudiante->nombres }}  {{ $estudiante->apellidos }}  </td>
                                    </tr>
                                    <tr>
                                        <th> Cedula </th>
                                        <td> {{ $estudiante->cedula }} </td>
                                    </tr>
                                    <tr>
                                    <td><label><b>Telefono del Representante</b></label></td><td>{{ $estudiante->telefono_representante }} </td>
                                    </tr>
                                    <tr>
                                        <td><label><b>Matriculación</b></label></td><td></td>
                                    </tr>
                                    <tr>
                                        <td></td><td></td>
                                    </tr>
                                    <?php
                                    $registros = mysqli_query($conexion, "select * from nivel_estudiante AS nivel INNER JOIN nivel AS ni ON nivel.id_nivel=ni.id where cedula_estudiante='$estudiante->cedula'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    ?>
        <tr>
            <td>Oferta:<?php echo utf8_encode($reg['oferta']);?></td><td></td>
        </tr>
        <tr>
            <td><?php echo 'Curso:'.utf8_encode($reg['curso']).' '.utf8_encode($reg['paralelo']);?></td><td></td>
        </tr>
        <?php  
  }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
@endsection
