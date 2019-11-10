<?php
if(isset($_REQUEST['accion']))
{
    $accion=$_REQUEST['accion'];
}
else
{
    $accion='';
}

if($accion=='creado'){
   ?>
<script>
alert("Creado Satisfactoriamente");
</script> 
 <?php
    }
if($accion=='editado'){
   ?>
<script>
alert("Perfil Editado Satisfactoriamente");
</script> 
 <?php
    
    
}
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">PerfilSecretarium {{ $perfilsecretarium->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/perfil-secretaria/' . $perfilsecretarium->id . '/edit') }}" title="Edit PerfilSecretarium"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>
                                         Id 
                                        </th>
                                        <td>
                                         {{ $perfilsecretarium->id }} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> 
                                            Nombres
                                        </th>
                                        <td>
                                         {{ $perfilsecretarium->nombres.' '.$perfilsecretarium->apellidos }} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> 
                                            Login 
                                        </th>
                                        <td>
                                         {{ $perfilsecretarium->login }} 
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
