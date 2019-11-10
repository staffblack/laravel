<ul class="nav nav-pills">
<li class="nav-item">
    <a class="nav-link {{request()->is('index') ? 'active' : '' }}" href="index"> Inicio </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{request()->is('nuestro_colegio') ? 'active' : ''}} " href="nuestro_colegio"> Nuestro colegio </a>
  </li>
    <li class="nav-item">
    <a class="nav-link {{request()->is('oferta_academica') ? 'active' : '' }}" href="oferta_academica"> Oferta académica </a>
  </li>
 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle {{request()->is('comunidad_educativa') ? 'show active' : '' }} " data-toggle="dropdown" href="comunidad_educativa" role="button" aria-haspopup="true" aria-expanded="true"> Comunidad educativa </a>
    <div class="dropdown-menu {{request()->is('comunidad_educativa') ? 'show active' : '' }}" aria-labelledby="navbarDropdown">
      <a class="dropdown-item {{request()->is('comunidad_educativa') ? 'show active' : '' }}" href="comunidad_educativa_docentes">Docentes</a>
      <a class="dropdown-item {{request()->is('comunidad_educativa') ? 'show active' : '' }}" href="comunidad_educativa_docentes?trabajador=Administrativo">Administrativos</a>
      <a class="dropdown-item {{request()->is('comunidad_educativa') ? 'show active' : '' }}" href="comunidad_educativa_docentes?trabajador=Servicio">Servicio</a>
     
    </div>
  </li>
    <li class="nav-item">
    <a class="nav-link {{request()->is('cronograma1') ? 'active' : '' }}" href="cronograma1"> Cronograma </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link {{request()->is('notas_bloque') ? 'active' : '' }}" href="notas_bloque"> Notas de bloque </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{request()->is('formularios') ? 'active' : '' }}" href="formularios1"> Formularios </a>
  </li>
</ul>