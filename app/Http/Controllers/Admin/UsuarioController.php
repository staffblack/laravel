<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
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
            $usuario = Usuario::where('login', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('nombres', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('perfil', 'LIKE', "%$keyword%")
                ->orWhere('id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $usuario = Usuario::latest()->paginate($perPage);
        }

        return view('admin.usuario.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.usuario.create');
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
        
        Usuario::create($requestData);

        return redirect('admin/usuario')->with('flash_message', 'Usuario added!');
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
        $usuario = Usuario::findOrFail($id);

        return view('admin.usuario.show', compact('usuario'));
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
        $usuario = Usuario::findOrFail($id);

        return view('admin.usuario.edit', compact('usuario'));
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
        
        $usuario = Usuario::findOrFail($id);
        $usuario->update($requestData);

        return redirect('admin/usuario')->with('flash_message', 'Usuario updated!');
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
        Usuario::destroy($id);

        return redirect('admin/usuario')->with('flash_message', 'Usuario deleted!');
    }
}
