

@extends('layouts.plantilla')
@section('content')
<div class="col-lg-12">
        <h5 id="heading">

            <?php  
                session_start(); 

                echo session('apellidos_usuario');
                echo session('login');
                echo session('perfil');
                session_destroy();
                
                ?>
                <br><br><br>

                {{session('nombres_usuario').'  '.session('apellidos_usuario')}}<br>
                {{session('login')}}<br>
                {{session('perfil')}}<br>
                
                
            </h5>
            <meta http-equiv="Refresh" content="0;url=notas_bloque">
                </div>
@endsection

