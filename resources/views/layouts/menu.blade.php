<li class="{{ Request::is('puebas*') ? 'active' : '' }}">
    <a href="{!! route('puebas.index') !!}"><i class="fa fa-edit"></i><span>Puebas</span></a>
</li>

<li class="{{ Request::is('pruebas*') ? 'active' : '' }}">
    <a href="{!! route('pruebas.index') !!}"><i class="fa fa-edit"></i><span>Pruebas</span></a>
</li>

<li class="{{ Request::is('estudiantes*') ? 'active' : '' }}">
    <a href="{!! route('estudiantes.index') !!}"><i class="fa fa-edit"></i><span>Estudiantes</span></a>
</li>

