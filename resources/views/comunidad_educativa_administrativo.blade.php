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
$page='comunidad_educativa_docentes';
?>

@extends('plantilla')
@section('content')

    <div class="container">
        <div class="row">  
            <div class="container">
            <br>
        <div class="panel col-lg-12">
               
        
        
         
        </table>
          <form name="form1" method="post" action="">
            <input name="contador" type="hidden" id="contador" value="{{$contador=0}}">
            
              @foreach($trabajadores as $trabajador)
                
            <div class="col-sm-4">
                </p>
                    <div align="left" class="Estilo46">
                        <div align="left" class="Estilo46">
                            <h5>
                            <p align="center" id='heading'> 
                                <img src="data:image/png;base64,{{ chunk_split(base64_encode($trabajador->foto)) }}" height="100" width="90">
                    <br>
                                {{$trabajador->grado }}{{$trabajador->nombres }}{{$trabajador->apellidos }}
                                <br>
                                <strong style="color:#007bff; ">Telelefono: </strong>{{$trabajador->telefono }}
                                <br>
                                <strong style="color:#007bff; ">Cargo: </strong>{{$trabajador->cargo }}
                                <br>
                                <strong style="color:#007bff; ">Funcion: </strong>{{$trabajador->funcion }}
                            </p
                            </h5>
                        </div>
                    </div>
            </div>
                            
                          
                 
                             </td>
                <input name="contador2" type="hidden" id="contador" value="{{$contador=$contador+1}}">
                @if ($contador==2)
                <input name="contador2" type="hidden" id="contador" value="{{$contador=0}}">
              <tr> @endif
                @endforeach </tr>
            </table>
           
          </form>
      
         
            </div>
    </div>
</div>
  
@endsection