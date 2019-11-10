<style>
   #heading { color: #000000; }
  </style>
<?php


include '../conexion3.php';
if(isset($page)){
                            $page=$page;    
                            }
                            else{
                                
                            }
if($page=='index'){
    
}
elseif(($page=='resena_historica') or ($page=='quienes_somos')){
    ?>
        <div class="panel-heading">
            <h5 id="heading"><span class="glyphicon glyphicon-flag">
                    </span>&nbsp; Nuestro Colegio
            </h5>
        </div>
  <br>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ url('resena_historica') }}" id="heading">&nbsp;&nbsp;Reseña Historica</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ url('quienes_somos') }}" id="heading">&nbsp;&nbsp;Quienes Somos</a>
            </h8>
        </div>
  
    <?php
    
}elseif(($page=='seccion_matutina') or ($page=='seccion_vespertina')){
    ?>
        <div class="panel-heading">
            <h5 id="heading"><span class="glyphicon glyphicon-flag">
                    </span>&nbsp; Oferta Academica
            </h5>
        </div>
  <br>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ url('seccion_matutina') }}" id="heading">&nbsp;&nbsp;Matutina</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ url('seccion_vespertina') }}" id="heading">&nbsp;&nbsp;Vespertina</a>
            </h8>
        </div>
    <?php
    
}elseif(($page=='comunidad_educativa') or ($page=='comunidad_educativa_docentes')or ($page=='comunidad_educativa_docentes')){
    ?>
        <div class="panel-heading">
            <h5 id="heading"><span class="glyphicon glyphicon-flag">
                    </span>&nbsp; Comundad<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Educativa
            </h5>
        </div> 
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa') }}" id="heading">
                  
                    &nbsp;&nbsp;Directivos</a>
            </h8>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?trabajador=Administrativo') }}" id="heading">
                  
                    &nbsp;&nbsp;Administrativo</a>
            </h8>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?trabajador=Servicio') }}" id="heading">
                  
                    &nbsp;&nbsp;Servicios</a>
            </h8>
        </div>
  
  
  
  
  
  
        <div class="panel-heading">
            <h5 id="heading">
                <span class="glyphicon glyphicon-flag">
                </span><a href="{{ url('comunidad_educativa_docentes') }}" id="heading">&nbsp; Docentes</a>
            </h5>
        </div> 
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?area=MATEMATICAS') }}" id="heading">
                  
                    &nbsp;&nbsp;Matematicas</a>
            </h8>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?area=LENGUA Y LITERATURA') }}" id="heading">
                  
                    &nbsp;&nbsp;Lenguaje y Literatura</a>
            </h8>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?area=CIENCIAS NATURALES') }}" id="heading">
                  
                    &nbsp;&nbsp;Ciencias Naturales</a>
            </h8>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?area=EDUCACION FISICA') }}" id="heading">
                  
                    &nbsp;&nbsp;Educación Fisica</a>
            </h8>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?area=INGLES') }}" id="heading">
                  
                    &nbsp;&nbsp;Ingles</a>
            </h8>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?area=CULTURA ESTETICA') }}" id="heading">
                  
                    &nbsp;&nbsp;Cultura Estética</a>
            </h8>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-link">
                </span> <a href="{{ url('comunidad_educativa_docentes?area=CIENCIAS SOCIALES') }}" id="heading">
                  
                    &nbsp;&nbsp;Ciencias Sociales</a>
            </h8>
        </div>
  
           
  
  
  
  
  
  
  
  
  
    <?php
    
}elseif(($page=='cronograma1') or ($page=='quienes_somos')){
    ?>
    <div class="panel-heading">
            <h5 id="heading"><span class="glyphicon glyphicon-flag">
                    </span>&nbsp; Mes<br>
            </h5>
    </div> 
    <div class="col-sm-12 panel ">
        <br>
        @foreach($meses as $mes)
            <div class="col-sm-12 panel">
                <a href="{{route('cronograma1.index','id_mes='.$mes->id.'&&nombre_mes='.$mes->nombre.'&&ano='.$ano)}}" style="color: #000000">{{$mes->nombre}}</a>
            </div>
			   @endforeach
            <hr>
    </div>   
  
  
    <?php
    
}elseif(($page=='notas_bloque')){
    
   ?>
<div class="panel-heading">
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                                    </span>Login</a>
                                </h5>
</div>
<div align="center">
            <form class="form-search" action="notas_bloque" method="post" enctype="multipart/form-data" id="save_post">
                                {{ csrf_field() }}
            <div align="center">
                                    <strong>Iniciar Sesión </strong>
            </div>
                                <br>
                                <span class="Estilo3 Estilo30 Estilo5">
                                    <strong>
                                        Usuario
                                    </strong>
                                </span>
                                <br>
                                    <input name="login" type="text" id="login" value="{{ old('login') }}" >
                                    <br>
                                    <span class="Estilo3 Estilo30 Estilo5"><strong>Password</strong></span>
                                    <br>
                                    <input name="password" type="password" id="password" value="{{ old('password') }}">
                                  <br>
                                    <span class="Estilo3 Estilo30 Estilo5"><strong>Perfil</strong></span>
                                 <br>
                                    <span class="Estilo5">
                                      <select name="perfil" id="perfil">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Docente">Docente/Tutor</option>
                                        <option value="Estudiante">Estudiante</option>
                                        <option value="Secretaria">Secretaria</option>
                                      </select>
                                    </span>
                                    <br>
                                      <label><span class="Estilo2">{{ $mensaje }}</span>
                                      <input type="hidden" name="hiddenField">
                                      </label>
                                    </span>
                            <div align="center">
                                        <input name="acceder" type="submit" id="acceder" value="Acceder">
                            </div><br>
                            <div align="center">
                                        <input name="cancelar" type="submit" id="cancelar" value="Cancelar">
                            </div>
                            <div align="justify" class="Estilo37 Estilo4">Nota: Si ingresa por primera vez el password va ser el mismo que su Logín. 
                            </div>
                            

                              </form>
</div>
 
        <div align="center">
            
                            </div>
                            <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

                                        <span class="glyphicon glyphicon-th">
                                    </span>   Educacion Basica General</a>
                                </h6>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <?php
                                        include '../conexion3.php';
                                        $registros=mysqli_query($conexion,"SELECT * FROM nivel WHERE oferta='Educacion Basica General' GROUP BY CURSO ORDER BY CURSO DESC") or
                                              die("Problemas en el select:".mysqli_error($conexion));

                                            while ($reg=mysqli_fetch_array($registros))
                                            {
                                                
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="notas_bloque?oferta=Educacion Basica General&modalidad=<?php echo $reg['modalidad'];?>&curso=<?php echo utf8_encode($reg['curso'])?>" style="color: #0069d9"><?php echo utf8_encode('('.$reg['curso'].' )')?></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title" >
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                        </span>Bachillerato General Unificado</a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <?php
                                        include '../conexion3.php';
                                        $registros=mysqli_query($conexion,"SELECT * FROM nivel WHERE oferta='Bachillerato General Unificado' GROUP BY CURSO ORDER BY CURSO DESC") or
                                              die("Problemas en el select:".mysqli_error($conexion));

                                            while ($reg=mysqli_fetch_array($registros))
                                            {
                                                
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="notas_bloque?oferta=Bachillerato General Unificado&modalidad=<?php echo $reg['modalidad'];?>&curso=<?php echo $reg['curso'];?>" style="color: #0069d9"><?php echo utf8_encode('('.$reg['curso'].' )')?></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                                    </span>Bachillerato Internacional</a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <?php
                                        include '../conexion3.php';
                                        $registros=mysqli_query($conexion,"SELECT * FROM nivel WHERE oferta='Bachillerato Internacional'") or
                                              die("Problemas en el select:".mysqli_error($conexion));

                                            while ($reg=mysqli_fetch_array($registros))
                                            {
                                                
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="notas_bloque?oferta=Bachillerato Internacional&modalidad=<?php echo $reg['modalidad'];?>&curso=<?php echo $reg['curso'];?>" style="color: #0056b3"><?php echo utf8_encode('('.$reg['curso'].' )')?></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
  
 <?php 
    
}elseif(($page=='formularios1')){
    ?>
        
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

                                        <span class="glyphicon glyphicon-th">
                                    Documentos</span></a>
                                </h6>
                            </div>
                            <div class="col-sm-8 panel">
                                <table class="table">
                                    @foreach($formularios2 as $formulario2)
                                        <tr>
                                            <td>
                                                <a href="formularios1?search={{$formulario2->categoria}}" style="color: #000000">{{$formulario2->categoria}}</a>
                                                
                                            </td>
											<td>
											</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                
                            </div>
                       
    <?php
    
}elseif(($page=='evento')){
    ?>
        <div class="panel-heading">
            <h5 id="heading"><span class="glyphicon glyphicon-flag">
                    </span>&nbsp; <?php
						if(isset($_REQUEST['search']))
                                                {
                                                    $search=$_REQUEST['search'];
                                                }
                                                else{
                                                    $search='';
                                                }

					echo $search;?>
            </h5>
        </div>
        <div class="panel-heading">
           
        </div>
       
        <div class="panel panel-info">
            <form method="GET" action="{{ url('/evento') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
         
                            <div class="input-group">
                                
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <br>&nbsp;
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>                                    
                                </span>
                                <br>&nbsp;
                            </div>
            </form>
        </div>
  <br><br><br>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ url('evento?search=Evento') }}" id="heading">&nbsp;&nbsp;Evento</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ url('evento?search=Actividad') }}" id="heading">&nbsp;&nbsp;Minuto Civico</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ url('evento?search=Noticia') }}" id="heading">&nbsp;&nbsp;Noticia</a>
            </h8>
        </div>
        
    <?php
    
}elseif(($page=='usuario_administrador')){
    ?>
        
        <div class="panel-heading">
            <h5 id="heading">
                
                {{session('nombres_usuario')}}&nbsp;{{session('apellidos_usuario')}}<br>
                {{session('login')}}<br>
                ADMINISTRADOR<br>
                
                
            </h5>
        </div>
  <br>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ route('estudiante.index') }}" id="heading">&nbsp;&nbsp;Estudiantes</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ route('usuario.index') }}" id="heading">&nbsp;&nbsp;Usuarios</a>
            </h8>
        </div>
  <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ route('docente.index') }}" id="heading">&nbsp;&nbsp;Docentes</a>
            </h8>
        </div>
  <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ route('nivel_estudiantes.index') }}" id="heading">&nbsp;&nbsp;Nivel de Estudiantes</a>
            </h8>
        </div>
  <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ route('horarios.index') }}" id="heading">&nbsp;&nbsp;Horarios</a>
            </h8>
        </div>
  <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ route('cronograma.index') }}" id="heading">&nbsp;&nbsp;Cronograma</a>
            </h8>
        </div>
  <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ route('formulario.index') }}" id="heading">&nbsp;&nbsp;Formulario</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('T_notas_bloqueController@index') }}" id="heading">&nbsp;&nbsp;Salir</a>
            </h8>
        </div>
       
        
    <?php
    
}elseif(($page=='usuario_docente')){
    ?>
        
        <div class="panel-heading">
            <h5 id="heading">
                {{session('nombres_usuario').'  '.session('apellidos_usuario')}}<br>
                {{session('login')}}<br>
                {{session('perfil')}}<br>
                
                
            </h5>
        </div>
  <br>
  
  <?php
  if((session('perfil'))==('Docente')){
      
  
  ?>
         <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('docenteperfilController@edit', ['id' => session('idsession')]) }}" id="heading">&nbsp;&nbsp;Cuenta</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('T_nota_estudianteController@index') }}" id="heading">&nbsp;&nbsp;Notas de Bloque</a>
            </h8>
        </div>
  
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('T_notas_bloqueController@index') }}" id="heading">&nbsp;&nbsp;Salir</a>
            </h8>
        </div>
       <?php
  }elseif($page=="usuario_secretaris"){
    
      ?>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('PerfilSecretariaController@edit', ['id' => session('id')]) }}" id="heading">&nbsp;&nbsp;Mi Cuenta</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('CronogramaSecretariaController@index') }}" id="heading">&nbsp;&nbsp;Cronograma</a>
            </h8>
        </div>
  
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('T_notas_bloqueController@index') }}" id="heading">&nbsp;&nbsp;Salir</a>
            </h8>
        </div>
       <?php
      
  }
  ?>
        
    <?php
    
}elseif(($page=='usuario_estudiante')){
    ?>
        
        <div class="panel-heading">
            <h5 id="heading">
                
                {{session('nombres_usuario').'  '.session('apellidos_usuario')}}<br>
                {{session('login')}}<br>
                {{session('perfil')}}<br>
            </h5>
        </div>
  <br>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('PerfilEstudianteController@edit', ['id' => session('id')]) }}" id="heading">&nbsp;&nbsp;Mi Cuenta</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('PerfilEstudianteController@index', ['id' => session('id')]) }}" id="heading">&nbsp;&nbsp;Nota de Bloque</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('T_notas_bloqueController@index') }}" id="heading">&nbsp;&nbsp;Salir</a>
            </h8>
        </div>
       
        
    <?php
    
}
else{
    ?>
        <ul class="nav nav-list">

        </ul>
    <?php
    
}
//echo $page.'<-';
if(($page=="usuario_secretaria")or($page=="Secretaria"))
{
    
?>


				
<div class="panel-heading">
            <h5 id="heading">
                {{session('nombres_usuario').'  '.session('apellidos_usuario')}}<br>
                {{session('login')}}<br>
                {{session('perfil')}}<br>
                
                
            </h5>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('PerfilSecretariaController@edit', ['id' => session('id')]) }}" id="heading">&nbsp;&nbsp;Mi Cuenta</a>
            </h8>
        </div>
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('CronogramaSecretariaController@index') }}" id="heading">&nbsp;&nbsp;Cronograma</a>
            </h8>
        </div>
  
        <div class="panel panel-info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <h8 id="heading"><span class="glyphicon glyphicon-hand-right">
                </span> <a href="{{ action('T_notas_bloqueController@index') }}" id="heading">&nbsp;&nbsp;Salir</a>
            </h8>
        </div>
  
  <?php
  }
  ?>
