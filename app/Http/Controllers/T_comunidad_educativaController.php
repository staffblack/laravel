<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\T_docente; 

use App\T_trabajador; 

class T_comunidad_educativaController extends Controller
{
/**
  * Muestra una lista de las monedas.
  *
  * @return Response
  */
  

 public function index()
  {
 

 if (isset($_GET['valrector']))
 {
 $valrector=1;
 }
 else
 {
 $valrector=0;
 }
 
 if (isset($_GET['valvicerrector']))
 {
 $valvicerrector=1;
 }
 else
 {
 $valvicerrector=0;
 }
 if (isset($_GET['valinspector']))
 {
 $valinspector=1;
 }
 else
 {
 $valinspector=0;
 }
 

 
 if (isset($_GET['trabajador']))
 {
 $funcion=$_GET['trabajador'];
          $lista_trabajadores = \DB::table('trabajador')
			->select('*')
			->where('funcion','=',$funcion)
			->get();
 
return view('comunidad_educativa_administrativo')->with('trabajadores',$lista_trabajadores)->with('funcion',$funcion);
}
else
{

 $area1=0;
 
  if (isset($_GET['area']))
  {
      $area=$_GET['area'];
	  
  }
  else
  {
$area='MATEMATICAS';
$area1=1;
  }

$lista_rectores = \DB::table('docente')
			->select('*')
			->where('cargo','=','Rector')
			->orWhere('cargo','=','Rectora')
			->get();
	$lista_vicerrectores = \DB::table('docente')
			->select('*')
			->where('cargo','=','Vicerrector')
			->orWhere('cargo','=','Vicerrectora')
			->get();
			
 	$lista_inspectores = \DB::table('docente')
			->select('*')
			->where('cargo','=','Inspector General')
			->orWhere('cargo','=','Inspectora General')
			->get();
 

 	$lista_areas = \DB::table('docente')
			->select('*')
			->orderBy('area','desc')
			->groupBy('area')
			->get();
			
			$lista_areas_docentes = \DB::table('docente')
			->select('*')
			->where('area','=',$area)
			->get();
			
			if ($area1==1)
			{
			$area=utf8_encode("MATEMATICAS");
			}
			
return view('comunidad_educativa')->with('rectores',$lista_rectores)->with('vicerrectores',$lista_vicerrectores)->with('inspectores',$lista_inspectores)->with('areas_docentes',$lista_areas_docentes)->with('area',$area)->with('valrector',$valrector)->with('valvicerrector',$valvicerrector)->with('valinspector',$valinspector)->with('menu','comunidad_educativa');
}


 }

  
  
 public function comunidad_educativa_docentes()
  {
 

 if (isset($_GET['valrector']))
 {
 $valrector=1;
 }
 else
 {
 $valrector=0;
 }
 
 if (isset($_GET['valvicerrector']))
 {
 $valvicerrector=1;
 }
 else
 {
 $valvicerrector=0;
 }
 if (isset($_GET['valinspector']))
 {
 $valinspector=1;
 }
 else
 {
 $valinspector=0;
 }
 

 
 if (isset($_GET['trabajador']))
 {
 $funcion=$_GET['trabajador'];
          $lista_trabajadores = \DB::table('trabajador')
			->select('*')
			->where('funcion','=',$funcion)
			->get();
 
return view('comunidad_educativa_administrativo')->with('trabajadores',$lista_trabajadores)->with('funcion',$funcion)->with('menu','comunidad_educativa');
}
else
{

 $area1=0;
 
  if (isset($_GET['area']))
  {
      $area=$_GET['area'];
	  
  }
  else
  {
$area='MATEMATICAS';
$area1=1;
  }

$lista_rectores = \DB::table('docente')
			->select('*')
			->where('cargo','=','Rector')
			->orWhere('cargo','=','Rectora')
			->get();
	$lista_vicerrectores = \DB::table('docente')
			->select('*')
			->where('cargo','=','Vicerrector')
			->orWhere('cargo','=','Vicerrectora')
			->get();
			
 	$lista_inspectores = \DB::table('docente')
			->select('*')
			->where('cargo','=','Inspector General')
			->orWhere('cargo','=','Inspectora General')
			->get();
 

 	$lista_areas = \DB::table('docente')
			->select('*')
			->orderBy('area','desc')
			->groupBy('area')
			->get();
			
			$lista_areas_docentes = \DB::table('docente')
			->select('*')
			->where('area','=',$area)
			->get();
			
			if ($area1==1)
			{
			$area=utf8_encode("MATEM�TICAS");
			}
			
return view('comunidad_educativa_docentes')->with('rectores',$lista_rectores)->with('vicerrectores',$lista_vicerrectores)->with('inspectores',$lista_inspectores)->with('areas_docentes',$lista_areas_docentes)->with('area',$area)->with('valrector',$valrector)->with('valvicerrector',$valvicerrector)->with('valinspector',$valinspector)->with('menu','comunidad_educativa');;
}


  }
  
}
