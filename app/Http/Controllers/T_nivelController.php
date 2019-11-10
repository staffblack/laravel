<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_nivel; 

class T_nivelController extends Controller
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
  $lista_niveles = \DB::table('nivel')
			->select('*')
			->get();
			
	 return view('registrar_horarios')->with('niveles',$lista_niveles);
  }
  
  public function show()
  {
     $lista_niveles = \DB::table('nivel')
			->select('*')
			->get();
			
			
	 return view('registrar_horarios')->with('niveles',$lista_niveles);
  }
 
}
