<?php
        if(session('perfil')=='Estudiante')
        {
            ?>
         <ul class="nav nav-list">
    <li class="active open">
            <a href="#" class="dropdown-toggle">
                <span class="menu-text">
                    Estudiante &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
                </b>
            </a>
                <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="{{ action('PerfilEstudianteController@edit', ['id' => session('id')]) }}">
                        Mi cuenta
                    </a>
                        <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{ action('PerfilEstudianteController@index', ['id' => session('id')]) }}">
                        Notas de Bloque
                    </a>
                        <b class="arrow"></b>
                </li>
            
            <li class="">
                <a href="notas_bloque">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Salir</a>
            </li>
        </ul>
    </li>
</ul>
   
            <?php
        }
        if(session('perfil')=='Docente')
        {
            ?>
          <ul class="nav nav-list">
    <li class="active open">
            <a href="#" class="dropdown-toggle">
                <span class="menu-text">
                    Docente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
                </b>
            </a>
                <b class="arrow"></b>
    <ul class="submenu">
            <li class="">
                <a href="docentes?cedula_docente={{session('login')}}">
                    Mi cuenta...
                </a>
                    <b class="arrow"></b>
            </li>
            <?php
                $cedula=session('login');
                include '../../conexion3.php';
                $registros = mysqli_query($conexion, "select * from tutor_nivel where cedula_docente='$cedula'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
                        
      ?>
          <li class="">
                <a href="nota_estudiante">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Notas de Bloque...
                </a>
                <b class="arrow"></b>
            </li>
          <?php
                    }
                    else
                    {
                        //echo 'no existe';
                    }
            ?>
            
            
            <li class="">
                <a href="notas_bloque">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Salir</a>
            </li>
        </ul>
    </li>
</ul>
  
            <?php
        }
        if(session('perfil')=='Administrador')
        {
            ?>
            
            <?php
        }
        if(session('perfil')=='Secretaria')
        {
            ?>
         <ul class="nav nav-list">
    <li class="active open">
            <a href="#" class="dropdown-toggle">
                <span class="menu-text">
                    Secretaria&nbsp&nbsp&nbsp&nbsp&nbsp
                </span>
                </b>
            </a>
                <b class="arrow"></b>
    <ul class="submenu">
            <li class="">
                    <a href="perfil-secretaria/{{session('id')}}/edit">
                        Mi cuenta
                    </a>
                        <b class="arrow"></b>
                </li>
            <li class="">
                <a href="cronograma-secretaria">
                    Cronograma
                </a>
                    <b class="arrow"></b>
            </li>
            
            <li class="">
                <a href="notas_bloque">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Salir</a>
            </li>
        </ul>
    </li>
</ul>
   
            <?php
        }
        ?>
					
