<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class T_nuestro_colegioController extends Controller
{
/**
  * Muestra una lista de las monedas.
  *
  * @return Response
  */
  

 public function index()
  {
     //Devolver� todas las monedas
   //$lista_eventos = T_evento::get();
  // $lista_actividades = T_actividad::get();  
//$lista_noticias = T_noticia::get();
  
  
  


return view('nuestro_colegio')->with('menu','nuestro_colegio');

  }
  
  public function updateestudiante()
  {
     //Devolver� todas las monedas
   //$lista_eventos = T_evento::get();
  // $lista_actividades = T_actividad::get();  
//$lista_noticias = T_noticia::get();
  
  
  


return view('updateestudiante');

  }
  
  
   public function resena_historica()
  {
    

return view('resena_historica')->with('menu','nuestro_colegio');

  }
  
public function quienes_somos()
  {
    

return view('quienes_somos')->with('menu','nuestro_colegio');

  }
  
  
}
