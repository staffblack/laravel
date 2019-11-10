
<div class="form-group {{ $errors->has('curso') ? 'has-error' : ''}}">
    <label for="curso" class="control-label">{{ 'Curso' }}</label>
    <select name="curso" id="curso" class="form-control"style="font-size:12px" >
        <option value="Primero">Primero</option>
        <option value="Segundo">Segundo</option>
        <option value="Tercero">Tercero</option>
        <option value="Octavo">Octavo</option>
        <option value="Noveno">Noveno</option>
        <option value="Decimo">Decimo</option>
        
    </select>
    {!! $errors->first('curso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('paralelo') ? 'has-error' : ''}}">
    <label for="paralelo" class="control-label">{{ 'Paralelo' }}</label>
    <select name="paralelo" id="paralelo" class="form-control" style="font-size:12px">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
    </select>
    {!! $errors->first('paralelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('oferta') ? 'has-error' : ''}}">
    <label for="oferta" class="control-label">{{ 'Oferta' }}</label>
    <select name="oferta" id="oferta" class="form-control" style="font-size:12px">
        <option value="Educación Básica General">Educación Básica General</option>
        <option value="Bachillerato General Unificado">Bachillerato General Unificado</option>
        <option value="Bachillerato Internacional">Bachillerato Internacional</option>
    </select>
    
    {!! $errors->first('oferta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modalidad') ? 'has-error' : ''}}">
    <label for="modalidad" class="control-label">{{ 'Modalidad' }}</label>
    <select name="modalidad" id="modalidad" class="form-control" style="font-size:12px">
        <option value="Matutina">Matutina</option>
        <option value="Vespertina">Vespertina</option>
    </select>
    
    {!! $errors->first('modalidad', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Guardar' : 'Create' }}">
</div>
