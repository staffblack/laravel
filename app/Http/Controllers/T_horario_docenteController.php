<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_horario; 
use Barryvdh\DomPDF\Facade as PDF;

class T_horario_docenteController extends Controller
{

  public function index()
  {
  $cedula_docente=session('login');
  
  $lista_niveles = \DB::table('nivel')
			->select('nivel.id', 'nivel.curso','nivel.paralelo','nivel.oferta','nivel.modalidad')
			->join('horario','horario.id_nivel', '=', 'nivel.id' )
			->where('horario.cedula_docente',$cedula_docente)
			->groupBy('nivel.id')
			->orderBy('nivel.id', 'asc')
			->get();
			return view('horario_nivel_docentes')->with('niveles',$lista_niveles)->with('menu','usuario_docente');
  }
  
  function mostrar_horario_docente()
  {
   $cedula_docente=session('login');
  $id_nivel= $_GET["id_nivel"];
$modalidad_nivel= $_GET["modalidad_nivel"];
$descripcion_nivel= $_GET["descripcion_nivel"];
  
  
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
			 ->where('horario.cedula_docente',$cedula_docente)
			->get();
				
				
	return view('mostrar_horario_docente')->with('docentes',$lista_docentes)->with('materias',$lista_materias)->with('dias',$lista_dias)->with('horas',$lista_horas)->with('horarios',$lista_horarios)-> with('id_nivel',$id_nivel)-> with('descripcion_nivel',$descripcion_nivel)-> with('modalidad_nivel',$modalidad_nivel)->with('menu','usuario_docente');
	}
  
  
  function mostrar_horario_docente1()
  {
   $cedula_docente=$_GET["cedula_docente"];
    
  
  $lista_dias = \DB::table('dia')
			->select('*')
			->get();
			
			$lista_horas = \DB::table('hora')
			->select('hora.id','hora.numero','hora.nombre','hora.hora_inicio', 'hora.hora_fin')
			 ->join('horario', 'hora.id', '=', 'horario.id_hora')
			  ->join('nivel', 'nivel.id', '=', 'horario.id_nivel')
			 ->orderBy('horario.id_hora', 'asc')
			 ->orderBy('horario.id_dia', 'asc')
			 ->where('horario.cedula_docente',$cedula_docente)
			->get();
	
  $lista_docentes = \DB::table('docente')
			->select('*')
			->get();
			
		
		  $lista_materias = \DB::table('materia')
			->select('*')
			->get();
			
			 $lista_horarios= \DB::table('horario')
			->select('horario.id','docente.cedula', 'docente.grado', 'docente.nombres as nombre_docente','docente.apellidos as apellido_docente', 'horario.id_materia', 'materia.nombre as nombre_materia', 'horario.id_dia', 'dia.nombre as nombre_dia', 'horario.id_hora','hora.nombre as nombre_hora','hora_inicio','hora_fin','horario.id_nivel','nivel.curso','nivel.oferta','nivel.paralelo')
			 ->join('docente', 'docente.cedula', '=', 'horario.cedula_docente')
			 ->join('materia', 'materia.id', '=', 'horario.id_materia')
			  ->join('dia', 'dia.id', '=', 'horario.id_dia')
			 ->join('hora', 'hora.id', '=', 'horario.id_hora')
			  ->join('nivel', 'nivel.id', '=', 'horario.id_nivel')
			 ->orderBy('horario.id_hora', 'asc')
			 ->orderBy('horario.id_dia', 'asc')
			 ->where('horario.cedula_docente',$cedula_docente)
			->get();
				
				$pdf = \PDF::loadView('mostrar_horario_docente1', ['docentes' => $lista_docentes, 'materias' => $lista_materias, 'dias' => $lista_dias, 'horas' => $lista_horas,'horarios' => $lista_horarios ])->setPaper("A4","portrait");
			 ;
             return $pdf->download('mostrar_horario_docente1.pdf');

	
	}


}
