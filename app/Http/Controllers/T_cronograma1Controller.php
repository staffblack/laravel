<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class T_cronograma1Controller extends Controller
{
  public function index()
  {
  
  $dias_mes=31;
  if (isset($_GET["id_mes"]) && isset($_GET["nombre_mes"]))
  
  {
   $id_mes=$_GET["id_mes"];
   $nombre_mes=$_GET["nombre_mes"];
   $ano=$_GET["ano"];
  }
  else
  {
  
  $id_mes=date('m');
  $ano=date('Y');
  $dias_mes=cal_days_in_month(CAL_GREGORIAN, $id_mes,$ano); 
  
  $lista_meses1 = \DB::table('mes')
			->select('*')
			->where('id','=',$id_mes)
			->get();
			
  foreach ($lista_meses1 as $mes)
				{
				 $nombre_mes=$mes->nombre;
				 }
  
  }
  
  if (isset($_GET["buscar"]))
  {
    $anio=$_GET["buscar"];
	$ano=$ano+$anio;
  }
  			
			$sql = " SELECT id, descripcion, fecha, responsable, DAY(fecha) AS dia, (ELT(WEEKDAY(fecha) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS dia_semana FROM cronograma WHERE MONTH(fecha)=? and YEAR(fecha)=?";  
 $lista_cronogramas=\DB::select($sql,array($id_mes,$ano));
	
	$dias_mes=cal_days_in_month(CAL_GREGORIAN, $id_mes, $ano); 
			
			
			$lista_meses = \DB::table('mes')
			->select('*')
			->get();
			
  

  $fecha_dada=$ano.'-'.$id_mes.'-01';
  $sql = "SELECT (ELT(WEEKDAY(?) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS dia_semana";  
 $lista_primer_dia_mes=\DB::select($sql,array($fecha_dada));
 foreach ($lista_primer_dia_mes as $dia_semana)
	{
				 $primer_dia=$dia_semana->dia_semana;
	}
  				 
$sql = " SELECT id, descripcion, fecha, hora, tipo,responsable, DAY(fecha) AS dia,(ELT(WEEKDAY(fecha) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS dia_semana FROM cronograma WHERE MONTH(fecha)=? and DAY(fecha)=? and YEAR(fecha)=?";  
 $lista_actividades_dia=\DB::select($sql,array($id_mes,0,0));
 
return view('cronograma1')->with('meses',$lista_meses)->with('cronogramas',$lista_cronogramas)->with('id_mes',$id_mes)->with('nombre_mes',$nombre_mes)->with('dias_mes',$dias_mes)->with('lista_actividades_dia',$lista_actividades_dia)->with('primer_dia',$primer_dia)->with('ano',$ano)->with('menu','cronograma1');
	
  }
  
  

 
  
  
  
public function mostrar_actividades_dia()
{


  $dias_mes=31;
  if (isset($_GET["id_mes"]) && isset($_GET["nombre_mes"]))
  
  {
   $id_mes=$_GET["id_mes"];
   $nombre_mes=$_GET["nombre_mes"];
   $ano=$_GET["ano"];
   $dia=$_GET["dia"];
  }
  else
  {
  
  $id_mes=date('m');
  $ano=date('Y');
  $dias_mes=cal_days_in_month(CAL_GREGORIAN, $id_mes,$ano); 
  
  $lista_meses1 = \DB::table('mes')
			->select('*')
			->where('id','=',$id_mes)
			->get();
			
  foreach ($lista_meses1 as $mes)
				{
				 $nombre_mes=$mes->nombre;
				 }
  
  }
  
  if (isset($_GET["buscar"]))
  {
    $anio=$_GET["buscar"];
	$ano=$ano+$anio;
  }
  		


	$sql = " SELECT id, descripcion, fecha, responsable, DAY(fecha) AS dia, (ELT(WEEKDAY(fecha) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS dia_semana FROM cronograma WHERE MONTH(fecha)=? and YEAR(fecha)=?";  
 $lista_cronogramas=\DB::select($sql,array($id_mes,$ano));
	
	$dias_mes=cal_days_in_month(CAL_GREGORIAN, $id_mes, $ano); 
			
			
			$lista_meses = \DB::table('mes')
			->select('*')
			->get();
			
  

  $fecha_dada=$ano.'-'.$id_mes.'-01';
  $sql = "SELECT (ELT(WEEKDAY(?) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS dia_semana";  
 $lista_primer_dia_mes=\DB::select($sql,array($fecha_dada));
 foreach ($lista_primer_dia_mes as $dia_semana)
	{
				 $primer_dia=$dia_semana->dia_semana;
	}
  				
$sql = " SELECT id,  descripcion, fecha, hora, tipo, responsable, DAY(fecha) AS dia, (ELT(WEEKDAY(fecha) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS dia_semana FROM cronograma WHERE  MONTH(fecha)=? and DAY(fecha)=? and YEAR(fecha)=?";   
 $lista_actividades_dia=\DB::select($sql,array($id_mes,$dia,$ano));
  
return view('cronograma1')->with('meses',$lista_meses)->with('cronogramas',$lista_cronogramas)->with('id_mes',$id_mes)->with('nombre_mes',$nombre_mes)->with('dias_mes',$dias_mes)->with('lista_actividades_dia',$lista_actividades_dia)->with('primer_dia',$primer_dia)->with('ano',$ano)->with('menu','cronograma1')->with('menu','cronograma1');;

}

}
