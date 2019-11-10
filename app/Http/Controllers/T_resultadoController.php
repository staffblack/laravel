<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_evento; //modelo
use App\T_actividad; //actividad
use App\T_noticia; //noticia

class T_resultadoController extends Controller
{


 public function index()
  {
    
return view('resultado')->with('menu','index');

  }
  
  
  
  
  
}
