
<div class="form-group {{ $errors->has('login') ? 'has-error' : ''}}">
    <label for="login" class="control-label">{{ 'Login' }}</label>
    <input class="form-control" name="login" type="number" id="password" value="{{ isset($usuario->login) ? $usuario->login : ''}}" required="true">
    {!! $errors->first('login', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" value="{{ isset($usuario->password) ? $usuario->password : ''}}" required="true">
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    <label for="nombres" class="control-label">{{ 'Nombres' }}</label>
    <input class="form-control"  name="nombres" type="text" id="nombres" required="true" value="{{ isset($usuario->nombres) ? $usuario->nombres : ''}}">
    {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="control-label">{{ 'Apellidos' }}</label>
    <input class="form-control" required="true" name="apellidos" type="text" id="apellidos" value="{{ isset($usuario->apellidos) ? $usuario->apellidos : ''}}" >
    {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('perfil') ? 'has-error' : ''}}">
    <label for="perfil" class="control-label">{{ 'Perfil' }}</label>
    <select name="perfil" class="form-control" id="perfil"  style="font-size:12px">
    @foreach (json_decode('{"Administrador":"Administrador","Secretaria":"Secretaria","Docente":"Docente","Representante":"Representante"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($usuario->perfil) && $usuario->perfil == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('perfil', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Create' }}">
</div>
