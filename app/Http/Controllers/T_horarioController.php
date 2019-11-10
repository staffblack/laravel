<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_docente; //modelo
use App\T_materia; //actividad
use App\T_dia;
use App\T_hora; //actividad
use App\T_horario; //actividad
use App\T_tutor_nivel; //actividad
use Barryvdh\DomPDF\Facade as PDF;
use App;

class T_horarioController extends Controller
{

  public function index()
  {
      $perPage = 5;
 
       $lista_niveles = \DB::table('nivel')
			->select('*')
			->orderBy('oferta','desc')
			->orderBy('curso','desc')
			->orderBy('paralelo','asc')
                        //->latest()->paginate($perPage)
			->get();
			
	 return view('horarios')->with('niveles',$lista_niveles)->with('menu','usuario_administrador');
  }
  
  public function registrar_horarios()
  {
  $id_nivel= $_GET["id_nivel"];
$modalidad_nivel= $_GET["modalidad_nivel"];
$descripcion_nivel= $_GET["descripcion_nivel"];
  
  
   $lista_tutor_nivel = \DB::table('docente')
			->select('docente.cedula', 'docente.nombres', 'docente.apellidos')
			->join ('tutor_nivel','tutor_nivel.cedula_docente', '=', 'docente.cedula')
			->where ('tutor_nivel.id_nivel',$id_nivel)
			->get();
			
  $lista_dias = \DB::table('dia')
			->select('*')
			->get();
			
			$lista_horas = \DB::table('hora')
			->select('*')
			->where('modalidad',$modalidad_nivel)
			->get();
	
  $lista_docentes = \DB::table('docente')
			->select('*')
			->get();
			
		
		  $lista_materias = \DB::table('materia')
			->select('*')
			->get();
			
			 $lista_horarios= \DB::table('horario')
			->select('horario.id','docente.cedula', 'docente.grado', 'docente.nombres as nombre_docente','docente.apellidos as apellido_docente', 'horario.id_materia', 'materia.nombre as nombre_materia', 'horario.id_dia', 'dia.nombre as nombre_dia', 'horario.id_hora','hora.nombre as nombre_hora','hora_inicio','hora_fin')
			 ->join('docente', 'docente.cedula', '=', 'horario.cedula_docente')
			 ->join('materia', 'materia.id', '=', 'horario.id_materia')
			  ->join('dia', 'dia.id', '=', 'horario.id_dia')
			 ->join('hora', 'hora.id', '=', 'horario.id_hora')
			  ->orderBy('horario.id_hora', 'asc')
			 ->orderBy('horario.id_dia', 'asc')
			 ->where('horario.id_nivel',$id_nivel)
			->get();
				
	$redireccion='registrar_horarios';
        //return redirect($redireccion)->with('flash_message', 'Estudiante updated!');			
	return view($redireccion)->with('docentes',$lista_docentes)->with('materias',$lista_materias)->with('dias',$lista_dias)->with('horas',$lista_horas)->with('horarios',$lista_horarios)-> with('id_nivel',$id_nivel)-> with('descripcion_nivel',$descripcion_nivel)-> with('modalidad_nivel',$modalidad_nivel)->with('tutores',$lista_tutor_nivel)->with('menu','usuario_administrador');
        //return view('registrar_horarios')->with('docentes',$lista_docentes)->with('materias',$lista_materias)->with('dias',$lista_dias)->with('horas',$lista_horas)->with('horarios',$lista_horarios)-> with('id_nivel',$id_nivel)-> with('descripcion_nivel',$descripcion_nivel)-> with('modalidad_nivel',$modalidad_nivel)->with('tutores',$lista_tutor_nivel)->with('menu','usuario_administrador');
  
  }
  
    
 
