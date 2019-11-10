<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Barryvdh\DomPDF\Facade as PDF;

class T_ejemploController extends Controller
{
  /*public function index()
  {
     $lista_niveles = \DB::table('nivel')
			->select('*')
			->get();
			
			
	 return view('registrar_horarios')->with('niveles',$lista_niveles);
  }*/
  public function imprimir()
  {
  

     $pdf = \PDF::loadView('ejemplo');
     return $pdf->download('ejemplo.pdf');
}

}
