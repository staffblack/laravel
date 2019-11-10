<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
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
                $formulario = Formulario::where('id', 'LIKE', "%$keyword%")
                    ->orWhere('nombre', 'LIKE', "%$keyword%")
                    ->orWhere('descripcion', 'LIKE', "%$keyword%")
                    ->orWhere('documento', 'LIKE', "%$keyword%")
                    ->latest()->paginate($perPage);
            } else {
                $formulario = Formulario::latest()->paginate($perPage);
            }

        return view('formulario.index', compact('formulario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('formulario.create');
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
        
        $requestData=request()->except('_token');//excluye el token de request
        
        if($request->hasFile('documento')){
            $file = $request->file('documento');
            $name=time().$file->getClientOriginalName();
            $requestData['formato']=$name;
            //$requestData['documento']=$request->file('documento')->store('uploads','public');
            $file->move(public_path().'/storage/uploads/',$name);
            $requestData['documento']='uploads/'.$name;
        }
        
        Formulario::insert($requestData);//inserta la informacion
        
        //$requestData = $request->all();
       // $requestData=request()->except('_token');//excluye el token de request
        //$file = $request->file('documento');
        //if($request->hasFile('documento')){
            
        //    $requestData['documento']=$file->openFile()->fread($file->getSize());

        //}
        
        //$filename = $file->move(storage_path('app') . '/uploads/images/posts/' . $request->id);
        
        //$requestData['formato'] = $file->getClientOriginalExtension();
        //Formulario::insert($requestData);//inserta la informacion
        $redireccion='formulario?accion=creado';
        return redirect($redireccion)->with('flash_message', 'Estudiante updated!');
        //return redirect('formulario')->with('mensaje', $mensaje);
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
        $formulario = Formulario::findOrFail($id);

        return view('formulario.show', compact('formulario'));
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
        $formulario = Formulario::findOrFail($id);

        return view('formulario.edit', compact('formulario'));
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
                if ($request->hasFile('documento')) {
            $requestData['documento'] = $request->file('documento')
                ->store('uploads', 'public');
        }

        $formulario = Formulario::findOrFail($id);
        $formulario->update($requestData);

        $redireccion='formulario?accion=editado';
        return redirect($redireccion)->with('flash_message', 'Estudiante updated!');
        //return redirect('formulario')->with('flash_message', 'Formulario updated!');
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
        Formulario::destroy($id);

        return redirect('formulario')->with('flash_message', 'Formulario deleted!');
    }
}
