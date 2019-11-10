<div class="form-group {{ $errors->has('cedula') ? 'has-error' : ''}}">
    <label for="cedula" class="control-label">{{ 'Cedula' }}</label>
    <input class="form-control" name="cedula" type="text" id="cedula" value="{{ isset($docente->cedula) ? $docente->cedula : ''}}" >
    {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grado') ? 'has-error' : ''}}">
    <label for="grado" class="control-label">{{ 'Grado' }}</label>
    <textarea class="form-control" rows="5" name="grado" type="textarea" id="grado" >{{ isset($docente->grado) ? $docente->grado : ''}}</textarea>
    {!! $errors->first('grado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    <label for="nombres" class="control-label">{{ 'Nombres' }}</label>
    <textarea class="form-control" rows="5" name="nombres" type="textarea" id="nombres" >{{ isset($docente->nombres) ? $docente->nombres : ''}}</textarea>
    {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="control-label">{{ 'Apellidos' }}</label>
    <textarea class="form-control" rows="5" name="apellidos" type="textarea" id="apellidos" >{{ isset($docente->apellidos) ? $docente->apellidos : ''}}</textarea>
    {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" value="{{ isset($docente->email) ? $docente->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <textarea class="form-control" rows="5" name="telefono" type="textarea" id="telefono" >{{ isset($docente->telefono) ? $docente->telefono : ''}}</textarea>
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}}">
    <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
    <textarea class="form-control" rows="5" name="cargo" type="textarea" id="cargo" >{{ isset($docente->cargo) ? $docente->cargo : ''}}</textarea>
    {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
    <label for="area" class="control-label">{{ 'Area' }}</label>
    <textarea class="form-control" rows="5" name="area" type="textarea" id="area" >{{ isset($docente->area) ? $docente->area : ''}}</textarea>
    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="date" id="foto" value="{{ isset($docente->foto) ? $docente->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grado') ? 'has-error' : ''}}">
    <label for="grado" class="control-label">{{ 'Grado' }}</label>
    <textarea class="form-control" rows="5" name="grado" type="textarea" id="grado" >{{ isset($docente->grado) ? $docente->grado : ''}}</textarea>
    {!! $errors->first('grado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
