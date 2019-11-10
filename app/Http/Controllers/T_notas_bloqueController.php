<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class T_notas_bloqueController extends Controller
{
/**
  * Muestra una lista de las monedas.
  *
  * @return Response
  */
  
	

  
   public function index()
	  {

$nombre_oferta='';
        if (isset($_GET["nombre_oferta"]))
  
        {
		
		
	
         $nombre_oferta=$_GET["nombre_oferta"];
        
			
		}	
			
		
		$lista_niveles = \DB::table('nivel')
			->select('nivel.id', 'nivel.curso','nivel.paralelo','nivel.oferta','nivel.modalidad')
			->orderBy('nivel.curso', 'asc')
			->orderBy('nivel.paralelo', 'asc')
			->where('nivel.oferta',$nombre_oferta)
			->get();
		 
	
			
			$lista_ofertas = \DB::table('oferta')
			->select('*')
			->get();
			
			return view('notas_bloque')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','')->with('menu','notas_bloque');
		
	  }
	  
  
  
	   
public function show(Request $request)
{
	    
		$nombre_oferta='';
		$lista_ofertas = \DB::table('oferta')
			->select('*')
			->get();
			
	$lista_niveles = \DB::table('nivel')
			->select('nivel.id', 'nivel.curso','nivel.paralelo','nivel.oferta','nivel.modalidad')
			->orderBy('nivel.curso', 'asc')
			->orderBy('nivel.paralelo', 'asc')
			->where('nivel.oferta',$nombre_oferta)
			->get();
			
		
		$login=$request->input('login');
	    $password=$request->input('password');
		$perfil=$request->input('perfil');
		
		
	if ($perfil=='Administrador')
	{
		
		$lista_usuarios = \DB::table('usuario')
		->select('*')
		->where('login',$login)
		->where('password',$password)
		->where('perfil',$perfil)
		->get();
		
		if (count ($lista_usuarios)>0)
		{
			foreach ($lista_usuarios as $usuario)
			{
				$login=$usuario->login;
				$password=$usuario->password;
				$perfil=$usuario->perfil;
				$nombres_usuario=$usuario->nombres;
				$apellidos_usuario=$usuario->apellidos;
		
		    }
			
                                session(['login' => $login]);
				session(['password' => $password]);
				session(['perfil' => $perfil]);
				session(['nombres_usuario' => $nombres_usuario]);
				session(['apellidos_usuario' => $apellidos_usuario]);
				
                                $redireccion='usuario_administrador';
				return  view($redireccion)->with('login',$login)->with('password',$password)->with('perfil',$perfil)->with('menu','usuario_administrador');
			
		}
		
		else
		{
		
		return view('notas_bloque')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','Datos mal ingresados')->with('menu','notas_bloque');
		}
        }
		

                if ($perfil=='Docente')
                    {
                                $lista_docentes = \DB::table('docente')
                                    ->select('*')
                                    ->where('cedula',$login)
                                    ->get();


                                    if (count ($lista_docentes)>0)
                                    {
                                            foreach ($lista_docentes as $docente)
                                            {
                                                    $password_docente=$docente->password;

                                        }

                                            if ($password_docente=='')
                                            {


                                               if ($login==$password)	 
                                               {

                                                     $lista_docentes = \DB::table('docente')
                                                     ->select('*')
                                                    ->where('cedula',$login)
                                                    ->get();

                                                }
                                                    else
                                                    {
                                                    return view('notas_bloque')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','Datos mal ingresados')->with('menu','notas_bloque3');
                                                    }
                                             }
                                             else
                                             {
                                                $lista_docentes = \DB::table('docente')
                                                    ->select('*')
                                                    ->where('cedula',$login)
                                                    ->where('password',$password)
                                                    ->get();

                                             }


                                            if (count ($lista_docentes)>0)
                                                    {
                                                            foreach ($lista_docentes as $docente)
                                                            {
                                                        $idsession=$docente->id;
                                                        $login=$docente->cedula;
                                                        $password=$docente->password;
                                                        $nombres_usuario=$docente->nombres;
                                                        $apellidos_usuario=$docente->apellidos;
                                                        $email_usuario=$docente->email;

                                                        }
                                                        session(['idsession' => $idsession]);
                                                          session(['login' => $login]);
                                                          session(['password' => $password]);
                                                          session(['perfil' => $perfil]);
                                                          session(['nombres_usuario' => $nombres_usuario]);
                                                          session(['apellidos_usuario' => $apellidos_usuario]);
                                                          session(['email_usuario' => $email_usuario]);
                                                          $redireccion='usuario_docente';
                                                          return  view($redireccion)->with('login',$login)->with('password',$password)->with('perfil',$perfil)->with('menu','usuario_docente');
                                                          
                                                           

                                             }

                                             else
                                             {

                                            return view('notas_bloque')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','Datos mal ingresados')->with('menu','notas_bloque2');
                                             }

                            }
                            else
                            {
                                return view('notas_bloque')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','Datos mal ingresados')->with('menu','notas_bloque1');
                            }

                    }
                    
                
                
                    if ($perfil=='Estudiante')
                    {
                        include '../conexion3.php';
                            $registros=mysqli_query($conexion,"select * from estudiante where cedula='$login' and password='$password'") or
                            die("Problemas en el select:".mysqli_error($conexion));

                        if ($reg=mysqli_fetch_array($registros))
                        {
                            session(['id' => $reg['id']]);
                            session(['login' => $reg['cedula']]);
                            session(['password' => $reg['password']]);
                            session(['perfil' => 'Estudiante']);
                            session(['nombres_usuario' => $reg['nombres']]);
                            session(['apellidos_usuario' => $reg['apellidos']]);
                            return  view('usuario_estudiante')->with('login',$login)->with('password',$password)->with('perfil',$perfil)->with('menu','usuario_docente');
                            
                                //return view('indexes')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','Datos mal ingresados')->with('menu','notas_bloque1');
                            
                        }
                        else
                        {
                                return view('notas_bloque')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','Datos mal ingresados')->with('menu','notas_bloque1');
                        }
                        
                            
                    }
                    if ($perfil=='Secretaria')
                    {
                        include '../conexion3.php';
                            $registros=mysqli_query($conexion,"select * from usuario where login='$login' and password='$password' and perfil='Secretaria'") or
                            die("Problemas en el select:".mysqli_error($conexion));

                        if ($reg=mysqli_fetch_array($registros))
                        {
                            session(['id' => $reg['id']]);
                            session(['login' => $reg['login']]);
                            session(['password' => $reg['password']]);
                            session(['perfil' => 'Secretaria']);
                            session(['nombres_usuario' => $reg['nombres']]);
                            session(['apellidos_usuario' => $reg['apellidos']]);
                            return  view('usuario_docente')->with('login',$login)->with('password',$password)->with('perfil',$perfil)->with('menu','usuario_docente');
                            
                                //return view('indexes')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','Datos mal ingresados')->with('menu','notas_bloque1');
                            
                        }
                        else
                        {
                                return view('notas_bloque')->with('niveles',$lista_niveles)->with('ofertas',$lista_ofertas)->with('mensaje','Datos mal ingresados')->with('menu','notas_bloque1');
                        }
                        
                            
                    }
}
}
