<div class="form-group {{ $errors->has('login') ? 'has-error' : ''}}">
    <label for="login" class="control-label">{{ 'Login' }}</label>
    <input class="form-control" name="login" type="number" id="login" value="{{ isset($usuario->login) ? $usuario->login : ''}}" >
    {!! $errors->first('login', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    <label for="nombres" class="control-label">{{ 'Nombres' }}</label>
    <textarea class="form-control" rows="5" name="nombres" type="textarea" id="nombres" >{{ isset($usuario->nombres) ? $usuario->nombres : ''}}</textarea>
    {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="control-label">{{ 'Apellidos' }}</label>
    <textarea class="form-control" rows="5" name="apellidos" type="textarea" id="apellidos" >{{ isset($usuario->apellidos) ? $usuario->apellidos : ''}}</textarea>
    {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('perfil') ? 'has-error' : ''}}">
    <label for="perfil" class="control-label">{{ 'Perfil' }}</label>
    <select name="perfil" class="form-control" id="perfil" >
    @foreach (json_decode('{"Administrador":"Administrador","Secretaria":"Secretaria","Docente":"Docente","Representante":"Representante"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($usuario->perfil) && $usuario->perfil == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('perfil', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="control-label">{{ 'Id' }}</label>
    <input class="form-control" name="id" type="number" id="id" value="{{ isset($usuario->id) ? $usuario->id : ''}}" >
    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
