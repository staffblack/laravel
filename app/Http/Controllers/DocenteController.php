<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Docente;
use App\Area;
use Illuminate\Http\Request;

use App\Http\Requests\DocenteStoreRequest;
use App\Http\Requests\DocenteUpdateRequest;

class DocenteController extends Controller
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
            $docente = Docente::where('cedula', 'LIKE', "%$keyword%")
                ->orWhere('grado', 'LIKE', "%$keyword%")
                ->orWhere('nombres', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('cargo', 'LIKE', "%$keyword%")
                ->orWhere('area', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->orWhere('grado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $docente = Docente::latest()->paginate($perPage);
        }

        return view('docente.index', compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $area = Area::all();
        return view('docente.create',compact('area'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(DocenteStoreRequest $request)
    {
        $datosEstudiantes=request()->except('_token');//excluye el token de request
        
        $file = $request->file('foto');
        if($request->hasFile('foto')){
            
            $datosEstudiantes['foto']=$file->openFile()->fread($file->getSize());

        }
        
        Docente::insert($datosEstudiantes);//inserta la informacion
        //return redirect()->route('estudiantes.index')->with('success','Registro creado satisfactoriamente');

        
        
        ////
        //$requestData = $request->all();
        
        //Docente::create($requestData);

       $redireccion='docente?accion=creado';
       return redirect($redireccion)->with('flash_message', 'Docente updated!');
       //return redirect('docente')->with('flash_message', 'Docente agregado!');
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
        $docente = Docente::findOrFail($id);

        return view('docente.show', compact('docente'));
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
        $docente = Docente::findOrFail($id);
        $area = Area::all();
        

        return view('docente.edit', compact('docente','area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(DocenteUpdateRequest $request, $id)
    {
        
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
        $docente = Docente::findOrFail($id);
        $docente->update($requestData);

        $redireccion='docente?accion=editado';
        return redirect($redireccion)->with('flash_message', 'Docente updated!');
        return redirect('docente')->with('flash_message', 'Docente updated!');
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
        Docente::destroy($id);

        return redirect('docente')->with('flash_message', 'Docente deleted!');
    }
}
