<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_estudiante; 

class T_estudianteController extends Controller
{
  /*public function index()
  {
     $lista_niveles = \DB::table('nivel')
			->select('*')
			->get();
			
			
	 return view('registrar_horarios')->with('niveles',$lista_niveles);
  }*/
  public function index()
  {
  
    
  $cedula_estudiante='';
  $nombres_estudiante='';
  $apellidos_estudiante='';
  $password_estudiante='';
  $foto_estudiante='';
  $mensaje='';
  $nuevo='';
  
  $registrar='';
  $modificar='disabled';
  $eliminar="disabled";
  
  
  $lista_estudiantes = \DB::table('estudiante')
			->select('*')
			->get();
			return view('estudiantes')->with('estudiantes',$lista_estudiantes)->with('cedula_estudiante',$cedula_estudiante)->with('nombres_estudiante',$nombres_estudiante)->with('apellidos_estudiante',$apellidos_estudiante)->with('password_estudiante',$password_estudiante)->with('foto_estudiante',$foto_estudiante)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje);

  }
  
  public function updateestudiante(){
      return view('updateestudiante');
  }

  public function show()
  {
     $lista_niveles = \DB::table('nivel')
			->select('*')
			->get();
			
			
	 return view('nivel_estudiantes')->with('niveles',$lista_niveles);
  }
  
  public function consulta()
  {
  
  $id_nivel= $_GET["id_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
 $nuevo='';
$registrar='';
$modificar='disabled';
$eliminar="disabled";
  
  $cedula_estudiante='';
  $nombres_estudiante='';
  $apellidos_estudiante='';
  $mensaje='';
				
				
     $lista_estudiantes = \DB::table('estudiante')
			->select('*')
			->where('id_nivel',$id_nivel)
			->get();
			
			
	  return view('registro_estudiantes')->with('estudiantes',$lista_estudiantes)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('cedula_estudiante',$cedula_estudiante)->with('nombres_estudiante',$nombres_estudiante)->with('apellidos_estudiante',$apellidos_estudiante)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje);
  }
  
   protected function validarCedula($numero)
    {
        // fuerzo parametro de entrada a string
         if(is_numeric($numero))
		 {
		 return true;
		 }
		 else
		 {
		 return false;
		 }
     
    }
	
	protected function validarDatos($nombres, $apellidos, $password, $foto)
	{
	
	      
			 if (($nombres!='') && ($apellidos!='')) 
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
	
	
	protected function existeCedula($cedula_estudiante)
	{
	
	      $lista_estudiantes= \DB::table('estudiante')
			->select('*')
			->where('cedula',$cedula_estudiante)
			  ->get();
			 if (count ($lista_estudiantes)>0)
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
  $cedula_estudiante=$request->input('cedula_estudiante');
  $nombres_estudiante=$request->input('nombres_estudiante');
  $apellidos_estudiante=$request->input('apellidos_estudiante');
  $password_estudiante=$request->input('password_estudiante');
  $foto_estudiante=$request->input('foto_estudiante');
  $boton_opcion=$request->input('opcion');
  $mensaje='';


 if ($boton_opcion=='Nuevo')
 {
    $nuevo='';
	$registrar='';
	$modificar='disabled';
	$eliminar="disabled";
   	$cedula_estudiante='';
  	$nombres_estudiante='';
  	$apellidos_estudiante='';
	$password_estudiante='';
    $foto_estudiante='';
	$mensaje='';
 }
 
if ($boton_opcion=='Registrar')
 {
 
    $nuevo='';
	$registrar='';
	$modificar='disabled';
	$eliminar="disabled";
	$cedula_estudiante=$request->input('cedula_estudiante');
	$nombres_estudiante=$request->input('nombres_estudiante');
	$apellidos_estudiante=$request->input('apellidos_estudiante');
	$password_estudiante=$request->input('password_estudiante');
	$foto_estudiante=$request->input('foto_estudiante');
  
   if (($this->validarCedula($cedula_estudiante)==true) && ($this->validarDatos($nombres_estudiante, $apellidos_estudiante, $password_estudiante, $foto_estudiante)==true))
   {
    if ($this->existeCedula($cedula_estudiante)==false)
 	{
	        
		   $file = $request->file('foto_estudiante');
		   
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
     
 
			$estudiante =new T_estudiante;
			$estudiante->cedula=$request->input('cedula_estudiante');
			$estudiante->nombres=$request->input('nombres_estudiante');
			$estudiante->apellidos=$request->input('apellidos_estudiante');
			$estudiante->password=$request->input('password_estudiante');
			if ($contents!='')
			{
			$estudiante->foto=$contents;
			}
			$estudiante->save();
			$foto_estudiante=$estudiante->foto;
			$mensaje='Estudiante registrado correctamente';
	}
	else
	{
	    $mensaje='Ya existe el estudiante registrado';
	}
 
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
    $cedula_estudiante=$request->input('cedula_estudiante');
	$nombres_estudiante=$request->input('nombres_estudiante');
	$apellidos_estudiante=$request->input('apellidos_estudiante');
	$password_estudiante=$request->input('password_estudiante');
	$foto_estudiante=$request->input('foto_estudiante');
	
 
  if ($this->existeCedula($cedula_estudiante)==true)
 	{
	
	     $file = $request->file('foto_estudiante');
		   
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
		      
		
		   
		   if ($this->validarDatos($nombres_estudiante, $apellidos_estudiante, $password_estudiante, $foto_estudiante)==true)
			{
	
	        $estudiante = T_estudiante::find($cedula_estudiante);
		    $estudiante->cedula=$request->input('cedula_estudiante');
			$estudiante->nombres=$request->input('nombres_estudiante');
			$estudiante->apellidos=$request->input('apellidos_estudiante');
			$estudiante->password=$request->input('password_estudiante');
			
			if ($contents!='')
			{
			$estudiante->foto=$contents;
			}
			$estudiante->save();
				$foto_estudiante=$estudiante->foto;
			$mensaje='Estudiante modificado correctamente';
			}
			else
			{
			 $mensaje='Datos mal ingresados';
			}
	}
	else
	{
	    $mensaje='No se puede modificar el estudiante';
	}
}


if ($boton_opcion=='Eliminar')
 {
 $nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
$cedula_estudiante=$request->input('cedula_estudiante');
$nombres_estudiante='';
$apellidos_estudiante='';
$password_estudiante='';
$foto_estudiante='';

	
   if ($this->existeCedula($cedula_estudiante)==true)
 	{
	        T_estudiante::destroy($cedula_estudiante);
			$mensaje='Estudiante eliminado correctamente';
		$cedula_estudiante='';	
$nombres_estudiante='';
$apellidos_estudiante='';
$password_estudiante='';
$foto_estudiante='';
	}
	else
	{
	
	$cedula_estudiante=$request->input('cedula');
	$nombres_estudiante=$request->input('nombres');
	$apellidos_estudiante=$request->input('apellidos');
	$password_estudiante=$request->input('password_estudiante');
	$foto_estudiante=$request->input('foto_estudiante');
 
	    $mensaje='No se puede eliminar el estudiante';
	}
 }
 

if ($boton_opcion=='Buscar')
 {
 
$cedula_estudiante=$request->input('cedula_estudiante');
$nombres_estudiante='';
$apellidos_estudiante='';
$password_estudiante='';
$foto_estudiante='';

$nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
$mensaje='';

			
			
			$estudiante= \DB::table('estudiante')
			->select('*')
			->where('cedula',$cedula_estudiante)
			->get();
			
			if (count($estudiante)>0)
			{
			
			foreach($estudiante as $estudiante1)
				{
				$cedula_estudiante=$estudiante1->cedula;
				$nombres_estudiante=$estudiante1->nombres;
				$apellidos_estudiante=$estudiante1->apellidos;
				$password_estudiante=$estudiante1->password;
				$foto_estudiante=$estudiante1->foto;
				}
			}
			else
			{
			$mensaje="No se encuentra el estudiante";
			}
				
 
 }
 
 
$lista_estudiantes = \DB::table('estudiante')
			->select('*')
			->get();
return view('estudiantes')->with('estudiantes',$lista_estudiantes)->with('cedula_estudiante',$cedula_estudiante)->with('nombres_estudiante',$nombres_estudiante)->with('apellidos_estudiante',$apellidos_estudiante)->with('password_estudiante',$password_estudiante)->with('foto_estudiante',$foto_estudiante)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje);
}
     
	
	

		
		


public function modificar_estudiante()
{

$cedula_estudiante=$_GET["cedula_estudiante"];
$nombres_estudiante='';
$apellidos_estudiante='';
$password_estudiante='';
$foto_estudiante='';

$nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
$mensaje='';



			
			
			$estudiante= \DB::table('estudiante')
			->select('*')
			->where('cedula',$cedula_estudiante)
			->get();
			
			foreach($estudiante as $estudiante1)
				{
				$cedula_estudiante=$estudiante1->cedula;
				$nombres_estudiante=$estudiante1->nombres;
				$apellidos_estudiante=$estudiante1->apellidos;
				$password_estudiante=$estudiante1->password;
				$foto_estudiante=$estudiante1->foto;
				}
			
$lista_estudiantes = \DB::table('estudiante')
			->select('*')
			->get();
			
	return view('estudiantes')->with('estudiantes',$lista_estudiantes)->with('cedula_estudiante',$cedula_estudiante)->with('nombres_estudiante',$nombres_estudiante)->with('apellidos_estudiante',$apellidos_estudiante)->with('password_estudiante',$password_estudiante)->with('foto_estudiante',$foto_estudiante)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje);

}





public function borra_estudiante()
{

$cedula_estudiante=$_GET["cedula_estudiante"];
$cedula_estudiante='';
$nombres_estudiante='';
$apellidos_estudiante='';
$password_estudiante='';
$foto_estudiante='';

$nuevo='';
$registrar='disabled';
$modificar='disabled';
$eliminar="";
$mensaje='';
			
			
			$estudiante= \DB::table('estudiante')
			->select('*')
			->where('cedula',$cedula_estudiante)
			->get();
			
			
			foreach($estudiante as $estudiante1)
				{
				$cedula_estudiante=$estudiante1->cedula;
				$nombres_estudiante=$estudiante1->nombres;
				$apellidos_estudiante=$estudiante1->apellidos;
				$password_estudiante=$estudiante1->password;
				}
			
$lista_estudiantes = \DB::table('estudiante')
			->select('*')
		    ->get();
			
			 return view('estudiantes')->with('estudiantes',$lista_estudiantes)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('cedula_estudiante',$cedula_estudiante)->with('nombres_estudiante',$nombres_estudiante)->with('apellidos_estudiante',$apellidos_estudiante)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje);;

}
 
}
