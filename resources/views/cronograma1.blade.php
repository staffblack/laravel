<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<?php
$page='cronograma1';
?>

<div class="container">
    <div class="row ">
    @extends('plantilla')
    @section('content')
    <div class="col-sm-8 panel">
        
    <div class="col-sm-9 panel" >
        <div class="col-sm-4 panel">
            &nbsp;
        </div>
            <div class="col-sm-4 panel">
                    <a href="cronograma1?id_mes={{$id_mes}}&&nombre_mes={{$nombre_mes}}&&ano={{$ano}}&&buscar=-1"  class="btn btn-info Estilo20 Estilo16"><< </a></strong>
                    <strong>
                                        {{$ano }}
                    </strong>
                    <strong>
                    <a href="cronograma1?id_mes={{$id_mes}}&&nombre_mes={{$nombre_mes}}&&ano={{$ano}}&&buscar=1"  class="btn btn-info Estilo20 Estilo16"
                                           >>> 
                    </a>
            </div>
        <div class="col-sm-4 panel">
            &nbsp;
        </div>
            
      <div class="col-sm-12 panel">
        <div class="module mod-line  deepest" style="min-height: 5px;">
          <div align="center"><span class="Estilo34">
              <span class="text-center Estilo20 Estilo16">Actividades mes de   {{$nombre_mes}} {{$ano}}</span></span> 
          </div>
        </div>
      </div>
      <div style="overflow-x:auto;">
            <table class="table" width="20%">
              <tr>
			         <td >
                  <div align="center"><strong> L </strong></div>
               </td>
			         <td >
                  <div align="center"><strong>M </strong></div>
                </td>
                <td >
                  <div align="center"><strong> M</strong></div>
                </td> 
			<td ><div align="center"><strong> J</strong></div></td> 
			<td ><div align="center"><strong> V</strong></div></td> 
			<td ><div align="center"><strong> S</strong></div></td> 
			<td ><div align="center"><strong> D</strong></div></td> 
			</tr>
			<tr>
              <input name="contador" type="hidden" id="contador" value="{{$contador=0}}">
			  <input name="contador" type="hidden" id="contador" value="{{$primer_dia1=1}}">
			 
			  
			  @if ($primer_dia=='Lunes')
					    
						 <input name="contador2" type="hidden" id="contador2" value="{{$primer_dia1=1}}">
					@endif
					
					@if ($primer_dia=='Martes')
					    
						 <input name="contador2" type="hidden" id="contador2" value="{{$primer_dia1=2}}">
					@endif
					
					@if ($primer_dia=='Miercoles')
					    
						 <input name="contador2" type="hidden" id="contador2" value="{{$primer_dia1=3}}">
					@endif
					
					@if ($primer_dia=='Jueves')
					    
						 <input name="contador2" type="hidden" id="contador2" value="{{$primer_dia1=4}}">
					@endif
					
					@if ($primer_dia=='Viernes')
					    
						 <input name="contador2" type="hidden" id="contador2" value="{{$primer_dia1=5}}">
					@endif
					@if ($primer_dia=='Sabado')
					    
						 <input name="contador2" type="hidden" id="contador2" value="{{$primer_dia1=6}}">
					@endif
					@if ($primer_dia=='Domingo')
					    
						 <input name="contador2" type="hidden" id="contador2" value="{{$primer_dia1=7}}">
					@endif
					
              @for ($i = 1; $i <= ($dias_mes+$primer_dia1-1); $i++)
  <td >
			  
	<table class="table" border="0">
                <thead>
                  <tr>
                    <th align="center" class="Estilo30">
										
					<div align="center">
					@if ($i>=$primer_dia1)
									
					{{$i-$primer_dia1+1}}
					
					
					 <input name="contador1" type="hidden" id="contador1" value="{{$contador1=0}}">
                      @foreach($cronogramas as $cronograma)
                          @if ($cronograma->dia==$i-$primer_dia1+1)
                      <input name="contador1" type="hidden" id="contador1" value="{{$contador1=$contador1+1}}">
                          @if ($contador1==1) <br>
                      <a href="mostrar_actividades_dia?id_mes={{$id_mes}}&&nombre_mes={{$nombre_mes}}&&dia={{$cronograma->dia}}&&ano={{$ano}}"  class="btn btn-info Estilo20 Estilo16">Ver  </a>    @endif         
                        @endif
                      
                                  @endforeach	
					                       @endif					    
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                      </table>			  
                    </td>
                      <input name="contador2" type="hidden" id="contador" value="{{$contador=$contador+1}}">
                  @if ($contador==7)
		            <tr>
                  <input name="contador2" type="hidden" id="contador" value="{{$contador=0}}">
                </tr>
			       @endif
            @endfor 
          </table>

        </div>
        </div>
        
    </div>
    <div class="col-sm-4 panel"  >
          
            @foreach($lista_actividades_dia as $actividades_dia)
              <section id="top-a" class="grid-block ">
                <div class="grid-box width5 grid-h ">
                  <table  class="table">
                    <tbody>
                      <tr>
                        <td width="100%"><p align="justify"> <strong>{{$actividades_dia->tipo}}</strong><br />
                                    Fecha: {{$actividades_dia->fecha}}<br />
                                    Hora: </em>{{$actividades_dia->hora}}<br />
                                    Descripci&oacute;n: {{$actividades_dia->descripcion}} <br />
                                    Responsable: {{$actividades_dia->responsable}}</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </section>
            @endforeach
        
      </div>
</div>  
 @endsection
 