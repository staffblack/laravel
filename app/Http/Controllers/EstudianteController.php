<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estudiante;
use Illuminate\Http\Request;

use App\Http\Requests\EstudianteStoreRequest;
use App\Http\Requests\EstudianteUpdateRequest;


class EstudianteController extends Controller
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
            $estudiante = Estudiante::where('id', 'LIKE', "%$keyword%")
                ->orWhere('cedula', 'LIKE', "%$keyword%")
                ->orWhere('nombres', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->orWhere('telefono_representante', 'LIKE', "%$keyword%")                
                ->latest()->paginate($perPage);
        } else {
            $estudiante = Estudiante::latest()->paginate($perPage);
        }

        return view('estudiante.index', compact('estudiante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(EstudianteStoreRequest $request)
    {
        
         $datosEstudiantes=request()->except('_token');//excluye el token de request
         
         $datosEstudiantes = request()->validate([
                    'nombres' => 'required',
                    'cedula' => 'required|unique:users,email,'.$request->cedula,
                    'apellidos' => 'required',
                    'password' => 'required',
                    'telefono_representante'=>'required',
            ]);
        
        $file = $request->file('foto');
        if($request->hasFile('foto')){
            
            $datosEstudiantes['foto']=$file->openFile()->fread($file->getSize());

        }
        
        Estudiante::insert($datosEstudiantes);//inserta la informacion

        $redireccion='estudiante?accion=creado';
        return redirect($redireccion)->with('flash_message', 'Estudiante Agregado!');
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
        $estudiante = Estudiante::findOrFail($id);

        return view('estudiante.show', compact('estudiante'));
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
        $estudiante = Estudiante::findOrFail($id);

        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(EstudianteUpdateRequest $request, $id)
    {
        
        $requestData = $request->all();
        $requestData = request()->validate([
                    'nombres' => 'required',
                    'cedula' => 'required|unique:users,email,'.$request->cedula,
                    'apellidos'=> 'required',
                    'password'=> 'required',
                    'telefono_representante'=> 'required',
            ]);
        
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

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($requestData);
        $redireccion='estudiante?accion=editado';
        return redirect($redireccion)->with('flash_message', 'Estudiante updated!');
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
        Estudiante::destroy($id);

        return redirect('estudiante')->with('flash_message', 'Estudiante deleted!');
    }
}
