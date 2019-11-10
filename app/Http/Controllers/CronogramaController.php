<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cronograma;
use Illuminate\Http\Request;

class CronogramaController extends Controller
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
            $cronograma = Cronograma::where('id', 'LIKE', "%$keyword%")
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

        return view('cronograma.index', compact('cronograma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cronograma.create');
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
        
        
        $datosCronograma=request()->except('_token');//excluye el token de request
        
        $file = $request->file('foto');
        if($request->hasFile('foto')){
            
            $datosCronograma['foto']=$file->openFile()->fread($file->getSize());

        }
        Cronograma::create($datosCronograma);
        $redireccion='cronograma?accion=creado';
        $mensaje='Creado Exitosamente';
        return redirect($redireccion)->with('mensaje', $mensaje);
       // return redirect('cronograma')->with('flash_message', 'Cronograma Agregado satisfactoriamente!');
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
        $cronograma = Cronograma::findOrFail($id);

        return view('cronograma.show', compact('cronograma'));
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
        $cronograma = Cronograma::findOrFail($id);

        return view('cronograma.edit', compact('cronograma'));
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

        $cronograma = Cronograma::findOrFail($id);
        $cronograma->update($requestData);

        $redireccion='cronograma?accion=editado';
        return redirect($redireccion)->with('flash_message', 'Estudiante updated!');
        //return redirect('cronograma')->with('flash_message', 'Cronograma updated!');
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
        Cronograma::destroy($id);

        return redirect('cronograma')->with('flash_message', 'Cronograma deleted!');
    }
}
