<div class="form-group {{ $errors->has('cedula') ? 'has-error' : ''}}">
    <label for="cedula" class="control-label">{{ 'Cedula' }}</label>
    <input class="form-control" name="cedula" type="text" id="cedula" value="{{ isset($docenteperfil->cedula) ? $docenteperfil->cedula : ''}}" >
    {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    <label for="nombres" class="control-label">{{ 'Nombres' }}</label>
    <input class="form-control" name="nombres" type="text" id="nombres" value="{{ isset($docenteperfil->nombres) ? $docenteperfil->nombres : ''}}" >
    {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="control-label">{{ 'Apellidos' }}</label>
    <input class="form-control" name="apellidos" type="text" id="apellidos" value="{{ isset($docenteperfil->apellidos) ? $docenteperfil->apellidos : ''}}" >
    {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" value="{{ isset($docenteperfil->email) ? $docenteperfil->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($docenteperfil->telefono) ? $docenteperfil->telefono : ''}}" >
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" value="{{ isset($docenteperfil->password) ? $docenteperfil->password : ''}}" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($docenteperfil->foto) ? $docenteperfil->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grado') ? 'has-error' : ''}}">
    <label for="grado" class="control-label">{{ 'Grado' }}</label>
    <input class="form-control" name="grado" type="text" id="grado" value="{{ isset($docenteperfil->grado) ? $docenteperfil->grado : ''}}" >
    {!! $errors->first('grado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Guardar' : 'Create' }}">
</div>
