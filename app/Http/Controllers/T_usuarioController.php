<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_usuario; 

class T_usuarioController extends Controller
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
  
  $id_usuario='';
  $login_usuario='';
  $password_usuario='';
  $nombres_usuario='';
  $apellidos_usuario='';
  $perfil_usuario='';
  
  $mensaje='';
   $nuevo='';
$registrar='';
$modificar='disabled';
$eliminar="disabled";
  
  
  $lista_usuarios = \DB::table('usuario')
			->select('*')
			->get();
			return view('registro_usuario')->with('usuarios',$lista_usuarios)->with('id_usuario',$id_usuario)->with('login_usuario',$login_usuario)->with('password_usuario',$password_usuario)->with('nombres_usuario',$nombres_usuario)->with('apellidos_usuario',$apellidos_usuario)->with('perfil_usuario',$perfil_usuario)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu','registro_usuario')->with('menu','usuario_administrador');
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
	
	protected function validarDatos($password, $nombres, $apellidos, $perfil)
	{
	
	      
			 if (($password!='') && ($nombres!='') && ($apellidos!='') && ($perfil!='')) 
			 {
			 return true;
			 }
			 else
			 {
			 return false;
			 }
	}
	
	
	protected function existeCedula($login_usuario)
	{
	
	      $lista_usuarios= \DB::table('usuario')
			->select('*')
			->where('login',$login_usuario)
			  ->get();
			 if (count ($lista_usuarios)>0)
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
 
  $id_usuario='';
  $login_usuario=$request->input('login_usuario');
  $password_usuario=$request->input('password_usuario');
  $nombres_usuario=$request->input('nombres_usuario');
  $apellidos_usuario=$request->input('apellidos_usuario');
  $perfil_usuario=$request->input('perfil_usuario');
  $boton_opcion=$request->input('opcion');
  $mensaje='';
 
 if ($boton_opcion=='Nuevo')
 {
    $nuevo='';
	$registrar='';
	$modificar='disabled';
	$eliminar="disabled";
   	$login_usuario='';
  	$password_usuario='';
  	$nombres_usuario='';
	$apellidos_usuario='';
	$perfil_usuario='';
	$mensaje='';
	
 }
 
if ($boton_opcion=='Registrar')
 {
 
    $nuevo='';
	$registrar='';
	$modificar='disabled';
	$eliminar="disabled";
 	$login_usuario=$request->input('login_usuario');
 	$password_usuario=$request->input('password_usuario');
  	$nombres_usuario=$request->input('nombres_usuario');
  	$apellidos_usuario=$request->input('apellidos_usuario');
  	$pefil_usuario=$request->input('perfil_usuario');
 
  if (($this->validarCedula($login_usuario)==true) && ($this->validarDatos($password_usuario, $nombres_usuario, $apellidos_usuario, $perfil_usuario)==true))
  {
    if ($this->existeCedula($login_usuario)==false)
 	{
	        $usuario =new T_usuario;
			$usuario->login=$request->input('login_usuario');
			$usuario->password=$request->input('password_usuario');
			$usuario->nombres=$request->input('nombres_usuario');
			$usuario->apellidos=$request->input('apellidos_usuario');
			$usuario->perfil=$request->input('perfil_usuario');
			$usuario->save();
			$mensaje='Usuario registrado correctamente';
	}
	else
	{
	    $mensaje='Ya existe el usuario registrado';
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
	$id_usuario=$request->input('id_usuario');
 	$login_usuario=$request->input('login_usuario');
 	$password_usuario=$request->input('password_usuario');
  	$nombres_usuario=$request->input('nombres_usuario');
  	$apellidos_usuario=$request->input('apellidos_usuario');
  	$perfil_usuario=$request->input('perfil_usuario');
 
  if ($this->existeCedula($login_usuario)==true)
 	{ 
	
			if ($this->validarDatos($password_usuario, $nombres_usuario, $apellidos_usuario, $perfil_usuario)==true)
			{
	        $usuario = T_usuario::find($id_usuario);
			$usuario->login=$request->input('login_usuario');
			$usuario->password=$request->input('password_usuario');
			$usuario->nombres=$request->input('nombres_usuario');
			$usuario->apellidos=$request->input('apellidos_usuario');
			$usuario->perfil=$request->input('perfil_usuario');
			$usuario->save();
			$mensaje='Usuario modificado correctamente';
			}
			else
			{
			 $mensaje='Datos mal ingresados';
			}
	}
	else
	{
	    $mensaje='No se puede modificar el usuario';
	}
}


if ($boton_opcion=='Eliminar')
 {
  $nuevo='';
  $registrar='disabled';
	$modificar='';
	$eliminar='';
 	$login_usuario=$request->input('login_usuario');
   if ($this->existeCedula($login_usuario)==true)
 	{
	        $id_usuario=$request->input('id_usuario');
	        T_usuario::destroy($id_usuario);
			$mensaje='Usuario eliminado correctamente';
	}
	else
	{
	    $mensaje='No se puede eliminar el usuario';
	}
 }
$login_usuario='';
 	$password_usuario='';
  	$nombres_usuario='';
  	$apellidos_usuario='';
  	$perfil_usuario='';
 
 $lista_usuarios = \DB::table('usuario')
			->select('*')
			->get();
		return view('registro_usuario')->with('usuarios',$lista_usuarios)->with('id_usuario',$id_usuario)->with('login_usuario',$login_usuario)->with('password_usuario',$password_usuario)->with('nombres_usuario',$nombres_usuario)->with('apellidos_usuario',$apellidos_usuario)->with('perfil_usuario',$perfil_usuario)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu','registro_usuario')->with('menu','usuario_administrador');

 
}
     
	
public function modificar_usuario()
{

$id_usuario= $_GET["id_usuario"];
$login_usuario='';
$password_usuario='';
$nombres_usuario='';
$apellidos_usuario='';
$perfil_usuario='';

$nuevo='';
$registrar='disabled';
$modificar='';
$eliminar='';
$mensaje='';



			
			
			$usuario= \DB::table('usuario')
			->select('*')
			->where('id',$id_usuario)
			->get();
			
			
			foreach($usuario as $usuario1)
				{
				$login_usuario=$usuario1->login;
				$password_usuario=$usuario1->password;
				$nombres_usuario=$usuario1->nombres;
				$apellidos_usuario=$usuario1->apellidos;
				$perfil_usuario=$usuario1->perfil;
				
				}
			
			 $lista_usuarios = \DB::table('usuario')
			->select('*')
			->get();
		
				return view('registro_usuario')->with('usuarios',$lista_usuarios)->with('id_usuario',$id_usuario)->with('login_usuario',$login_usuario)->with('password_usuario',$password_usuario)->with('nombres_usuario',$nombres_usuario)->with('apellidos_usuario',$apellidos_usuario)->with('perfil_usuario',$perfil_usuario)->with('nuevo',$nuevo)->with('registrar',$registrar)->with('modificar',$modificar)->with('eliminar',$eliminar)->with('mensaje',$mensaje)->with('menu','registro_usuario')->with('menu','usuario_administrador');
}


}
