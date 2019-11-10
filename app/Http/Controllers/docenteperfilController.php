<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\docenteperfil;
use Illuminate\Http\Request;

class docenteperfilController extends Controller
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
            $docenteperfil = docenteperfil::where('cedula', 'LIKE', "%$keyword%")
                ->orWhere('nombres', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->orWhere('grado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $docenteperfil = docenteperfil::latest()->paginate($perPage);
        }

        return view('docenteperfil.index', compact('docenteperfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('docenteperfil.create');
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
        
        docenteperfil::create($requestData);

        return redirect('docenteperfil')->with('flash_message', 'docenteperfil added!');
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
        $docenteperfil = docenteperfil::findOrFail($id);

        return view('docenteperfil.show', compact('docenteperfil'));
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
        $docenteperfil = docenteperfil::findOrFail($id);

        return view('docenteperfil.edit', compact('docenteperfil'));
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
        
        $docenteperfil = docenteperfil::findOrFail($id);
        $docenteperfil->update($requestData);

        //docenteperfil/56/edit
        $redireccion='docenteperfil/'.$id.'/edit?accion=editado';
        return redirect($redireccion)->with('flash_message', 'Docente updated!');

        //return redirect('docenteperfil')->with('flash_message', 'docenteperfil updated!');
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
        docenteperfil::destroy($id);

        return redirect('docenteperfil')->with('flash_message', 'docenteperfil deleted!');
    }
}
