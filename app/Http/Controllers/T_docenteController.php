<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_docente; 

class T_docenteController extends Controller
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
  
    
  $cedula_docente='';
  $grado_docente='';
  $nombres_docente='';
  $apellidos_docente='';
  
  $email_docente='';
  $telefono_docente='';
  $cargo_docente='';
  $area_docente='';
  $password_docente='';
  $foto_docente='';
  $mensaje='';
  $nuevo='';
  
  $registrar='';
  $modificar='disabled';
  $eliminar="disabled";
  
  if (isset($_GET['cedula_docente']))
  {
          $cedula_docente=$_GET['cedula_docente'];
         
		  $docente = \DB::table('docente')
			->select('*')
			->where ('cedula','=',$cedula_docente)
			->get();
			
			foreach($docente as $docente1)
				{
				$cedula_docente=$docente1->cedula;
				$grado_docente=$docente1->grado;
				$nombres_docente=$docente1->nombres;
				$apellidos_docente=$docente1->apellidos;
				$email_docente=$docente1->email;
				$telefono_docente=$docente1->telefono;
				$cargo_docente=$docente1->cargo;
				$area_docente=$docente1->area;
				$password_docente=$docente1->password;
				$foto_docente=$docente1->foto;
				}
  
  return view('cuenta_docente')->with('cedula_docente',$cedula_docente)->with('grado_docente',$grado_docente)->with('nombres_docente',$nombres_docente)->with('apellidos_docente',$apellidos_docente)->with('email_docente',$email_docente)->with('telefono_docente',$telefono_docente)->with('cargo_docente',$cargo_docente)->with('area_docente',$area_docente)->with('password_docente',$password_docente)->with('foto_docente',$foto_docente)->with('mensaje','')->with('menu','usuario_docente');
  
  }
  else
  {
  
  $lista_docentes = \DB::table('docente')
			->select('*')
			->get();
return view('docentes')->with('docentes',$lista_docentes)->with('cedula_docente',$cedula_docente)->with('grado_docente',$grado_docente)->with('nombres_docente',$nombres_docente)->with('apellidos_docente',$apellidos_docente)->with('email_docente',$email_docente)->with('telefono_docente',$telefono_docente)->with('cargo_docente',$cargo_docente)->with('area_docente',$area_docente)->with('password_docente',$password_docente)->with('foto_docente',$foto_docente)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu','usuario_administrador');
  
}

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
	
	      $lista_estudiantes= \DB::table('docente')
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
		  
		$requestData = $request->all();
       
		$file = $request->file('foto');
		 if($request->hasFile('foto')){
			 
			 $requestData['foto']=$file->openFile()->fread($file->getSize());
		 /*
		 
		 $requestData = $request->all();
				
		 if ($request->hasFile('foto')) {
			 $requestData['foto'] = $request->file('foto')
				 ->store('uploads', 'public');
		 
 */
			 }
		$id=$request->cedula; 
		 $docente = T_docente::findOrFail(16850280);
		 $docente->update($requestData);
 
		 $redireccion='docente?accion=editado';
		 return redirect($redireccion)->with('flash_message', 'Docente updated!');
		 //return redirect('docente')->with('flash_message', 'Docente updated!');
    }
	

		
		


public function modificar_docente()
{

$cedula_docente=$_GET["cedula_docente"];
$grado_docente='';
  	$nombres_docente='';
  	$apellidos_docente='';
	$email_docente='';
	$telefono_docente='';
	$password_docente='';
    $foto_docente='';

$nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
$mensaje='';



			
			
			$docente= \DB::table('docente')
			->select('*')
			->where('cedula',$cedula_docente)
			->get();
			
			foreach($docente as $docente1)
				{
				$cedula_docente=$docente1->cedula;
				$grado_docente=$docente1->grado;
				$nombres_docente=$docente1->nombres;
				$apellidos_docente=$docente1->apellidos;
				$email_docente=$docente1->email;
				$telefono_docente=$docente1->telefono;
				$cargo_docente=$docente1->cargo;
				$area_docente=$docente1->area;
				$password_docente=$docente1->password;
				$foto_docente=$docente1->foto;
				}
			

			
$lista_docentes = \DB::table('docente')
			->select('*')
			->get();
return view('docentes')->with('docentes',$lista_docentes)->with('cedula_docente',$cedula_docente)->with('grado_docente',$grado_docente)->with('nombres_docente',$nombres_docente)->with('apellidos_docente',$apellidos_docente)->with('email_docente',$email_docente)->with('telefono_docente',$telefono_docente)->with('cargo_docente',$cargo_docente)->with('area_docente',$area_docente)->with('password_docente',$password_docente)->with('foto_docente',$foto_docente)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu','usuario_administrador');
  ;
}





}
