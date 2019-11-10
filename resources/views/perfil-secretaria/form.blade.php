<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    <label for="nombres" class="control-label">{{ 'Nombres' }}</label>
    <textarea class="form-control" rows="1" name="nombres" type="text" id="nombres" required="true" >{{ isset($perfilsecretarium->nombres) ? $perfilsecretarium->nombres : ''}}</textarea>
    {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="control-label">{{ 'Apellidos' }}</label>
    <input class="form-control" name="apellidos" type="text" id="apellidos" required="true" value="{{ isset($perfilsecretarium->apellidos) ? $perfilsecretarium->apellidos : ''}}" >
    {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('login') ? 'has-error' : ''}}">
    <label for="login" class="control-label">{{ 'Login' }}</label>
    <textarea class="form-control" rows="1" name="login" type="textarea" id="login" required="true">{{ isset($perfilsecretarium->login) ? $perfilsecretarium->login : ''}}</textarea>
    {!! $errors->first('login', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" required="true" value="{{ isset($perfilsecretarium->password) ? $perfilsecretarium->password : ''}}">
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('perfil') ? 'has-error' : ''}}">
    <label for="perfil" class="control-label">{{ 'Perfil' }}</label>
    <select name="perfil" class="form-control" id="perfil" >
    @foreach (json_decode('{"Secretaria":"Secretaria"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($perfilsecretarium->perfil) && $perfilsecretarium->perfil == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('perfil', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Create' }}">
</div>
