
<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <?php 
    $fecha=date('Y-m-d');
    //echo $fecha;
    ?>
    
    <input class="form-control" name="fecha" type="date" id="fecha" required="true" min="<?php echo $fecha;?>" value="{{ isset($cronogramasecretarium->fecha) ? $cronogramasecretarium->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hora') ? 'has-error' : ''}}">
    <label for="hora" class="control-label">{{ 'Hora' }}</label>
    <input class="form-control" name="hora" type="time" id="hora" required="true" value="{{ isset($cronogramasecretarium->hora) ? $cronogramasecretarium->hora : ''}}" >
    {!! $errors->first('hora', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <select name="tipo" class="form-control" id="tipo" >
    @foreach (json_decode('{"Noticia":"Noticia","Evento":"Evento","Actividad":"Actividad"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($cronogramasecretarium->tipo) && $cronogramasecretarium->tipo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <textarea class="form-control" rows="1" name="nombre" type="textarea" required="true" id="nombre" >{{ isset($cronogramasecretarium->nombre) ? $cronogramasecretarium->nombre : ''}}</textarea>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="2" name="descripcion" type="textarea" id="descripcion" required="true">{{ isset($cronogramasecretarium->descripcion) ? $cronogramasecretarium->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('responsable') ? 'has-error' : ''}}">
    <label for="responsable" class="control-label">{{ 'Responsable' }}</label>
    <textarea class="form-control" rows="2" name="responsable" type="textarea" id="responsable" required="true">{{ isset($cronogramasecretarium->responsable) ? $cronogramasecretarium->responsable : ''}}</textarea>
    {!! $errors->first('responsable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" required="true" value="{{ isset($cronogramasecretarium->foto) ? $cronogramasecretarium->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
