<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_evento; //modelo
use App\T_actividad; //actividad
use App\T_noticia; //noticia

class T_eventoController extends Controller
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
                        //->skip(2)
                        ->take(2)
			->get();
			
  $lista_noticias = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Noticia')
                        ->take(2)
			->get();
	  $lista_actividades = \DB::table('cronograma')
			->select('*')
			->orderBy('tipo','asc')
			->orderBy('fecha','desc')
			->where('tipo','=','Actividad')
                        ->take(2)
			->get();


return view('index')->with('eventos', $lista_eventos )->with('actividades', $lista_actividades )->with('noticias', $lista_noticias)->with('menu','index');

  }
  
  public function index2()
  {
       //$keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $estudiante = T_evento::where('id', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('responsable', 'LIKE', "%$keyword%")
                //->orWhere('password', 'LIKE', "%$keyword%")
                //->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $estudiante = T_evento::latest()->paginate($perPage);
        }

        return view('eventos_view', compact('estudiante'))->with('menu','index');
        //return view('index')->with('eventos', $lista_eventos )->with('actividades', $lista_actividades )->with('noticias', $lista_noticias)->with('menu','index');

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
