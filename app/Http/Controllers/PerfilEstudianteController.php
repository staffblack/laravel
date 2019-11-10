<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PerfilEstudiante;
use Illuminate\Http\Request;

class PerfilEstudianteController extends Controller
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
            $perfilestudiante = PerfilEstudiante::where('id', 'LIKE', "%$keyword%")
                ->orWhere('cedula', 'LIKE', "%$keyword%")
                ->orWhere('nombres', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $perfilestudiante = PerfilEstudiante::latest()->paginate($perPage);
        }

        return view('perfil-estudiante.index', compact('perfilestudiante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('perfil-estudiante.create');
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
                if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('uploads', 'public');
        }

        PerfilEstudiante::create($requestData);

        return redirect('perfil-estudiante')->with('flash_message', 'PerfilEstudiante added!');
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
        $perfilestudiante = PerfilEstudiante::findOrFail($id);

        return view('perfil-estudiante.show', compact('perfilestudiante'));
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
        $perfilestudiante = PerfilEstudiante::findOrFail($id);

        return view('perfil-estudiante.edit', compact('perfilestudiante'));
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
        //
       
        
        $requestData = $request->all();
              
        $file = $request->file('foto');
        if($request->hasFile('foto')){
            
            $requestData['foto']=$file->openFile()->fread($file->getSize());
        /*
        
        $requestData = $request->all();
               
        if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('uploads', 'public');
        
*/
        }

        $perfilestudiante = PerfilEstudiante::findOrFail($id);
        $perfilestudiante->update($requestData);

        $redireccion='perfil-estudiante/'.$id.'/edit';
        return redirect($redireccion)->with('flash_message', 'PerfilEstudiante updated!')->with('menu','usuario_docente');
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
        PerfilEstudiante::destroy($id);

        return redirect('perfil-estudiante')->with('flash_message', 'PerfilEstudiante deleted!');
    }
}
