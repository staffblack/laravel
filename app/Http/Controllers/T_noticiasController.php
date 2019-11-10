<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_evento; //modelo
use App\T_actividad; //actividad
use App\T_noticia; //noticia

class T_noticiasController extends Controller
{


 public function index()
  {
     //Devolver� todas las monedas
   //$lista_eventos = T_evento::get();
  // $lista_actividades = T_actividad::get();  
//$lista_noticias = T_noticia::get();
  
  
 $lista_eventos = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Evento')
			->get();
			
  $lista_noticias = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Noticia')
			->get();
	  $lista_actividades = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Actividad')
			->get();


return view('noticia')->with('eventos', $lista_eventos )->with('actividades', $lista_actividades )->with('noticias', $lista_noticias)->with('menu','index');

  }
  
  
  public function create() 
  
  {
  return view('eventos.ingreso');
  }
  
  public function store(Request $request) 
  
  {
  //T_evento::create($request->all());
  
  $evento =new T_evento;
  $evento->id=$request->input('id');
  $evento->nombre=$request->input('nombre');
  $evento->descripcion=$request->input('descripcion');
  $evento->fecha=$request->input('fecha');
  $evento->foto=$request->input('foto');
  $evento->save();
  return "completado";
  
  }
}
