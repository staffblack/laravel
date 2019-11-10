<style type="text/css">
<!--
.Estilo1 {font-weight: bold}
.body {
  color: #ffffff;
}
.Estilo4 {
	color: #007bff;
	font-weight: bold;
}
-->
</style>
<?php
if(isset($_REQUEST['accion']))
{
    $accion=$_REQUEST['accion'];
}
else
{
    $accion='';
}

if($accion=='creado'){
   ?>
<script>
alert("Creado Satisfactoriamente");
</script> 
 <?php
    
    
}

if($accion=='editado'){
   ?>
<script>
alert("Editado Satisfactoriamente");
</script> 
 <?php
    
    
}
?>

   
@extends('layouts.plantilla')
    @section('content')
       <div class="col-lg-12 panel">
        <div class="col-lg-10 ">
          <h3>Mi Cuenta</h3><br>
        </div>
          <form action="/portal/public/docentes" method="post" enctype="multipart/form-data" name="form1">
        {{ csrf_field() }}
        <table  class="table table-striped table-bordered table-hover">
            <tr>
                <td>
                    Cédula
                </td>
                <td>
                    <input name="cedula_docente" type="text" id="cedula_docente" value="{{$cedula_docente}}" > 
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
              <td>
                  Grado
              </td>
              <td><label>
                    <input name="grado_docente" type="text" id="grado_docente" value="{{$grado_docente}}" size="50">
                  </label>
                    <span class="Estilo31 Estilo2">
                      
                    </span>
                </td>
                <td>
                    
                </td>
            </tr>
              <tr>
                <td>
                  
                      Nombres
                    
                </td>
                
                <td>
                    <label>
                      <input name="nombres_docente" type="text" id="nombres_docente" value="{{$nombres_docente}}" size="50">
                    </label>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                    <strong>Apellidos</strong>
                </td>
                <td>
                <label>
                    <input name="apellidos_docente" type="text" id="apellidos_docente" value="{{$apellidos_docente}}" size="50">
                    </label>
                </td> 
                <td></td>
              </tr>
              <tr>
                <td >
                    <strong>E-mail</strong>
                <td>
                    
                    <label>
                    <input name="email_docente" type="text" id="email_docente" value="{{$email_docente}}" size="50">
                    </label>
                </td>
                <td>
                    
                </td>
              </tr>
              <tr>
                <td>
                    <strong>Telefono</strong></td>
                <td>
                    
                    <label>
                    <input name="telefono_docente" type="text" id="telefono_docente" value="{{$telefono_docente}}" size="10">
                    </label>
                    <span class="Estilo31 Estilo2">*</span></td>
              </tr>
              <tr>
                <td>
                    <strong>Cargo</strong>
                </td>
                <td>
                  <input name="cargo_docente" type="text" id="cargo_docente" value="{{$cargo_docente}}" size="10" readonly="true">
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                <strong>Área</strong>
                </td>
                <td>
                  <select name="area_docente" id="area_docente">
                    <option value="{{$area_docente}}">{{$area_docente}}</option>
                    <option value="LENGUA Y LITERATURA">LENGUA Y LITERATURA</option>
                    <option value="MATEMÁTICAS">MATEMÁTICAS</option>
                    <option value="CIENCIAS NATURALES">CIENCIAS NATURALES</option>
                    <option value="EDUCACIÓN FÍSICA">EDUCACIÓN FÍSICA</option>
                    <option value="INGLÉS">INGLÉS</option>
                    <option value="CULTURA ESTÉTICA">CULTURA ESTÉTICA</option>
                    <option value="CIENCIAS SOCIALES">CIENCIAS SOCIALES</option>
                  </select>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                    <strong>Password</strong>
                </td>
                <td>
                    
                    <label>
                    <input name="password_docente" type="Password" id="password_docente" value="{{$password_docente}}" size="20" maxlength="20">
                    </label>
                </td>
                <td></td>
              </tr>
              <tfoot>
                <tr>
                  <td>
                      
                      <strong>Foto</strong>
                  </td>
                  <td >
                      <label></label>
                      <p class="Estilo31">
                        <input name="foto_docente" type="file" class="Estilo16" id="foto_docente" size="10" maxlength="10">
                      </p>
                  </td>
                  <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($foto_docente)) }}" height="80" width="70"></td>
                </tr>
                <tr>
                  <th>
                      <span class="Estilo2">{{$mensaje}}</span><br>
                  <input name="opcion" type="submit" id="opcion" value="Actualizar" >
                  </th>
                  <th></th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
      </form>
          <p></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
    </tr>
  </table>
            </div>
        </div>
    </div>
@endsection