  protected function exiteTutorNivel($cedula_docente,$id_nivel)
  {
  
  $lista_tutornivel = \DB::table('tutor_nivel')
			->select('*')
			 ->where('cedula_docente',$cedula_docente)
			  ->where('id_nivel',$id_nivel)
			->get();
			if (count ($lista_tutornivel)>0)
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

  $cedula_docente=$request->input('docente');
  $id_nivel=$request->input('nivel');
  $id_materia=$request->input('materia');
  $id_dia=$request->input('dia');
  $id_hora=$request->input('hora');
 
$boton_opcion=$request->input('opcion');

 if ($boton_opcion=='Registrar Responsable')
 {

     $cedula_tutor=$request->input('cedula_tutor');
	
	  
           $lista_tutornivel = \DB::table('tutor_nivel')
			->select('*')
			->where('id_nivel',$id_nivel)
			->get();
			
			foreach($lista_tutornivel as $tutor_nivel)
				{
				$id=$tutor_nivel->id;
				T_tutor_nivel::destroy($id);
				
				}
	
	
 
	$tutor_nivel=new T_tutor_nivel;
	$tutor_nivel->cedula_docente=$cedula_tutor;
	$tutor_nivel->id_nivel=$id_nivel;
	$tutor_nivel->save();
 }
 

if ($boton_opcion=='Registrar Horario')
 {
 
$lista_horarios= \DB::table('horario')
			->select('horario.id','docente.cedula', 'docente.grado', 'docente.nombres as nombre_docente', 'docente.apellidos as apellido_docente', 'horario.id_materia', 'materia.nombre as nombre_materia', 'horario.id_dia', 'dia.nombre as nombre_dia', 'horario.id_hora','hora.nombre as nombre_hora','hora_inicio','hora_fin')
			 ->join('docente', 'docente.cedula', '=', 'horario.cedula_docente')
			 ->join('materia', 'materia.id', '=', 'horario.id_materia')
			  ->join('dia', 'dia.id', '=', 'horario.id_dia')
			 ->join('hora', 'hora.id', '=', 'horario.id_hora')
			 ->orderBy('horario.id_hora', 'asc')
			 ->orderBy('horario.id_dia', 'asc')
			 ->where('horario.id_nivel',$id_nivel)
			  ->where('horario.id_dia',$id_dia)
			   ->where('horario.id_hora',$id_hora)
			   	->get();
			
		
				
		if (count ($lista_horarios)>0)
		{
		

		}
  
		else
		 {
  			$horario =new T_horario;
			$horario->cedula_docente=$request->input('docente');
			$horario->id_nivel=$request->input('nivel');
			$horario->id_materia=$request->input('materia');
			$horario->id_dia=$request->input('dia');
			$horario->id_hora=$request->input('hora');
			$horario->save();
  		}
		
		
}		
		
			$id_nivel= $request->input('nivel');
			$descripcion_nivel=$request->input('descripcion_nivel');
			$modalidad_nivel=$request->input('modalidad_nivel');
			
			   $lista_tutor_nivel = \DB::table('docente')
			->select('docente.cedula', 'docente.nombres', 'docente.apellidos')
			->join ('tutor_nivel','tutor_nivel.cedula_docente', '=', 'docente.cedula')
			->where ('tutor_nivel.id_nivel',$id_nivel)
			->get();

			$lista_dias = \DB::table('dia')
			->select('*')
			->get();
			
			$lista_horas = \DB::table('hora')
			->select('*')
			->where('modalidad',$modalidad_nivel)
			->get();
	
  			$lista_docentes = \DB::table('docente')
			->select('*')
			->get();
			
		
		  	$lista_materias = \DB::table('materia')
			->select('*')
			->get();
			
			 $lista_horarios= \DB::table('horario')
			->select('horario.id','docente.cedula', 'docente.grado', 'docente.nombres as nombre_docente', 'docente.apellidos as apellido_docente', 'horario.id_materia', 'materia.nombre as nombre_materia', 'horario.id_dia', 'dia.nombre as nombre_dia', 'horario.id_hora','hora.nombre as nombre_hora','hora_inicio','hora_fin')
			 ->join('docente', 'docente.cedula', '=', 'horario.cedula_docente')
			 ->join('materia', 'materia.id', '=', 'horario.id_materia')
			  ->join('dia', 'dia.id', '=', 'horario.id_dia')
			 ->join('hora', 'hora.id', '=', 'horario.id_hora')
			 ->orderBy('horario.id_hora', 'asc')
			 ->orderBy('horario.id_dia', 'asc')
			 ->where('horario.id_nivel',$id_nivel)
			->get();
				
				
			$mensaje='registrado';	
			$redireccion='registrar_horarios';
                        //return redirect($redireccion)->with('flash_message', 'Estudiante updated!');			
                        return view($redireccion)->with('docentes',$lista_docentes)->with('materias',$lista_materias)->with('dias',$lista_dias)->with('horas',$lista_horas)->with('horarios',$lista_horarios)-> with('id_nivel',$id_nivel)-> with('descripcion_nivel',$descripcion_nivel)-> with('modalidad_nivel',$modalidad_nivel)->with('tutores',$lista_tutor_nivel)->with('menu','usuario_administrador')->with('mensaje',$mensaje);
       	
			//return view('registrar_horarios')->with('docentes',$lista_docentes)->with('materias',$lista_materias)->with('dias',$lista_dias)->with('horas',$lista_horas)->with('horarios',$lista_horarios)-> with('id_nivel',$id_nivel)-> with('descripcion_nivel',$descripcion_nivel)-> with('modalidad_nivel',$modalidad_nivel)->with('tutores',$lista_tutor_nivel)->with('menu','usuario_administrador');;
		
}


public function borrah()
{



$id= $_GET["horario_id"];
T_horario::destroy($id);
$id_nivel= $_GET["id_nivel"];
$modalidad_nivel= $_GET["modalidad_nivel"];
$descripcion_nivel= $_GET["descripcion_nivel"];
   $lista_tutor_nivel = \DB::table('docente')
			->select('docente.cedula', 'docente.nombres', 'docente.apellidos')
			->join ('tutor_nivel','tutor_nivel.cedula_docente', '=', 'docente.cedula')
			->where ('tutor_nivel.id_nivel',$id_nivel)
			->get();
			
  $lista_dias = \DB::table('dia')
			->select('*')
			->get();
			
			$lista_horas = \DB::table('hora')
			->select('*')
			->where('modalidad',$modalidad_nivel)
			->get();
	
  $lista_docentes = \DB::table('docente')
			->select('*')
			->get();
			
		
		  $lista_materias = \DB::table('materia')
			->select('*')
			->get();
			
			 $lista_horarios= \DB::table('horario')
			->select('horario.id','docente.cedula', 'docente.grado', 'docente.nombres as nombre_docente','docente.apellidos as apellido_docente', 'horario.id_materia', 'materia.nombre as nombre_materia', 'horario.id_dia', 'dia.nombre as nombre_dia', 'horario.id_hora','hora.nombre as nombre_hora','hora_inicio','hora_fin')
			 ->join('docente', 'docente.cedula', '=', 'horario.cedula_docente')
			 ->join('materia', 'materia.id', '=', 'horario.id_materia')
			  ->join('dia', 'dia.id', '=', 'horario.id_dia')
			 ->join('hora', 'hora.id', '=', 'horario.id_hora')
			 ->orderBy('horario.id_hora', 'asc')
			 ->orderBy('horario.id_dia', 'asc')
			 ->where('horario.id_nivel',$id_nivel)
			->get();
				
				
	return view('registrar_horarios')->with('docentes',$lista_docentes)->with('materias',$lista_materias)->with('dias',$lista_dias)->with('horas',$lista_horas)->with('horarios',$lista_horarios)-> with('id_nivel',$id_nivel)-> with('descripcion_nivel',$descripcion_nivel)-> with('modalidad_nivel',$modalidad_nivel)->with('tutores',$lista_tutor_nivel)->with('menu','usuario_administrador');;

}


function mostrar_horario_nivel()

{

$id_nivel= $_GET["id_nivel"];
$modalidad_nivel= $_GET["modalidad_nivel"];
$descripcion_nivel= $_GET["descripcion_nivel"];

			
			$lista_tutor_nivel = \DB::table('docente')
			->select('docente.cedula','docente.grado', 'docente.nombres', 'docente.apellidos')
			->join ('tutor_nivel','tutor_nivel.cedula_docente', '=', 'docente.cedula')
			->where ('tutor_nivel.id_nivel',$id_nivel)
			->get();

			$lista_dias = \DB::table('dia')
			->select('*')
			->get();
			
			$lista_horas = \DB::table('hora')
			->select('*')
			->where('modalidad',$modalidad_nivel)
			->get();
	
  			$lista_docentes = \DB::table('docente')
			->select('*')
			->get();
			
		
		  	$lista_materias = \DB::table('materia')
			->select('*')
			->get();
			
			 $lista_horarios= \DB::table('horario')
			->select('horario.id','docente.cedula', 'docente.grado', 'docente.nombres as nombre_docente', 'docente.apellidos as apellido_docente', 'horario.id_materia', 'materia.nombre as nombre_materia', 'horario.id_dia', 'dia.nombre as nombre_dia', 'horario.id_hora','hora.nombre as nombre_hora','hora_inicio','hora_fin')
			 ->join('docente', 'docente.cedula', '=', 'horario.cedula_docente')
			 ->join('materia', 'materia.id', '=', 'horario.id_materia')
			  ->join('dia', 'dia.id', '=', 'horario.id_dia')
			 ->join('hora', 'hora.id', '=', 'horario.id_hora')
			 ->orderBy('horario.id_hora', 'asc')
			 ->orderBy('horario.id_dia', 'asc')
			 ->where('horario.id_nivel',$id_nivel)
			->get();
				
				
			$docentes=$lista_docentes;
			$materias=$lista_materias;
			$dias=$lista_dias;
			$horas=$lista_horas;
			$horarios=$lista_horarios;
			$id_nivel=$id_nivel;
			$descripcion_nivel=$descripcion_nivel;
			$modalidad_nivel=$modalidad_nivel;
			$tutores=$lista_tutor_nivel;
			
	
       // $view=  \View::make('mostrar_horario_nivel', compact('docentes', 'materias', 'dias','horas','descripcion_nivel','horarios','id_nivel','modalidad_nivel','tutores'))->render();
		
    
       // return $pdf->stream('mostrar_horario_nivel.pdf');
		
			// $pdf = \PDF::loadView('mostrar_horario_nivel', compact('docentes', 'materias', 'dias','horas','descripcion_nivel','horarios','id_nivel','modalidad_nivel','tutores'))->render();
			
			// $pdf = App::make('dompdf.wrapper');
        //$pdf->loadHTML($view);
			 
			 $pdf = \PDF::loadView('mostrar_horario_nivel', ['docentes' => $lista_docentes, 'materias' => $lista_materias, 'dias' => $lista_dias, 'horas' => $lista_horas,'horarios' => $lista_horarios, 'id_nivel' => $id_nivel, 'descripcion_nivel' => $descripcion_nivel, 'modalidad_nivel' => $modalidad_nivel, 'tutores' => $lista_tutor_nivel ])->setPaper("A4","portrait")->with('menu','usuario_administrador');;
			 ;
             return $pdf->download('mostrar_horario_nivel.pdf');


}
}
