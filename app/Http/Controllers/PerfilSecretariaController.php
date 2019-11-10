<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PerfilSecretarium;
use Illuminate\Http\Request;

class PerfilSecretariaController extends Controller
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
            $perfilsecretaria = PerfilSecretarium::where('id', 'LIKE', "%$keyword%")
                ->orWhere('login', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('nombres', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('perfil', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $perfilsecretaria = PerfilSecretarium::latest()->paginate($perPage);
        }

        return view('perfil-secretaria.index', compact('perfilsecretaria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('perfil-secretaria.create');
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
        
        PerfilSecretarium::create($requestData);

        return redirect('perfil-secretaria')->with('flash_message', 'PerfilSecretarium added!');
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
        $perfilsecretarium = PerfilSecretarium::findOrFail($id);

        return view('perfil-secretaria.show', compact('perfilsecretarium'));
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
        $perfilsecretarium = PerfilSecretarium::findOrFail($id);

        return view('perfil-secretaria.edit', compact('perfilsecretarium'));
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
        
        $perfilsecretarium = PerfilSecretarium::findOrFail($id);
        $perfilsecretarium->update($requestData);

       // perfil-secretaria/11/edit
        $direccion='perfil-secretaria/'.$id.'/edit?accion=editado';
        return redirect($direccion)->with('flash_message', 'PerfilSecretarium updated!');
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
        PerfilSecretarium::destroy($id);

        return redirect('perfil-secretaria')->with('flash_message', 'PerfilSecretarium deleted!');
    }
}
