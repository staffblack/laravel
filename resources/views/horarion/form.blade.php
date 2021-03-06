
<div class="form-group {{ $errors->has('cedula_docente') ? 'has-error' : ''}}">
    <label for="cedula_docente" class="control-label">{{ 'Cedula Docente' }}</label>
    <input class="form-control" name="cedula_docente" type="number" id="cedula_docente" value="{{ isset($horarion->cedula_docente) ? $horarion->cedula_docente : ''}}" >
    {!! $errors->first('cedula_docente', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_nivel') ? 'has-error' : ''}}">
    <label for="id_nivel" class="control-label">Nivel</label>
    <select name="id_nivel" id="id_nivel" class="form-control">
        <option value="{{ isset($horarion->id_nivel) ? $horarion->id_nivel : ''}}">No hacer Cambios</option>
    <?php
    include '../conexion3.php';
    $nivel = mysqli_query($conexion, "select * FROM nivel ORDER BY oferta") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($nivel)) {
     ?>
        <option value="<?php echo $reg['id'];?>"><?php echo utf8_encode($reg['oferta']).', '.$reg['curso'].'-'.$reg['paralelo'];?></option>
     <?php
  }
    ?>
    </select>
    
    {!! $errors->first('id_nivel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_materia') ? 'has-error' : ''}}">
    <label for="id_materia" class="control-label">Materia</label>
    <select name="id_materia" id="id_materia" class="form-control">
        <option value="{{ isset($horarion->id_materia) ? $horarion->id_materia : ''}}">No hacer Cambios</option> 
    <?php
    include '../conexion3.php';
    $materia = mysqli_query($conexion, "select * FROM materia") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($materia)) {
     ?>
        <option value="<?php echo $reg['id'];?>"><?php echo utf8_encode($reg['nombre']);?></option>
     <?php
  }
    ?>
    </select>
    
    {!! $errors->first('id_materia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_dia') ? 'has-error' : ''}}">
    <label for="id_dia" class="control-label">Dia</label>
    <select name="id_dia" id="id_dia" class="form-control">
        <option value="{{ isset($horarion->id_dia) ? $horarion->id_dia : ''}}">No hacer Cambios</option> 
        <option  value="1">Lunes</option>
        <option  value="2">Martes</option>
        <option  value="3">Miercoles</option>
        <option  value="4">Jueves</option>
        <option  value="5">Viernes</option>
    </select>
    
    {!! $errors->first('id_dia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_hora') ? 'has-error' : ''}}">
    <label for="id_hora" class="control-label">Hora</label>
    <select name="id_hora" class="form-control">
        <option value="{{ isset($horarion->id_hora) ? $horarion->id_hora : ''}}">No hacer Cambios</option>    
    <?php
    include '../conexion3.php';
    $materia = mysqli_query($conexion, "select * FROM hora ORDER BY modalidad,id") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($materia)) {
     ?>
        <option id="id_hora" value="<?php echo $reg['id'];?>"><?php echo utf8_encode($reg['modalidad']).' '.utf8_encode($reg['nombre']).',Inicio:'.utf8_encode($reg['hora_inicio']).', Final:'.utf8_encode($reg['hora_fin']);?></option>
     <?php
  }
    ?>
    </select>
    
    {!! $errors->first('id_hora', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
