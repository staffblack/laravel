<style type="text/css">
<!--
.Estilo1 {color: #FF0000}
.Estilo2 {color: #000000}
-->
</style>

@extends('plantilla')
@section('content')
<div class="encabezado" id="encabezado" >
  
    <table width="1000" border="0">
      <tr>
        <td class="Estilo30"><a href="usuarios">Usuarios</a></td>
      </tr>
      <tr>
        <td width="778"><form name="form1" class="form-horizontal" method="post" action="/portal/public/usuarios">
          {{ csrf_field() }}
          <table border="1" class="table table-bordered"  >
          
                  
                  <tr>
                    <th width="63" class="text-center Estilo20 Estilo16"><div align="left">Login</div></th>
                    <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="login_usuario" type="text" id="login_usuario" value="{{$login_usuario}}" maxlength="10">
                        </label>
                        <span class="Estilo31 Estilo1">*</span>
                        <input type="hidden" name="des" id="des" >
                        <input name="id_usuario" type="hidden" id="id_usuario" value="{{$id_usuario}}" >
                    </div></td>
                  </tr>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Password</strong></div></td>
                    <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="password_usuario" type="text" id="password_usuario" value="{{$password_usuario}}" maxlength="20">
                        </label>
                        <span class="Estilo31 Estilo1">*</span></div></td>
                  </tr>
                
                <tbody>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Nombres</strong></div></td>
                    <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="nombres_usuario" type="text" id="nombres_usuario" value="{{$nombres_usuario}}" size="50">
                        </label>
                        <span class="Estilo31 Estilo1">*</span></div></td>
                  </tr>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Apellidos</strong></div></td>
                    <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <input name="apellidos_usuario" type="text" id="apellidos_usuario" value="{{$apellidos_usuario}}" size="50">
                        </label>
                        <span class="Estilo31 Estilo1">*</span></div></td>
                  </tr>
                  <tr>
                    <td class="text-center Estilo20 Estilo16"><div align="left"><strong>Perfil</strong></div></td>
                    <td colspan="4" class="text-center Estilo20 Estilo16"><div align="left">
                        <label>
                        <select name="perfil_usuario" id="perfil_usuario">
                          <option value="{{$perfil_usuario}}">{{$perfil_usuario}}</option>
                          <option value="Administrador">Administrador</option>
                          <option value="Secretaria">Secretaria</option>
                                                </select>
                      </label>
                        <span class="Estilo31 Estilo1">*</span></div></td>
                  </tr>
                <tfoot>
                  <tr>
                    <th colspan="5" class="text-center Estilo20 Estilo16 Estilo1">{{$mensaje}}<br>
                      <span class="text-center Estilo20 Estilo16 Estilo2">
                      <input name="opcion" type="submit" id="opcion" value="Nuevo" {{$nuevo}} >
                      <input name="opcion" type="submit" id="opcion" value="Registrar" {{$registrar}}>
                      <input name="opcion" type="submit" id="opcion" value="Modificar" {{$modificar}}>
                      <input name="opcion" type="submit" id="opcion" value="Eliminar" {{$eliminar}}>
                    </span></th>
                  </tr>
                </tfoot>
              </table>
          <p>&nbsp;</p>
        </form>
            <form name="form1" method="post" action="">
              <table width="836" border="1" cellspacing="0" class="table table-striped table-bordered table-hover" id="tableMonedas">
                <thead>
                  <tr>
                    <th width="80" class="text-center Estilo20 Estilo16">Login</th>
                    <th width="80" class="text-center Estilo20 Estilo16">Password</th>
                    <th width="150" class="text-center Estilo20 Estilo16">Nombres</th>
                    <th width="150" class="text-center Estilo20 Estilo16">Apellidos</th>
                    <th width="50" class="text-center Estilo20 Estilo16">Perfil</th>
                    <th width="20" class="text-center Estilo20 Estilo16">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach($usuarios as $usuario)
                <tr>
                  <td class="Estilo16 Estilo20 text-center"><div align="left">{{$usuario->login}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$usuario->password }}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$usuario->nombres }}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$usuario->apellidos}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><div align="left">{{$usuario->perfil}}</div></td>
                  <td class="text-center Estilo20 Estilo16"><a href="modificar_usuario?id_usuario={{$usuario->id}}">Modificar</a></td>
                </tr>
                @endforeach
                <tfoot>
                </tfoot>
              </table>
            </form>
          <p></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
    </table>
</div>
@endsection