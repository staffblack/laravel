<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_nivel_estudiante;
 
use App\T_estudiante;
use App\T_nivel;

class T_nivel_estudianteController extends Controller
{
  
  public function index()
  {
  
      $lista_niveles = \DB::table('nivel')
			->select('*')
			->orderBy('oferta','desc')
			->orderBy('curso','desc')
			->orderBy('paralelo','asc')
			->get();
			
      return view('nivel_estudiantes')->with('niveles',$lista_niveles)->with('menu','usuario_administrador');
  }

 public function asignar_estudiantes()
  {
  
  $id_nivel= $_GET["id_nivel"];
  $modalidad_nivel= $_GET["modalidad_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
  
       

$sql = "SELECT * FROM estudiante WHERE   NOT EXISTS (

        SELECT  nivel_estudiante.cedula_estudiante

        FROM    nivel_estudiante

        WHERE   estudiante.cedula=nivel_estudiante.cedula_estudiante

        );";
 $lista_estudiantes=\DB::select($sql);
 
 
  $lista_estudiantesa= \DB::table('estudiante')
			->select('*')
			->join('nivel_estudiante','nivel_estudiante.cedula_estudiante','=','estudiante.cedula')
			->where('nivel_estudiante.id_nivel','=',$id_nivel)
		->get();

  
    return view('asignar_nivel_estudiantes')->with('estudiantes',$lista_estudiantes)->with('estudiantesa',$lista_estudiantesa)->with('id_nivel',$id_nivel)-> with('descripcion_nivel',$descripcion_nivel)-> with('modalidad_nivel',$modalidad_nivel)->with('menu','usuario_administrador');
  
  }
  
  
  
protected function exiteNivelEstudiante($id_nivel,$cedula_estudiante)
  {
  
  $nivel_estudiante= \DB::table('nivel_estudiante')
			->select('*')
			->where('id_nivel',$id_nivel)
			->where('cedula_estudiante',$cedula_estudiante)
			->get();
			
			if (count($nivel_estudiante)>0)
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
  
  
  $id_nivel= $request->input('id_nivel');
  $modalidad_nivel= $request->input('modalidad_nivel');
  $descripcion_nivel= $request->input('descripcion_nivel');
  $opcion= $request->input('opcion');
  
  if ($opcion=='Asignar')
  {
  
            $lista_estudiantes = \DB::table('estudiante')
			->select('*')
			->get();
			
			foreach($lista_estudiantes as $estudiante)
				{
				 $cedula_estudiante=$estudiante->cedula;
				 
					
					 if (isset($_POST[$cedula_estudiante]))
					{
					  if ($this->exiteNivelEstudiante($id_nivel,$cedula_estudiante)==false)
					  {
					
					  $nivel_estudiante =new T_nivel_estudiante;
					 $nivel_estudiante->id_nivel=$id_nivel;
					 $nivel_estudiante->cedula_estudiante=$cedula_estudiante;
					 $nivel_estudiante->save();
					  }
					}
				
				}

}
  
   if ($opcion=='Eliminar')
  {
         $lista_estudiantes = \DB::table('estudiante')
			->select('*')
			->get();
			
			foreach($lista_estudiantes as $estudiante)
				{
				 $cedula_estudiante=$estudiante->cedula;
  

	              if (isset($_POST[$cedula_estudiante.'a']))
					{
					  if ($this->exiteNivelEstudiante($id_nivel,$cedula_estudiante)==true)
					  {
					  
					  $nivel_estudiante= \DB::table('nivel_estudiante')
			          ->select('*')
			          ->where('id_nivel',$id_nivel)
			         ->where('cedula_estudiante',$cedula_estudiante.'a')
			        ->get();
			           foreach($nivel_estudiante as $nivel)
				         {
				         $id= $nivel->id;
					  	  
								 
					     }
						 T_nivel_estudiante::destroy($id);
					   }
					}
				
					}
				
}

$sql = "SELECT * FROM estudiante WHERE   NOT EXISTS (

        SELECT  nivel_estudiante.cedula_estudiante

        FROM    nivel_estudiante

        WHERE   estudiante.cedula=nivel_estudiante.cedula_estudiante

        )";
 $lista_estudiantes=\DB::select($sql);
 
				$lista_estudiantesa= \DB::table('estudiante')
			->select('*')
			->join('nivel_estudiante','nivel_estudiante.cedula_estudiante','=','estudiante.cedula')
			->where('nivel_estudiante.id_nivel','=',$id_nivel)
		->get();

  
    return view('asignar_nivel_estudiantes')->with('estudiantes',$lista_estudiantes)->with('estudiantesa',$lista_estudiantesa)->with('id_nivel',$id_nivel)-> with('descripcion_nivel',$descripcion_nivel)-> with('modalidad_nivel',$modalidad_nivel)->with('menu','usuario_administrador');;
	

}
 

}
