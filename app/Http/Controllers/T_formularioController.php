<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\T_formulario; //modelo

class T_formularioController extends Controller
{
  public function index()
  {
  $id_formulario="";
  $nombre_formulario="";
  $descripcion_formulario="";
  $ducumento_formulario="";
  $mensaje="";
  
  $registrar='';
  $nuevo='';
  $modificar='disabled';
  $eliminar="disabled";
  
  $lista_formularios = \DB::table('formulario')
			->select('*')
			->get();
  

			

			
return view('formulario')->with('formulariosx',$lista_formularios2)->with('formularios',$lista_formularios)->with('id_formulario',$id_formulario)->with('nombre_formulario',$nombre_formulario)->with('descripcion_formulario',$descripcion_formulario)->with('documento_formulario',$ducumento_formulario)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu','usuario_administrador');

}
  
  

  
  protected function validarFormulario($nombre,$descripcion)
  {
  	if (($nombre!='') && ($descripcion!='') )
	{
	return true;
	}
	else
	{
	return false;
	}
  }
 
 	protected function validarFoto($foto)
	{
	
	      
			 if ($foto!='')
			 {
			 return true;
			 }
			 else
			 {
			 return false;
			 }
	}

public function store(Request $request) 
{
 
   $id_formulario=$request->input('id_formulario');
  $nombre_formulario=$request->input('nombre_formulario');
  $descripcion_formulario=$request->input('descripcion_formulario');
  $ducumento_formulario=$request->input('documento_formulario');
  
  $boton_opcion=$request->input('opcion');
  $mensaje='';


 if ($boton_opcion=='Nuevo')
 {
    $nuevo='';
	$registrar='';
	$modificar='disabled';
	$eliminar="disabled";
  $id_formulario="";
  $nombre_formulario="";
  $descripcion_formulario="";
  $ducumento_formulario="";
  $mensaje="";
 }
 
if ($boton_opcion=='Registrar')
 {
 
    $nuevo='';
	$registrar='';
	$modificar='disabled';
	$eliminar="disabled";
   

  
   if (($this->validarFormulario($nombre_formulario,$descripcion_formulario)==true))
   {
  
	        
		   $file = $request->file('documento_formulario');
		   
		   if ($this->validarFoto($file)==true)
		   {
		    // $nombre = $file->getClientOriginalName();
  		   $contents = $file->openFile()->fread($file->getSize());
	      // $foto_estudiante = addslashes(file_get_contents($file));
		   }
		   else
		   {
		   $contents='';
		   }
         
 
			$formulario =new T_formulario;
			$formulario->nombre=$request->input('nombre_formulario');
			$formulario->descripcion=$request->input('descripcion_formulario');
			if ($contents!='')
			{
			$formulario->documento=$contents;
			}
			$formulario->save();
			$id_formulario=$formulario->id;
			$documento_formulario=$formulario->documento;
			$mensaje='Datos registrados correctamente';
	
 
  }
  else
  {
  
   $mensaje='Datos mal ingresados';
  }
 
 }
 
 
 if ($boton_opcion=='Modificar')
 {
 
    $nuevo='';
	$registrar='disabled';
	$modificar='';
	$eliminar='';
	$mensaje='';

    $id_formulario=$request->input('id_formulario');
  $nombre_formulario=$request->input('nombre_formulario');
  $descripcion_formulario=$request->input('descripcion_formulario');
  $ducumento_formulario=$request->input('documento_formulario');
  $boton_opcion=$request->input('opcion');
  
  
  	
	     $file = $request->file('documento_formulario');
					
		  
		     if ($this->validarFoto($file)==true)
		   {
		    // $nombre = $file->getClientOriginalName();
  		   $contents = $file->openFile()->fread($file->getSize());
	      // $foto_estudiante = addslashes(file_get_contents($file));
		   }
		   else
		   {
		   $contents='';
		   }
		  
		   
			if (($this->validarFormulario($nombre_formulario,$descripcion_formulario)==true))
             {

		    $formulario= T_formulario::find($id_formulario);
		    $formulario->nombre=$request->input('nombre_formulario');
			$formulario->descripcion=$request->input('descripcion_formulario');
					
			if ($contents!='')
			{
			$formulario->documento=$contents;
			}
			
			$formulario->save();
			$ducumento_formulario=$formulario->documento;
			$id_formulario=$formulario->id;
			$mensaje='Datos modificados correctamente';
			}
			else
			{
			 $mensaje='Datos mal ingresados';
			}

}


if ($boton_opcion=='Eliminar')
 {
 $nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
  $id_formulario=$request->input('id_formulario');
    $nombre_formulario=$request->input('nombre_formulario');
	$descripcion_formulario=$request->input('descripcion_formulario');
   $mensaje='';
	

	T_formulario::destroy($id_formulario);
	$mensaje='Datos eliminados correctamente';

 }
 

if ($boton_opcion=='Buscar')
 {
 

 
 }
 
 

$nuevo='';
 
 
    
  $lista_formularios = \DB::table('formulario')
			->select('*')
			->get();
			

			
return view('formulario')->with('formularios',$lista_formularios)->with('id_formulario',$id_formulario)->with('nombre_formulario',$nombre_formulario)->with('descripcion_formulario',$descripcion_formulario)->with('documento_formulario',$ducumento_formulario)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu','usuario_administrador');

}


public function modificar_formulario()
{

$id_formulario=$_GET["id_formulario"];
  $nombre_formulario="";
  $descripcion_formulario="";
  $ducumento_formulario="";
   $mensaje='';

$nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
$mensaje='';

 $formulario= \DB::table('formulario')
			->select('*')
			->where('id',$id_formulario)
			->get();
			
			foreach($formulario as $formulario1)
				{
		 $id_formulario=$formulario1->id;
	 $nombre_formulario=$formulario1->nombre;
    $descripcion_formulario=$formulario1->descripcion;
    $ducumento_formulario=$formulario1->documento;
 
				}


			
			$lista_formularios = \DB::table('formulario')
			->select('*')
			->get();
			
		
return view('formulario')->with('formularios',$lista_formularios)->with('id_formulario',$id_formulario)->with('nombre_formulario',$nombre_formulario)->with('descripcion_formulario',$descripcion_formulario)->with('documento_formulario',$ducumento_formulario)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu','usuario_administrador');

}
	 
	 
	 public function descargar_formulario()
{

$id_formulario=$_GET["id_formulario"];
  $nombre_formulario="";
  $descripcion_formulario="";
  $ducumento_formulario="";
   $mensaje='';

$nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
$mensaje='';

 $formulario= \DB::table('formulario')
			->select('*')
			->where('id',$id_formulario)
			->get();
			
			foreach($formulario as $formulario1)
				{
		 $id_formulario=$formulario1->id;
	 $nombre_formulario=$formulario1->nombre;
    $descripcion_formulario=$formulario1->descripcion;
    $ducumento_formulario=$formulario1->documento;
 
				}


header ("Content-Disposition: attachment; filename=".$ducumento_formulario."");
header ("Content-Type: application/force-download");
header ("Content-Length: ".filesize($ducumento_formulario));
readfile($ducumento_formulario);
			 

			
		

}

public function formularios1(Request $request)
{

	$keyword = $request->get('search');
            $perPage = 5;

            if (!empty($keyword)) {
                $lista_formularios = T_formulario::where('categoria', 'LIKE', "%$keyword%")
                    ->orWhere('nombre', 'LIKE', "%$keyword%")
                    ->orWhere('descripcion', 'LIKE', "%$keyword%")
                    ->orWhere('documento', 'LIKE', "%$keyword%")
                    ->latest()->paginate($perPage);
            } else {
                $lista_formularios = T_formulario::latest()->paginate($perPage);
            }
            
	
	
        
        $lista_formularios2 = \DB::table('formulario')
			->select('*')
                        //->orderBy('categoria', 'desc')
                        ->groupBy('categoria')
			->get();
			
		
return view('formularios1')->with('formularios2',$lista_formularios2)->with('formularios',$lista_formularios)->with('menu','formularios1');
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}

}
