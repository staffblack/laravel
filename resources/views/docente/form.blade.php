<div class="form-group {{ $errors->has('cedula') ? 'has-error' : ''}}">
    <label for="cedula" class="control-label">{{ 'Cedula' }}</label>
    <input class="form-control" name="cedula" required="true" type="text" id="cedula"  value="{{ isset($docente->cedula) ? $docente->cedula : ''}}" maxlength="10" minlength="10" pattern="[0-9]+" title="Solo numero con un rando de 10 numeros"> 
    {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grado') ? 'has-error' : ''}}">
    <label for="grado" class="control-label">{{ 'Grado' }}</label>
     <input class="form-control" name="grado" required="true" type="text" id="grado" value="{{ isset($docente->grado) ? $docente->grado : ''}}" maxlength="10" >
    
    {!! $errors->first('grado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    <label for="nombres" class="control-label">{{ 'Nombres' }}</label>
    <input class="form-control" name="nombres" type="text" required="true" id="nombre" value="{{ isset($docente->nombres) ? $docente->nombres : ''}}" >
    {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="control-label">{{ 'Apellidos' }}</label>
    <input class="form-control" name="apellidos" type="text" required="true" id="apellidos" value="{{ isset($docente->apellidos) ? $docente->apellidos : ''}}" >
    {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" required="true" value="{{ isset($docente->email) ? $docente->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="number" id="telefono" required="true" value="{{ isset($docente->telefono) ? $docente->telefono : ''}}" >
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}}">
    <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
    <select class="form-control" name="cargo" id="cargo">
        <option value="{{ isset($docente->cargo) ? $docente->cargo : ''}}">{{ isset($docente->cargo) ? $docente->cargo : ''}}</option>
        <option value="Administrador">Administrador(a)</option>
        <option value="Secretaria">Secretaria</option>
        <option value="Docente">Docente</option>
        <option value="Sub Jefe de Área">Sub Jefe de Área</option>
        <option value="Jefe de Area">Jefe de Area</option>
        <option value="Inspector">Inspector(a)</option>
        <option value="Rector">Rector(a)</option>
    </select>
    {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
    <label for="area" class="control-label">{{ 'Area' }}</label>
    
    <select class="form-control" name="area">
        <option value="{{ isset($docente->area) ? $docente->area : ''}}">{{ isset($docente->area) ? $docente->area : ''}}</option>
        
                @foreach($area as $area)
                <option>{{$area->nombre}}</option>
                @endforeach
    </select>
    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" required="true" id="password" value="{{ isset($docente->password) ? $docente->password : ''}}" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <br>&nbsp;
    &nbsp;
    
    <br>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($docente->foto) ? $docente->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Guardar' ? 'Guardar' : 'Guardar' }}">
</div>
