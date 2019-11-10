<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cronograma;
use App\T_evento; //modelo
use App\T_actividad; //actividad
use App\T_noticia; //noticia

class T_eventosController extends Controller
{


 public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $cronograma = Cronograma::where('tipo', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")
                ->orWhere('hora', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('responsable', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cronograma = Cronograma::latest()->paginate($perPage);
        }
        return view('evento', compact('cronograma'))->with('menu','index');
        //return view('evento')->with('eventos', $lista_eventos )->with('actividades', $lista_actividades )->with('noticias', $lista_noticias)->with('menu','index');

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
