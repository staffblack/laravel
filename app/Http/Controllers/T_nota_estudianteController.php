<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_notas; 
use App\T_bloque; 

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
			return view('nivel_docentes')->with('niveles',$lista_niveles)->with('menu','usuario_docente');
  }
  
  
   public function materia_docentes()
  {
  $cedula_docente=session('login');
  $id_nivel= $_GET["id_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
 /* $lista_materias = \DB::table('materia')
			->select('materia.id','materia.nombre','horario.id_materia')
			->join('horario','horario.id_materia', '=', 'materia.id' )
			->join('tutor_nivel','tutor_nivel.id_nivel', '=', 'horario.id_nivel' )
			->where('tutor_nivel.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->orderBy('horario.id_nivel', 'asc')
			->get();
			*/
			
			$lista_bloques = \DB::table('bloque')
			->select('bloque.id','bloque.nombre')
			->get();
			
			return view('materia_docentes')->with('bloques',$lista_bloques)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('menu','usuario_docente');
			}
			
			
public function editar_bloque()
{
			
    $cedula_docente=session('login');
  $id_nivel= $_GET["id_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
  $id_bloque= $_GET["id_bloque"];
  $nombre_bloque= $_GET["nombre_bloque"];
  include ('../conexion3.php');
  $registros = mysqli_query($conexion, "select * from nivel where id ='$id_nivel'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
      $niveles=$reg['curso'];
  }
  
   $lista_estudiantes = \DB::table('estudiante')
			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','horario.id_materia')
			->join('nivel_estudiante','nivel_estudiante.cedula_estudiante','=','estudiante.cedula')
			->join('nivel','nivel.id','=','nivel_estudiante.id_nivel')
			->join('horario','horario.id_nivel', '=', 'nivel.id' )
			->where('horario.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->groupBy('estudiante.cedula')
			->orderBy('estudiante.apellidos', 'asc')
			->get();
  
  
  $lista_notas = \DB::table('notas')
  ->select('id_materia','cedula_estudiante','id_bloque', 'nota')
			->where('notas.id_nivel',$id_nivel)
			->where('notas.id_bloque',$id_bloque)
			->get();
		
			
	$lista_materias = \DB::table('materia')
			->select('materia.id','materia.nombre')
			->join('horario','horario.id_materia', '=', 'materia.id' )
			->join('tutor_nivel','tutor_nivel.id_nivel', '=', 'horario.id_nivel' )
			->where('horario.id_nivel',$id_nivel)
			->groupBy('horario.id_materia')
			->orderBy('materia.id', 'asc')
			->get();
	
			
			
			return view('editar_bloque')->with('estudiantes',$lista_estudiantes)->with('notas',$lista_notas)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('materias',$lista_materias)->with('id_bloque',$id_bloque)->with('nombre_bloque',$nombre_bloque)->with('menu','usuario_docente')->with('niveles',$niveles);
  }

 
public function estudiante_docentes()
  {
  
  
  
  $cedula_docente=session('login');
  $id_nivel= $_GET["id_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
  $id_bloque= $_GET["id_bloque"];
  $nombre_bloque= $_GET["nombre_bloque"];
  
  
   $lista_estudiantes = \DB::table('estudiante')
			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','horario.id_materia')
			->join('nivel_estudiante','nivel_estudiante.cedula_estudiante','=','estudiante.cedula')
			->join('nivel','nivel.id','=','nivel_estudiante.id_nivel')
			->join('horario','horario.id_nivel', '=', 'nivel.id' )
			->where('horario.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->groupBy('estudiante.cedula')
			->orderBy('estudiante.apellidos', 'asc')
			->get();
  
  
  $lista_notas = \DB::table('notas')
  ->select('id_materia','cedula_estudiante','id_bloque', 'nota','alcance')
			->where('notas.id_nivel',$id_nivel)
			->where('notas.id_bloque',$id_bloque)
			->get();
		
			
	$lista_materias = \DB::table('materia')
			->select('materia.id','materia.nombre')
			->join('horario','horario.id_materia', '=', 'materia.id' )
			->join('tutor_nivel','tutor_nivel.id_nivel', '=', 'horario.id_nivel' )
			->where('horario.id_nivel',$id_nivel)
			->groupBy('horario.id_materia')
			->orderBy('materia.id', 'asc')
			->get();
	
			
			
			return view('estudiantes_docentes')->with('estudiantes',$lista_estudiantes)->with('notas',$lista_notas)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('materias',$lista_materias)->with('id_bloque',$id_bloque)->with('nombre_bloque',$nombre_bloque)->with('menu','usuario_docente');
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
			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos')
			->join('nivel_estudiante','nivel_estudiante.cedula_estudiante','=','estudiante.cedula')
			->join('nivel','nivel.id','=','nivel_estudiante.id_nivel')
			->where('horario.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->groupBy('estudiante.cedula')
			->orderBy('estudiante.apellidos', 'asc')
			->get();
			
			$lista_notas = \DB::table('estudiante')
  			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','notas.nota1','nota2', 'notas.nota3', 'notas.nota4', 'notas.nota5','notas.nota6')
			->join('notas','estudiante.cedula', '=', 'notas.cedula_estudiante' )
			->where('notas.id_nivel',$id_nivel)
			->where('notas.cedula_docente',$cedula_docente)
			->where('notas.id_materia',$id_materia)
			->groupBy('estudiante.cedula')
			->orderBy('estudiante.apellidos', 'asc')
			->get();
			
			//return $id_nivel.$id_materia.$cedula_docente.$cedula_estudiante;
			return view('bloque')->with('estudiantes',$lista_estudiantes)->with('notas',$lista_notas)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('id_materia',$id_materia)->with('nombre_materia',$nombre_materia)->with('numnota',$numnota)->with('menu','usuario_docente');;
			}



protected function get_id_nota($id_nivel, $id_materia, $cedula_docente,$cedula_estudiante,$id_bloque)
{

            $lista_notas= \DB::table('notas')
			->select('id')
			->where('id_nivel',$id_nivel)
			->where('id_materia',$id_materia)
			->where('cedula_docente',$cedula_docente)
			->where('cedula_estudiante',$cedula_estudiante)
			->where('id_bloque',$id_bloque)
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
  $id_bloque= $request->input('id_bloque');
  $nombre_bloque= $request->input('nombre_bloque');

    
			
		 $lista_estudiantes = \DB::table('estudiante')
			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','horario.id_materia')
			->join('nivel_estudiante','nivel_estudiante.cedula_estudiante','=','estudiante.cedula')
			->join('nivel','nivel.id','=','nivel_estudiante.id_nivel')
			->join('horario','horario.id_nivel', '=', 'nivel.id' )
			->where('horario.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->groupBy('estudiante.cedula')
			->orderBy('estudiante.apellidos', 'asc')
			->get();
  
  
  $lista_notas = \DB::table('notas')
  ->select('id_materia','cedula_estudiante','id_bloque', 'nota')
			->where('notas.id_nivel',$id_nivel)
			->where('notas.id_bloque',$id_bloque)
			->get();
		
			
	$lista_materias = \DB::table('materia')
			->select('materia.id','materia.nombre')
			->join('horario','horario.id_materia', '=', 'materia.id' )
			->join('tutor_nivel','tutor_nivel.id_nivel', '=', 'horario.id_nivel' )
			->groupBy('horario.id_materia')
			->where('horario.id_nivel',$id_nivel)
			->orderBy('materia.id', 'asc')
			->get();
	
	
			
				$cant=1;
				foreach($lista_estudiantes as $estudiante)
				{
				
					foreach($lista_materias as $materia)
				  {
                                                
				
						$id_nota=$this->get_id_nota($id_nivel, $materia->id, $cedula_docente,$estudiante->cedula,$id_bloque);
						
						   if ($id_nota>0)
						   //ya existe registrado toca actualizar
							{
							$notas = T_notas::find($id_nota);
							}
							else
							{
							$notas =new T_notas;
							}
							
						$not='nota'.$estudiante->cedula.$materia->id;
                                                $nota=$request->input($not);
                                                
                                                
                                                $notadh='notadhi'.$estudiante->cedula;
                                                $notanotadhi=$request->input($notadh);                                                
                                                $notas->dhi=$notanotadhi;
                                                                                                
                                                $notaproyect='notaproyecto'.$estudiante->cedula;
                                                $notaproyecto=$request->input($notaproyect);                                                
                                                $notas->proyectoescolar=$notaproyecto;
                                                
                                                $notainform='notainforme'.$estudiante->cedula;
                                                $notainforme=$request->input($notainform);                                                
                                                $notas->informe=$notainforme;
                                                
                                                
						$notas->id_nivel=$id_nivel;
						$notas->id_materia= $materia->id;
						$notas->cedula_docente=$cedula_docente;
						$notas->cedula_estudiante=$estudiante->cedula;
						$notas->id_bloque=$id_bloque;
						$notas->nota=$nota;
                                                
                                                  if($notas->nota<=5){
                                                    $notas->alcance='No Alcanza los Aprendizajes';
                                          }
                                                if(($notas->nota>=5.01)&&($notas->nota<=8)){
                                                    $notas->alcance='Proximo a Alcanzar los Aprendizajes';
                                                }
                                                
                                                if(($notas->nota>=8)&&($notas->nota<=8.9)){
                                                    $notas->alcance='Alcanza los Aprendizajes';
                                                }
                                                if(($notas->nota>=9)&&($notas->nota<=9.9)){
                                                    $notas->alcance='Domina los Aprendizajes';
                                                }
                                                if($notas->nota==10){
                                                    $notas->alcance='Supera los Aprendizajes';
                                                }
						$notas->save();
						
						
						}
				}
	
			$mensaje='editado';
			return view('estudiantes_docentes')->with('estudiantes',$lista_estudiantes)->with('notas',$lista_notas)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('materias',$lista_materias)->with('id_bloque',$id_bloque)->with('nombre_bloque',$nombre_bloque)->with('menu','usuario_docente')->with('mensaje',$mensaje);
			}
			
			
			
			
			
public function imprimir_notas()
  {
 $cedula_docente=session('login');
  $id_nivel= $_GET["id_nivel"];
  $descripcion_nivel= $_GET["descripcion_nivel"];
  $id_bloque= $_GET["id_bloque"];
  $nombre_bloque= $_GET["nombre_bloque"];
 
			
		$lista_estudiantes = \DB::table('estudiante')
			->select('estudiante.cedula', 'estudiante.nombres','estudiante.apellidos','horario.id_materia')
			->join('nivel_estudiante','nivel_estudiante.cedula_estudiante','=','estudiante.cedula')
			->join('nivel','nivel.id','=','nivel_estudiante.id_nivel')
			->join('horario','horario.id_nivel', '=', 'nivel.id' )
			->where('horario.cedula_docente',$cedula_docente)
			->where('horario.id_nivel',$id_nivel)
			->groupBy('estudiante.cedula')
			->orderBy('estudiante.apellidos', 'asc')
			->get();
  
  
  $lista_notas = \DB::table('notas')
  ->select('id_materia','cedula_estudiante','id_bloque', 'nota')
			->where('notas.id_nivel',$id_nivel)
			->where('notas.id_bloque',$id_bloque)
			->get();
		
			
	$lista_materias = \DB::table('materia')
			->select('materia.id','materia.nombre')
			->join('horario','horario.id_materia', '=', 'materia.id' )
			->join('tutor_nivel','tutor_nivel.id_nivel', '=', 'horario.id_nivel' )
			->where('horario.id_nivel',$id_nivel)
			->groupBy('horario.id_materia')
			->orderBy('materia.id', 'asc')
			->get();
	
			
			
			return view('imprimir_notas')->with('estudiantes',$lista_estudiantes)->with('notas',$lista_notas)->with('id_nivel',$id_nivel)->with('descripcion_nivel',$descripcion_nivel)->with('materias',$lista_materias)->with('id_bloque',$id_bloque)->with('nombre_bloque',$nombre_bloque)->with('menu','usuario_docente');;
			}
}
