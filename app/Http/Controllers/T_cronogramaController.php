<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\T_cronograma; //modelo

class T_cronogramaController extends Controller
{
  public function index()
  {
  $id_cronograma="";
  $fecha_cronograma="";
  $hora_cronograma="";
  $tipo_cronograma="";
  $nombre_cronograma="";
  $descripcion_cronograma="";
  $responsable_cronograma="";
  $foto_cronograma="";
  $mensaje="";
  
  $registrar='';
  $modificar='disabled';
  $eliminar="disabled";
  
  $lista_eventos = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Evento')
			->get();
			
  $lista_noticias = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Noticia')
			->get();
	  $lista_actividades = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Actividad')
			->get();
			
return view('cronograma')->with('lista_eventos',$lista_eventos)->with('lista_noticias',$lista_noticias)->with('lista_actividades',$lista_actividades)->with('id_cronograma',$id_cronograma)->with('fecha_cronograma',$fecha_cronograma)->with('hora_cronograma',$hora_cronograma)->with('tipo_cronograma',$tipo_cronograma)->with('nombre_cronograma',$nombre_cronograma)->with('descripcion_cronograma',$descripcion_cronograma)->with('responsable_cronograma',$responsable_cronograma)->with('foto_cronograma',$foto_cronograma)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu', 'usuario_administrador');

}
  
  

  
  protected function validarFecha($fecha,$hora,$tipo,$nombre,$descripcion,$responsable)
  {
  	if (($fecha!='') && ($hora!='') && ($tipo!='') && ($nombre!='') && ($descripcion!='') && ($responsable!=''))
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
   $id_cronograma=$request->input('id_cronograma');
  $fecha_cronograma=$request->input('fecha_cronograma');
  $hora_cronograma=$request->input('hora_cronograma');
  $tipo_cronograma=$request->input('tipo_cronograma');
  $nombre_cronograma=$request->input('nombre_cronograma');
  $descripcion_cronograma=$request->input('descripcion_cronograma');
  $responsable_cronograma=$request->input('responsable_cronograma');
  $foto_cronograma=$request->input('foto_cronograma2');
  $boton_opcion=$request->input('opcion');
  $mensaje='';


 if ($boton_opcion=='Nuevo')
 {
    $nuevo='';
	$registrar='';
	$modificar='disabled';
	$eliminar="disabled";
    $fecha_cronograma='';
   $hora_cronograma='';
   $tipo_cronograma='';
   $nombre_cronograma='';
   $descripcion_cronograma='';
   $responsable_cronograma='';
   $foto_cronograma='';
	$mensaje='';
 }
 
if ($boton_opcion=='Registrar')
 {
 
    $nuevo='';
	$registrar='';
	$modificar='disabled';
	$eliminar="disabled";
   

  
   if (($this->validarFecha($fecha_cronograma,$hora_cronograma,$tipo_cronograma, $nombre_cronograma,$descripcion_cronograma,$responsable_cronograma)==true))
   {
  
	        
		   $file = $request->file('foto_cronograma');
		   
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
         
 
			$cronograma =new T_cronograma;
			$cronograma->fecha=$request->input('fecha_cronograma');
			$cronograma->hora=$request->input('hora_cronograma');
			$cronograma->tipo=$request->input('tipo_cronograma');
			$cronograma->nombre=$request->input('nombre_cronograma');
			$cronograma->descripcion=$request->input('descripcion_cronograma');
			$cronograma->responsable=$request->input('responsable_cronograma');
			if ($contents!='')
			{
			$cronograma->foto=$contents;
			}
			$cronograma->save();
			$id_cronograma=$cronograma->id;
			$foto_cronograma=$cronograma->foto;
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

    $id_cronograma=$request->input('id_cronograma');
  $fecha_cronograma=$request->input('fecha_cronograma');
  $hora_cronograma=$request->input('hora_cronograma');
  $tipo_cronograma=$request->input('tipo_cronograma');
  $nombre_cronograma=$request->input('nombre_cronograma');
  $descripcion_cronograma=$request->input('descripcion_cronograma');
  $responsable_cronograma=$request->input('responsable_cronograma');
  $boton_opcion=$request->input('opcion');
  
  
  	
	     		    $file = $request->file('foto_cronograma');
					
		  
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
		  
		   
				 
		   if (($this->validarFecha($fecha_cronograma,$hora_cronograma,$tipo_cronograma,$nombre_cronograma,$descripcion_cronograma,$responsable_cronograma)==true))
          {

		    $cronograma= T_cronograma::find($id_cronograma);
		    $cronograma->fecha=$request->input('fecha_cronograma');
			$cronograma->hora=$request->input('hora_cronograma');
			$cronograma->tipo=$request->input('tipo_cronograma');
			$cronograma->nombre=$request->input('nombre_cronograma');
			$cronograma->descripcion=$request->input('descripcion_cronograma');
			$cronograma->responsable=$request->input('responsable_cronograma');
					
			if ($contents!='')
			{
			$cronograma->foto=$contents;
			}
			
			$cronograma->save();
			$foto_cronograma=$cronograma->foto;
			$id_cronograma=$cronograma->id;
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
  $id_cronograma=$request->input('id_cronograma');
   $fecha_cronograma='';
   $hora_cronograma='';
   $tipo_cronograma='';
   $nombre_cronograma='';
   $descripcion_cronograma='';
   $responsable_cronograma='';
   $foto_cronograma='';
   $mensaje='';
	

	T_cronograma::destroy($id_cronograma);
	$mensaje='Cronograma eliminado correctamente';

 }
 

if ($boton_opcion=='Buscar')
 {
 

 
 }
 
 


 
 
  $lista_eventos = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Evento')
			->get();
			
  $lista_noticias = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Noticia')
			->get();
	  $lista_actividades = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Actividad')
			->get();
			
 
return view('cronograma')->with('lista_eventos',$lista_eventos)->with('lista_noticias',$lista_noticias)->with('lista_actividades',$lista_actividades)->with('id_cronograma',$id_cronograma)->with('fecha_cronograma',$fecha_cronograma)->with('hora_cronograma',$hora_cronograma)->with('tipo_cronograma',$tipo_cronograma)->with('nombre_cronograma',$nombre_cronograma)->with('descripcion_cronograma',$descripcion_cronograma)->with('responsable_cronograma',$responsable_cronograma)->with('foto_cronograma',$foto_cronograma)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu', 'usuario_administrador');
;
}


public function modificar_cronograma()
{

$id_cronograma=$_GET["id_cronograma"];
$fecha_cronograma='';
   $hora_cronograma='';
   $tipo_cronograma='';
   $nombre_cronograma='';
   $descripcion_cronograma='';
   $responsable_cronograma='';
   $foto_cronograma='';
   $mensaje='';

$nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
$mensaje='';



			
			
			$cronograma= \DB::table('cronograma')
			->select('*')
			->where('id',$id_cronograma)
			->get();
			
			foreach($cronograma as $cronograma1)
				{
		 $id_cronograma=$cronograma1->id;
	 $fecha_cronograma=$cronograma1->fecha;
    $hora_cronograma=$cronograma1->hora;
    $tipo_cronograma=$cronograma1->tipo;
    $nombre_cronograma=$cronograma1->nombre;
    $descripcion_cronograma=$cronograma1->descripcion;
    $responsable_cronograma=$cronograma1->responsable;
     $foto_cronograma=$cronograma1->foto;
				}
			
		
   $lista_eventos = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Evento')
			->get();
			
  $lista_noticias = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Noticia')
			->get();
	  $lista_actividades = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Actividad')
			->get();
			
 
return view('cronograma')->with('lista_eventos',$lista_eventos)->with('lista_noticias',$lista_noticias)->with('lista_actividades',$lista_actividades)->with('id_cronograma',$id_cronograma)->with('fecha_cronograma',$fecha_cronograma)->with('hora_cronograma',$hora_cronograma)->with('tipo_cronograma',$tipo_cronograma)->with('nombre_cronograma',$nombre_cronograma)->with('descripcion_cronograma',$descripcion_cronograma)->with('responsable_cronograma',$responsable_cronograma)->with('foto_cronograma',$foto_cronograma)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu', 'usuario_administrador');
;
}
	 
	

}
