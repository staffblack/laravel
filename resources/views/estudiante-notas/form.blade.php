<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="control-label">{{ 'Id' }}</label>
    <input class="form-control" name="id" type="number" id="id" value="{{ isset($estudiantenota->id) ? $estudiantenota->id : ''}}" >
    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_nivel') ? 'has-error' : ''}}">
    <label for="id_nivel" class="control-label">{{ 'Id Nivel' }}</label>
    <input class="form-control" name="id_nivel" type="number" id="id_nivel" value="{{ isset($estudiantenota->id_nivel) ? $estudiantenota->id_nivel : ''}}" >
    {!! $errors->first('id_nivel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_materia') ? 'has-error' : ''}}">
    <label for="id_materia" class="control-label">{{ 'Id Materia' }}</label>
    <input class="form-control" name="id_materia" type="number" id="id_materia" value="{{ isset($estudiantenota->id_materia) ? $estudiantenota->id_materia : ''}}" >
    {!! $errors->first('id_materia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cedula_docente') ? 'has-error' : ''}}">
    <label for="cedula_docente" class="control-label">{{ 'Cedula Docente' }}</label>
    <input class="form-control" name="cedula_docente" type="number" id="cedula_docente" value="{{ isset($estudiantenota->cedula_docente) ? $estudiantenota->cedula_docente : ''}}" >
    {!! $errors->first('cedula_docente', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cedula_estudiante') ? 'has-error' : ''}}">
    <label for="cedula_estudiante" class="control-label">{{ 'Cedula Estudiante' }}</label>
    <input class="form-control" name="cedula_estudiante" type="number" id="cedula_estudiante" value="{{ isset($estudiantenota->cedula_estudiante) ? $estudiantenota->cedula_estudiante : ''}}" >
    {!! $errors->first('cedula_estudiante', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_bloque') ? 'has-error' : ''}}">
    <label for="id_bloque" class="control-label">{{ 'Id Bloque' }}</label>
    <input class="form-control" name="id_bloque" type="number" id="id_bloque" value="{{ isset($estudiantenota->id_bloque) ? $estudiantenota->id_bloque : ''}}" >
    {!! $errors->first('id_bloque', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nota') ? 'has-error' : ''}}">
    <label for="nota" class="control-label">{{ 'Nota' }}</label>
    <textarea class="form-control" rows="5" name="nota" type="textarea" id="nota" >{{ isset($estudiantenota->nota) ? $estudiantenota->nota : ''}}</textarea>
    {!! $errors->first('nota', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alcance') ? 'has-error' : ''}}">
    <label for="alcance" class="control-label">{{ 'Alcance' }}</label>
    <textarea class="form-control" rows="5" name="alcance" type="textarea" id="alcance" >{{ isset($estudiantenota->alcance) ? $estudiantenota->alcance : ''}}</textarea>
    {!! $errors->first('alcance', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
