<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_mes; 

class T_mesController extends Controller
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
  $lista_meses = \DB::table('mes')
			->select('*')
			->get();
			
	 return view('meses')->with('meses',$lista_meses);
  }
  
  public function show()
  {
     $lista_meses= \DB::table('mes')
			->select('*')
			->get();
			
			
	 return view('meses')->with('meses',$lista_meses);
  }
 
}
