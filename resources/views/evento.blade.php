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
$page='evento';
?>
@extends('plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-10">
            @foreach($cronograma as $item)
                <div class="col-lg-12 panel"> 
                    <div class="col-lg-12 panel">
                        <h4 class="Estilo1 lighter widget-title"><strong><strong>{{ $item->nombre }} </strong></h4>
                    </div>
                    <div class="col-lg-12">
                                     
                                                <?php
                                                if(isset($_REQUEST['search']))
                                                {
                                                    $search=$_REQUEST['search'];
                                                }
                                                else{
                                                    $search='';
                                                }
                                                //echo $item->foto;
                                                if(($item->foto)!=''){
                                                    ?>
                                                <p align="center">
                                                <img src="data:image/png;base64,{{ chunk_split(base64_encode($item->foto)) }}" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                                                </p>
                                                                                             
                                                        <?php
                                                }
                                                else{
                                                    ?>
                                                
                                                        <?php
                                                }
                                                ?>
                    </div>
                    <div class="col-lg-12">
                                    <p align="justify"><h3>{{ $item->descripcion }}</h3></p>
                                    
                    </div>
                                
                                </div>
                                @endforeach
                                
                               <div class="col-lg-12 panel panel-default">
                            <div class="pagination-wrapper"> {!! $cronograma->appends(['search' => Request::get('search')])->render() !!} </div>
                               </div>

            </div>
</div>   
            </div> 
        </div> 
    </div> 
@endsection

