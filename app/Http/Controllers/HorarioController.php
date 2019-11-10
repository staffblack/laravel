<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Horario;
use App\Nivel;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $nivel = Nivel::where('id', 'LIKE', "%$keyword%")
                ->orWhere('curso', 'LIKE', "%$keyword%")
                ->orWhere('paralelo', 'LIKE', "%$keyword%")
                ->orWhere('oferta', 'LIKE', "%$keyword%")
                ->orWhere('modalidad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $nivel = Nivel::latest()->paginate($perPage);
        }

        return view('horario.index', compact('nivel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('horario.create');
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
        
        Horario::create($requestData);

        return redirect('horario')->with('flash_message', 'Horario added!');
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
        $horario = Horario::findOrFail($id);

        return view('horario.show', compact('horario'));
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
        $horario = Horario::findOrFail($id);

        return view('horario.edit', compact('horario'));
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
        
        $horario = Horario::findOrFail($id);
        $horario->update($requestData);

        return redirect('horario')->with('flash_message', 'Horario updated!');
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
        Horario::destroy($id);

        return redirect('horario')->with('flash_message', 'Horario deleted!');
    }
}
