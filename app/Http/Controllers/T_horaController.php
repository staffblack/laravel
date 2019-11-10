<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class T_horaController extends Controller
{
  public function index()
  {
  $lista_horas = \DB::table('hora')
			->select('*')
			->get();
	return view('registrar_horarios_docente')->with('horas',$lista_horas);
  }
  
 public function show()
  {
   $lista_horas = \DB::table('hora')
			->select('*')
			->get();
			
	return view('registrar_horarios_docente')->with('horas',$lista_horas);
  }
}
