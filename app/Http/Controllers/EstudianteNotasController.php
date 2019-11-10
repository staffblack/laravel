<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EstudianteNota;
use Illuminate\Http\Request;

class EstudianteNotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $estudiantenotas = EstudianteNota::where('id', 'LIKE', "%$keyword%")
                ->orWhere('id_nivel', 'LIKE', "%$keyword%")
                ->orWhere('id_materia', 'LIKE', "%$keyword%")
                ->orWhere('cedula_docente', 'LIKE', "%$keyword%")
                ->orWhere('cedula_estudiante', 'LIKE', "%$keyword%")
                ->orWhere('id_bloque', 'LIKE', "%$keyword%")
                ->orWhere('nota', 'LIKE', "%$keyword%")
                ->orWhere('alcance', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $estudiantenotas = EstudianteNota::latest()->paginate($perPage);
        }

        return view('estudiante-notas.index', compact('estudiantenotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('estudiante-notas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        EstudianteNota::create($requestData);

        return redirect('estudiante-notas')->with('flash_message', 'EstudianteNota added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $estudiantenota = EstudianteNota::findOrFail($id);

        return view('estudiante-notas.show', compact('estudiantenota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $estudiantenota = EstudianteNota::findOrFail($id);

        return view('estudiante-notas.edit', compact('estudiantenota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $estudiantenota = EstudianteNota::findOrFail($id);
        $estudiantenota->update($requestData);

        return redirect('estudiante-notas')->with('flash_message', 'EstudianteNota updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        EstudianteNota::destroy($id);

        return redirect('estudiante-notas')->with('flash_message', 'EstudianteNota deleted!');
    }
}
