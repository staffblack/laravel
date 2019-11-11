
<div class="form-group {{ $errors->has('cedula') ? 'has-error' : ''}}">
    <label for="cedula" class="control-label">{{ 'Cedula' }}</label>
    <input class="form-control" name="cedula" type="text" id="cedula" value="{{ isset($estudiante->cedula) ? $estudiante->cedula : ''}}" required maxlength="10" minlength="10" pattern="[0-9]+" title="Solo numero con un rando de 10 numeros">
    {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    <label for="nombres" class="control-label">{{ 'Nombres' }}</label>
    <input class="form-control" name="nombres" type="text" id="nombres" value="{{ isset($estudiante->nombres) ? $estudiante->nombres : ''}}" required>
    {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="control-label">{{ 'Apellidos' }}</label>
    <input class="form-control" name="apellidos" type="text" id="apellidos" value="{{ isset($estudiante->apellidos) ? $estudiante->apellidos : ''}}" required>
    {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono_representante') ? 'has-error' : ''}}">
    <label for="telefono_representante" class="control-label">{{ 'telefono_representante' }}</label>
    <input class="form-control" name="telefono_representante" type="text" id="telefono_representante" value="{{ isset($estudiante->telefono_representante) ? $estudiante->telefono_representante : ''}}" required maxlength="10" minlength="10" pattern="[0-9]+" title="Solo numero con un rando de 10 numeros">
    {!! $errors->first('telefono_representante', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" value="{{ isset($estudiante->password) ? $estudiante->password : ''}}" required="">
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
