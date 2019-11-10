
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" required="true" type="text" id="nombre" value="{{ isset($formulario->nombre) ? $formulario->nombre : ''}}"
    
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria') ? 'has-error' : ''}}">
    <label for="categoria" class="control-label">{{ 'Categoria' }}</label>
    <input class="form-control" name="categoria" required="true" type="text" id="categoria" value="{{ isset($formulario->categoria) ? $formulario->categoria : ''}}">
    {!! $errors->first('ca', 'tegoria<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" required="true" type="textarea" id="descripcion" >{{ isset($formulario->descripcion) ? $formulario->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('documento') ? 'has-error' : ''}}">
    <label for="documento" class="control-label">{{ 'Documento' }}</label>
    <input class="form-control" name="documento" type="file" id="documento" required="true" value="{{ isset($formulario->documento) ? $formulario->documento : ''}}" >
    {!! $errors->first('documento', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
