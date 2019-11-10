<div class="form-group {{ $errors->has('cedula') ? 'has-error' : ''}}">
<label for="cedula" class="control-label">&nbsp&nbsp{{ 'Cedula' }}</label><br>
				<input name="cedula" class="form-control"  type="text" id="cedula" value="{{ isset($perfilestudiante->cedula) ? $perfilestudiante->cedula : ''}}" readonly="" maxlength="10" minlength="10" pattern="[0-9]+" title="Solo numero con un rando de 10 numeros">
				{!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
<label for="nombres" class="control-label">{{ 'Nombres' }}</label>
				<textarea  rows="1" name="nombres" class="form-control"  type="textarea" id="nombres" >{{ isset($perfilestudiante->nombres) ? $perfilestudiante->nombres : ''}}</textarea>
				{!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
<label for="apellidos" class="control-label">{{ 'Apellidos' }}</label>
<textarea class="form-control" rows="1" name="apellidos" type="textarea" id="apellidos" >{{ isset($perfilestudiante->apellidos) ? $perfilestudiante->apellidos : ''}}</textarea>
<input class="form-control" name="apellidos" id="apellidos" type="text"value="{{ isset($perfilestudiante->apellidos) ? $perfilestudiante->apellidos : ''}}" required>

			{!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('telefono_representante') ? 'has-error' : ''}}">
<label for="apellidos" class="control-label">{{ 'Telefono' }}</label>
<input class="form-control" name="telefono_representante" id="telefono_representante" type="text"value="{{ isset($perfilestudiante->telefono_representante) ? $perfilestudiante->telefono_representante : ''}}" required maxlength="10" minlength="10" pattern="[0-9]+" title="Solo numero con un rando de 10 numeros">
	{!! $errors->first('telefono_representante', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono_representante') ? 'has-error' : ''}}">
	<label for="password" class="control-label">{{ 'Password' }}</label>
		<input class="form-control" name="password" id="password" type="password"value="{{ isset($perfilestudiante->password) ? $perfilestudiante->password : ''}}">
		{!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono_representante') ? 'has-error' : ''}}">
<input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Create' }}">
</div>	




