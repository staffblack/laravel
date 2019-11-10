<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_notas; 

class T_nota_estudianteController extends Controller
{

  public function index()
  {
  $cedula_docente=session('login');
  
  $lista_niveles = \DB::table('nivel')
			->select('nivel.id', 'nivel.curso','nivel.paralelo','nivel.oferta','nivel.modalidad')
			->join('tutor_nivel','tutor_nivel.id_nivel', '=', 'nivel.id' )
			->where('tutor_nivel.cedula_docente',$cedula_docente)
			->orderBy('nivel.id', 'asc')
			->get();
			return view('nivel_docentes')->with('niveles',$lista_niveles);
  }
  
  
   public function materia_docentes()
  {
  $cedula_docente=session('login');
  $id_nivel= $_GET["id_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
  $lista_materias = \DB::table('materia')
			->select('materia.id','materia.nombre','horario.id_materia')
			->join('horario','horario.id_materia', '=', 'materia.id' )
			->join('tutor_nivel','tutor_nivel.id_nivel', '=', 'horario.id_nivel' )
			->where('tutor_nivel.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->orderBy('horario.id_nivel', 'asc')
			->get();
			return view('materia_docentes')->with('materias',$lista_materias)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel);
			}
			
public function estudiante_docentes()
  {
  
  
  
  $cedula_docente=session('login');
  $id_nivel= $_GET["id_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
  $id_materia= $_GET["id_materia"];
  $nombre_materia= $_GET["nombre_materia"];
  
  
   $lista_estudiantes = \DB::table('estudiante')
			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','estudiante.id_nivel')
			->join('nivel','nivel.id', '=', 'estudiante.id_nivel' )
			->join('horario','horario.id_nivel', '=', 'nivel.id' )
			->where('horario.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->orderBy('estudiante.apellidos', 'asc')
			->get();
  
  
  $lista_notas = \DB::table('estudiante')
  ->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','notas.nota1','nota2', 'notas.nota3', 'notas.nota4', 'notas.nota5','notas.nota6')
			->join('notas','estudiante.cedula', '=', 'notas.cedula_estudiante' )
			->where('notas.id_nivel',$id_nivel)
			->where('notas.cedula_docente',$cedula_docente)
			->where('notas.id_materia',$id_materia)
			->groupBy('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos')
			->orderBy('estudiante.apellidos', 'asc')
			->get();
		
			
			return view('estudiantes_docentes')->with('estudiantes',$lista_estudiantes)->with('notas',$lista_notas)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('id_materia',$id_materia)->with('nombre_materia',$nombre_materia);
  }
  
    

			
public function mostrar_bloque()
  {
  $cedula_docente=session('login');
  $id_nivel= $_GET["id_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
  $id_materia= $_GET["id_materia"];
  $nombre_materia= $_GET["nombre_materia"];
  $numnota=$_GET["numnota"];
			
			 $lista_estudiantes = \DB::table('estudiante')
			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','estudiante.id_nivel')
			->join('nivel','nivel.id', '=', 'estudiante.id_nivel' )
			->join('horario','horario.id_nivel', '=', 'nivel.id' )
			->where('horario.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->orderBy('estudiante.apellidos', 'asc')
			->get();
			
			
			$lista_notas = \DB::table('estudiante')
  ->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','notas.nota1','nota2', 'notas.nota3', 'notas.nota4', 'notas.nota5','notas.nota6')
			->join('notas','estudiante.cedula', '=', 'notas.cedula_estudiante' )
			->where('notas.id_nivel',$id_nivel)
			->where('notas.cedula_docente',$cedula_docente)
			->where('notas.id_materia',$id_materia)
				->groupBy('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos')
			->orderBy('estudiante.apellidos', 'asc')
			
			->get();
			
			//return $id_nivel.$id_materia.$cedula_docente.$cedula_estudiante;
			return view('bloque')->with('estudiantes',$lista_estudiantes)->with('notas',$lista_notas)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('id_materia',$id_materia)->with('nombre_materia',$nombre_materia)->with('numnota',$numnota);
			}



protected function get_id_nota($id_nivel, $id_materia, $cedula_docente,$cedula_estudiante)
{

            $lista_notas= \DB::table('notas')
			->select('id')
			->where('id_nivel',$id_nivel)
			->where('id_materia',$id_materia)
			->where('cedula_docente',$cedula_docente)
			->where('cedula_estudiante',$cedula_estudiante)
			->get();
			$id_nota=0;
			foreach($lista_notas as $nota)
				{
				$id_nota=$nota->id;
				
				}
				return $id_nota;

}

public function store(Request $request) 
  {
  $cedula_docente=session('login');
  $id_nivel=$request->input('id_nivel');
  $descripcion_nivel= $request->input('descripcion_nivel');
  $id_materia= $request->input('id_materia');
  $nombre_materia= $request->input('nombre_materia');
  $numnota=$request->input('numnota');
 

         
			
			$lista_estudiantes = \DB::table('estudiante')
			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','estudiante.id_nivel')
			->join('nivel','nivel.id', '=', 'estudiante.id_nivel' )
			->join('horario','horario.id_nivel', '=', 'nivel.id' )
			->where('horario.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->orderBy('estudiante.apellidos', 'asc')
			->get();
	
			$lista_notas = \DB::table('estudiante')
 			 ->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','notas.nota1','nota2', 'notas.nota3', 'notas.nota4', 'notas.nota5','notas.nota6')
			->join('notas','estudiante.cedula', '=', 'notas.cedula_estudiante' )
			->where('notas.id_nivel',$id_nivel)
			->where('notas.cedula_docente',$cedula_docente)
			->where('notas.id_materia',$id_materia)
			->groupBy('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos')
			->orderBy('estudiante.apellidos', 'asc')
			->get();
	
	
			
				$cant=1;
				foreach($lista_estudiantes as $estudiante)
				{
						$id_nota=$this->get_id_nota($id_nivel, $id_materia, $cedula_docente,$estudiante->cedula);
						
						   if ($id_nota>0)
						   //ya existe registrado toca actualizar
							{
							$notas = T_notas::find($id_nota);
							}
							else
							{
							$notas =new T_notas;
							}
							
						$nota=$request->input('nota'.$cant);
						$notas->id_nivel=$id_nivel;
						$notas->id_materia=$id_materia;
						$notas->cedula_docente=$cedula_docente;
						$notas->cedula_estudiante=$estudiante->cedula;
						
						
						if ($numnota==1)
						{
						$notas->nota1=$nota;
						}
						if ($numnota==2)
						{
						$notas->nota2=$nota;
						}
						
						if ($numnota==3)
						{
						$notas->nota3=$nota;
						}
					
					  if ($numnota==4)
						{
						$notas->nota4=$nota;
						}
						if ($numnota==5)
						{
						$notas->nota5=$nota;
						}
						if ($numnota==6)
						{
						$notas->nota6=$nota;
						}
						$notas->save();
						$cant++; 
						
				}
	
			
					
			return view('estudiantes_docentes')->with('estudiantes',$lista_estudiantes)->with('notas',$lista_notas)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('id_materia',$id_materia)->with('nombre_materia',$nombre_materia)->with('numnota',$numnota);
			}
}
