<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class T_oferta_academicaController extends Controller
{
/**
  * Muestra una lista de las monedas.
  *
  * @return Response
  */
  

 public function index()
  {
     

return view('oferta_academica')->with('menu','oferta_academica');

  }
  
   public function seccion_matutina()
  {
     

return view('seccion_matutina')->with('menu','oferta_academica');

  }
     public function seccion_vespertina()
  {
     

return view('seccion_vespertina')->with('menu','oferta_academica');

  }
  

  
  
}
