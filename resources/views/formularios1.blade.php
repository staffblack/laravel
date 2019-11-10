<style type="text/css">
<!--
.Estilo1 {font-weight: bold}
.Estilo5 {font-size: 12; font-weight: bold; }
.Estilo6 {font-size: 12px}
.Estilo7 {font-size: 12}
-->
</style>

<?php
$page='formularios1';
?>

<div class="container">
    <div class="row ">
@extends('plantilla')
@section('content')
        <div class="col-sm-12 panel ">
            
            <div class="col-sm-12 panel">
                <table class="tabla" border="0">
                <tr>
                    <td  align="left" valign="top" >
                        <span class="Estilo34">FORMULARIOS</span></div>
                    </td>
                </tr>
                </table>
                    <p>&nbsp;</p>
                <table class="table table-striped table-bordered table-hover" >
                    
                              <tr>
                                <th><div align="center" class="Estilo5">Documentos</div></th><th></th>
                              </tr>
                            
                            @foreach($formularios as $formulario)
                            
                            <?php
                           
                                ?>
                  <tr>
                      <td>
					  <div align="left" class="Estilo38 Estilo7">{{$formulario->nombre}} {{$formulario->descripcion}} 
					   </div>
                    </td>
					  <td class="text-center Estilo20 Estilo16">
					  <a href="storage/{{$formulario->documento}}" class="btn btn-primary">(Descargar)</a>
					  </td>
                    </tr>
                            @endforeach
                            
                            
                            
                            
                            
                  <tfoot>
                  </tfoot>
                        </table>        
                      <p>&nbsp;</p>      </td>
                    </tr>
                  </table>
            </div>
            
            </div>
    </div>
</div>
@endsection