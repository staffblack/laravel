

@extends('plantilla')
@section('content')



<div class="container-fluid" >
    
        <div class="col-lg-12 panel panel-default panel-heading"  >
            <div class="col-lg-12" >
            </div>
            

   <?php
   include ('../conexion3.php');
   $cronograma=mysqli_query($conexion,"select * from cronograma where id='$_REQUEST[id]'") or
        die("Problemas en el select:".mysqli_error($conexion));

            if ($cro=mysqli_fetch_array($cronograma))
            {

            
   ?>
            <div class="col-lg-12">
                
            <div class="col-lg-12">
                <h3 class="Estilo1 lighter widget-title"><strong ><p align="left">NOTICIAS DESTACADAS</p> </strong>
                </h3>
                <div class="col-lg-12">
                    <br>
                    <h3><?php echo utf8_encode($cro['nombre'])?></h3>
                </div>
                <div class="col-lg-4">
                    
                </div>
                
                <div class="col-lg-8">
                   <img src="data:image/png;base64,{{ chunk_split(base64_encode($cro['foto'])) }}" width="50%" height="50%" />
                    
                </div>
                <div class="col-lg-12">
                    <br>
                    <h2><?php echo utf8_encode($cro['descripcion'])?></h2>
                </div>  
                <div class="col-lg-12">
                    <br>
                    <h4><?php echo 'Fecha Publicacion:'.utf8_encode($cro['fecha'])?></h4>
                </div> 
                
            </div>     
            </div>
            <?php
            }
            ?>
</div>
        
    </div>
        
@endsection